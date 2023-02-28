<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Articlecomment;
use App\Models\Skill;
use App\Models\Education;
use App\Models\OrganizationAchievement;
use App\Models\JobExperience;
use App\Models\Portfolio;
use App\Models\Message;
use App\Models\Order;
use App\Models\Subscribe;

class Homecontroller extends Controller
{
    public function __construct(){
        $this->admin = Admin::find(1);
    }
    public function index(){
        $artikel = Article::orderBy('created_at', 'DESC')->limit(4)->get();
        $profil = $this->admin;
        $portfolio = portfolio::orderBy('created_at', 'DESC')->limit(4)->get();
        $data = [
            'portfolio' => $portfolio,
            'profil' => $profil,
            'artikel' => $artikel
        ];
        return view('pages-landing.beranda.index')->with($data);
    }
    public function about(){
        $profil = $this->admin;
        $edu = Education::all();
        $lang = Skill::where('category', 'Language')
                    ->get();
        $organization = OrganizationAchievement::where('category', 'Organization')
                        ->get();
        $achievement = OrganizationAchievement::where('category', 'Achievement')
                        ->get();
        $sertification = OrganizationAchievement::where('category', 'Sertification')
                        ->get();
        $softskill = Skill::where('category', 'Soft Skill')
                        ->where('category_hardskill', null)
                        ->get();
        $hardskillnp = Skill::where('category', 'Hard Skill')
                        ->where('category_hardskill', null)
                        ->get();
        $hardskillp = Skill::where('category', 'Hard Skill')
                        ->where('category_hardskill', 'Programming')
                        ->get();
        $job = JobExperience::all();
        $data = [
            'profil' => $profil,
            'edu' => $edu,
            'lang' => $lang,
            'organization' => $organization,
            'achievement' => $achievement,
            'sertification' => $sertification,
            'job' => $job,
            'softskill' => $softskill,
            'hardskill' => $hardskillnp,
            'programming' => $hardskillp
        ];
        return view('pages-landing.about.index')->with($data);
    }
    public function article(){
        $profil = $this->admin;
        $artikel = Article::orderBy('created_at', 'DESC')->paginate(12);
        $data = [
            'artikel' => $artikel,
            'profil' => $profil
        ];
        return view('pages-landing.article.index')->with($data);
    }
    public function viewArticle(Request $request){
        $profil = $this->admin;
        $artikel = Article::where('id_article', $request->id)
                    ->first();
        $dataview = ['view' => $artikel->view+1];
        Article::where('id_article', $request->id)->update($dataview);
        $otherArtikel = Article::limit(5)
                        ->where('id_article', '!=', $request->id)
                        ->where('category', $artikel->category)
                        ->get();
        $data = [
            'profil' => $profil,
            'artikel' => $artikel,
            'other' => $otherArtikel
        ];
        return view('pages-landing.article.view')
                ->with($data);
    }
    public function commentArticle(Request $request){
        $artikel = new Articlecomment;
        $artikel->id_article = $request->id_article;
        $artikel->name = $request->name;
        $artikel->feedback = $request->comment;
        $artikel->save();
        return back()->with('successSendFeedback', 'successSendFeedback');
    }
    public function portfolio(){
        $profil = $this->admin;
        $portfolio = Portfolio::orderBy('created_at', 'DESC')->paginate(12);
        $data = [
            'portfolio' => $portfolio,
            'profil' => $profil
        ];
        return view('pages-landing.portfolio.index')->with($data);
    }
    public function message(Request $request){
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();
        return back()->with('successSendMessage', 'successSendMessage');
    }
    public function order(Request $request){
        $order = new Order;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->order_category = $request->order_category;
        $order->information = $request->information;
        $order->save();
        return back()->with('successSendOrder', 'successSendOrder');
    }
    public function subscribe(Request $request){
        $subs = new Subscribe;
        $subs->email = $request->email;
        $subs->save();
        return back()->with('successSendSubscribe', 'successSendSubscribe');
    }
}
