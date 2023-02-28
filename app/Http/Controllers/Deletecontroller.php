<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Articlecomment;
use App\Models\Message;
use App\Models\Subscribe;
use App\Models\Order;
use App\Models\Portfolio;
use App\Models\OrganizationAchievement;
use App\Models\Skill;
use App\Models\JobExperience;
use App\Models\Education;


class Deletecontroller extends Controller
{
    //
    public function article(Request $request){
        $id = $request->id_article;
        $art = Article::where('id_article', $id)->first();
        $delete = \File::delete('assets/images/landing-page/article/'.$art->feature_image);
        if($delete){
            Article::where('id_article', $id)->delete();
            Articlecomment::where('id_article', $id)->delete();
        }
        return response()->json(['text' => 'Data deleted successfully'], 200);
    }
    public function comment(Request $request){
        $id = $request->id_comments;
        Articlecomment::where('id_comments', $id)->delete();
        return response()->json(['text' => 'Data deleted successfully'], 200);
    }
    public function message(Request $request){
        $id = $request->id_message;
        Message::where('id_message', $id)->delete();
        return response()->json(['text' => 'Data deleted successfully'], 200);
    }
    public function subscribe(Request $request){
        $id = $request->id_subscribe;
        Subscribe::where('id_subscribe', $id)->delete();
        return response()->json(['text' => 'Data deleted successfully'], 200);
    }
    public function order(Request $request){
        $id = $request->id_order;
        Order::where('id_order', $id)->delete();
        return response()->json(['text' => 'Data deleted successfully'], 200);
    }
    public function portfolio(Request $request){
        $id = $request->id_portfolio;
        $art = Portfolio::where('id_portfolio', $id)->first();
        $delete = \File::delete('assets/images/landing-page/portfolio/thumbnail/'.$art->thumbnail);
        if($delete){
            if($art->category == 'Design'){
                $deletefile = \File::delete('assets/images/landing-page/portfolio/design/'.$art->link);
                if($deletefile){
                    Portfolio::where('id_portfolio', $id)->delete();
                }
            } elseif($art->category == 'Journal'){
                $deletefile = \File::delete('assets/pdf/landing-page/portfolio/journal/'.$art->link);
                if($deletefile){
                    Portfolio::where('id_portfolio', $id)->delete();
                }
            } elseif($art->category == 'Skripsi'){
                $deletefile = \File::delete('assets/pdf/landing-page/portfolio/skripsi/'.$art->link);
                if($deletefile){
                    Portfolio::where('id_portfolio', $id)->delete();
                }
            } else{
                $test = Portfolio::where('id_portfolio', $id)->delete();
            }
        }
        return response()->json(['text' => 'Data deleted successfully'], 200);
    }
    public function userorganization(Request $request){
        OrganizationAchievement::where('id_organization', $request->id)->delete();
        return back()->with('successDeleteOrganization', 'successDeleteOrganization');   
    }
    public function userskill(Request $request){
        Skill::where('id_skill', $request->id)->delete();
        return back()->with('successDeleteSkill', 'successDeleteSkill');   
    }
    public function userjob(Request $request){
        JobExperience::where('id_job', $request->id)->delete();
        return back()->with('successDeleteJob', 'successDeleteJob');   
    }
    public function usereducation(Request $request){
        Education::where('id_education', $request->id)->delete();
        return back()->with('successDeleteEducation', 'successDeleteEducation');   
    }
}
