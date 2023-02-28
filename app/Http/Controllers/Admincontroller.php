<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Articlecomment;
use App\Models\Admin;
use App\Models\OrganizationAchievement;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Order;
use App\Models\Message;
use App\Models\Subscribe;

use Session;

class Admincontroller extends Controller
{
    //
    public function __construct() {
        $this->middleware('LoginProcess');
    }
    public function index(){
        $order = Order::all();
        $orderwhere = Order::where('created_at','>=', date('Y-m-d').' 00:00:00')->where('created_at', '<=', date('Y-m-d').' 23:59:59');
        $message = Message::all();
        $messagewhere = Message::where('created_at','>=', date('Y-m-d').' 00:00:00')->where('created_at', '<=', date('Y-m-d').' 23:59:59');
        $article = Article::all();
        $articlewhere = Article::where('created_at','>=', date('Y-m-d').' 00:00:00')->where('created_at', '<=', date('Y-m-d').' 23:59:59');
        $subscribe = Subscribe::all();
        $subscribewhere = Subscribe::where('created_at','>=', date('Y-m-d').' 00:00:00')->where('created_at', '<=', date('Y-m-d').' 23:59:59');
        $profil = Admin::find(Session('loginid'));

        $orderjan = Order::where('created_at', '>=', date('Y-01-01').' 00:00:00')->where('created_at', '<=', date('Y-01-31').' 23:59:59')->count();
        $orderfeb = Order::where('created_at', '>=', date('Y-02-01').' 00:00:00')->where('created_at', '<=', date('Y-02-29').' 23:59:59')->count();
        $ordermar = Order::where('created_at', '>=', date('Y-03-01').' 00:00:00')->where('created_at', '<=', date('Y-03-31').' 23:59:59')->count();
        $orderapr = Order::where('created_at', '>=', date('Y-04-01').' 00:00:00')->where('created_at', '<=', date('Y-04-30').' 23:59:59')->count();
        $ordermay = Order::where('created_at', '>=', date('Y-05-01').' 00:00:00')->where('created_at', '<=', date('Y-05-31').' 23:59:59')->count();
        $orderjun = Order::where('created_at', '>=', date('Y-06-01').' 00:00:00')->where('created_at', '<=', date('Y-06-30').' 23:59:59')->count();
        $orderjul = Order::where('created_at', '>=', date('Y-07-01').' 00:00:00')->where('created_at', '<=', date('Y-07-31').' 23:59:59')->count();
        $orderaug = Order::where('created_at', '>=', date('Y-08-01').' 00:00:00')->where('created_at', '<=', date('Y-08-31').' 23:59:59')->count();
        $ordersep = Order::where('created_at', '>=', date('Y-09-01').' 00:00:00')->where('created_at', '<=', date('Y-09-30').' 23:59:59')->count();
        $orderoct = Order::where('created_at', '>=', date('Y-10-01').' 00:00:00')->where('created_at', '<=', date('Y-10-31').' 23:59:59')->count();
        $ordernov = Order::where('created_at', '>=', date('Y-11-01').' 00:00:00')->where('created_at', '<=', date('Y-11-30').' 23:59:59')->count();
        $orderdes = Order::where('created_at', '>=', date('Y-12-01').' 00:00:00')->where('created_at', '<=', date('Y-12-31').' 23:59:59')->count();


        $data = [
            'order' => $order,
            'orderwhere' => $orderwhere,
            'message' => $message,
            'messagewhere' => $messagewhere,
            'article' => $article,
            'articlewhere' => $articlewhere,
            'subscribe' => $subscribe,
            'subscribewhere' => $subscribewhere,
            'profil' => $profil,

            'orderjan' => $orderjan,
            'orderfeb' => $orderfeb,
            'ordermar' => $ordermar,
            'orderapr' => $orderapr,
            'ordermay' => $ordermay,
            'orderjun' => $orderjun,
            'orderjul' => $orderjul,
            'orderaug' => $orderaug,
            'ordersep' => $ordersep,
            'orderoct' => $orderoct,
            'ordernov' => $ordernov,
            'orderdes' => $orderdes
        ];
        return view('pages-admin.dashboard.index')->with($data);
    }
    public function profile(){
        $profil = Admin::find(Session('loginid'));
        $organisasi = OrganizationAchievement::where('id_admin', Session('loginid'))->get();
        $skill = Skill::where('id_admin', Session('loginid'))->get();
        $education = Education::where('id_admin', Session('loginid'))->get();
        $data = [
            'profil' => $profil,
            'organisasi' => $organisasi,
            'skill' => $skill,
            'education' => $education
        ];
        return view('pages-admin.profile.index')->with($data);
    }
    public function article(Request $request){
        return view('pages-admin.article.index');
    }
    public function articleview(Request $request){
        $artikel = Article::where('id_article', $request->id)
                    ->first();
        $data = [
            'artikel' => $artikel
        ];
        return view('pages-admin.article.view')->with($data);
    }
    public function articleadd(Request $request){
        return view('pages-admin.article.add');
    }
    public function articleedit(Request $request){
        $artikel = Article::where('id_article', $request->id)
                    ->first();
        $data = [
            'artikel' => $artikel
        ];
        return view('pages-admin.article.edit')->with($data);
    }
    public function articlecomment(Request $request){
        $artikel = Articlecomment::where('id_article', $request->id)
                    ->first();
        $data = [
            'id' => $request->id,
            'artikel' => $artikel
        ];
        return view('pages-admin.article.comment')->with($data);
    }
    public function message(Request $request){
        return view('pages-admin.message.index');
    }
    public function subscribe(Request $request){
        return view('pages-admin.subscribe.index');
    }
    public function order(Request $request){
        return view('pages-admin.order.index');
    }
    public function portfolio(Request $request){
        return view('pages-admin.portfolio.index');
    }
}
