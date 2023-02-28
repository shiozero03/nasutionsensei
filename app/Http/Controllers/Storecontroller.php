<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Portfolio;
use App\Models\OrganizationAchievement;
use App\Models\Skill;
use App\Models\JobExperience;
use App\Models\Education;

use Session;

class Storecontroller extends Controller
{
    //
    public function article(Request $request){
        $tujuan_upload = 'assets/images/landing-page/article';
        $file = $request->file('featured_image');
        $namafile = time().'_'.$file->getClientOriginalName();
        $file->move($tujuan_upload,$namafile);

        $artikel = new Article;
        $artikel->title = $request->title;
        $artikel->feature_image = $namafile;
        $artikel->content = $request->content;
        $artikel->view = 0;
        $artikel->category = $request->category;
        $artikel->created_at = $request->created_at;
        $artikel->save();
        return redirect('admin/article')->with('successAddArticle', 'successAddArticle');
    }
    public function portfolio(Request $request){
        $tujuan_upload = 'assets/images/landing-page/portfolio/thumbnail/';
        $file = $request->file('thumbnail');
        $namafile = time().'_'.$file->getClientOriginalName();
        $file->move($tujuan_upload,$namafile);

        $category = $request->category;
        if($category == 'Journal' || $category == 'Makalah'){
            $tujuan_upload_file = 'assets/pdf/landing-page/portfolio/journal/';
            $file_journal = $request->file('file');
            $namafilejournal = time().'_'.$file_journal->getClientOriginalName();
            $file_journal->move($tujuan_upload_file,$namafilejournal);
            $links = $namafilejournal;
        } elseif ($category == 'Skripsi'){
            $tujuan_upload_file = 'assets/pdf/landing-page/portfolio/skripsi/';
            $file_skripsi = $request->file('file');
            $namafileskripsi = time().'_'.$file_skripsi->getClientOriginalName();
            $file_skripsi->move($tujuan_upload_file,$namafileskripsi);
            $links = $namafileskripsi;
        } elseif ($category == 'Design'){
            $tujuan_upload_file = 'assets/images/landing-page/portfolio/design/';
            $file_design = $request->file('file');
            $namafiledesign = time().'_'.$file_design->getClientOriginalName();
            echo $namafiledesign;
            $file_design->move($tujuan_upload_file,$namafiledesign);
            $links = $namafiledesign;
        } else {
            $links = $request->link;
        }
        $porto = new Portfolio;
        $porto->id_admin = Session('loginid');
        $porto->title = $request->title;
        $porto->category = $request->category;
        $porto->thumbnail = $namafile;
        $porto->link = $links;
        $porto->content = $request->content;
        $porto->created_at = $request->created_at;
        $porto->save();
        return back()->with('successAddPorfolio', 'successAddPorfolio');
    }
    public function userorganization(Request $request){
        $org = new OrganizationAchievement;
        $org->id_admin = Session('loginid');
        $org->name = $request->name;
        $org->category = 'Organization';
        $org->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function userachievement(Request $request){
        $org = new OrganizationAchievement;
        $org->id_admin = Session('loginid');
        $org->name = $request->name;
        $org->category = 'Achievement';
        $org->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function usersertification(Request $request){
        $org = new OrganizationAchievement;
        $org->id_admin = Session('loginid');
        $org->name = $request->name;
        $org->category = 'Sertification';
        $org->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function usersoftskill(Request $request){
        $skill = new Skill;
        $skill->id_admin = Session('loginid');
        $skill->name = $request->name;
        $skill->category = 'Soft Skill';
        $skill->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function userhardskill(Request $request){
        $skill = new Skill;
        $skill->id_admin = Session('loginid');
        $skill->name = $request->name;
        $skill->category = 'Hard Skill';
        $skill->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function userhardskillprogramming(Request $request){
        $skill = new Skill;
        $skill->id_admin = Session('loginid');
        $skill->name = $request->name;
        $skill->category = 'Hard Skill';
        $skill->category_hardskill = 'Programming';
        $skill->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function userjob(Request $request){
        $job = new JobExperience;
        $job->id_admin = Session('loginid');
        $job->location = $request->location;
        $job->position = $request->position;
        $job->about = $request->about;
        $job->date = $request->date;
        $job->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function userlanguage(Request $request){

        $tujuan_upload = 'assets/images/landing-page/';
        $file = $request->file('picture');
        $namafile = time().'_'.$file->getClientOriginalName();
        $file->move($tujuan_upload,$namafile);

        $skill = new Skill;
        $skill->id_admin = Session('loginid');
        $skill->category = 'Language';
        $skill->picture = $namafile;
        $skill->name = $request->name;
        $skill->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
    public function usereducation(Request $request){

        $tujuan_upload = 'assets/images/landing-page/';
        $file = $request->file('school_logo');
        $namafile = time().'_'.$file->getClientOriginalName();
        $file->move($tujuan_upload,$namafile);
        
        $edu = new Education;
        $edu->id_admin = Session('loginid');
        $edu->school_logo = $namafile;
        $edu->school_name = $request->school_name;
        $edu->afillate = $request->afillate;

        if($request->still == 'on'){
            $edu->year = $request->startyear;
        } else{
            $edu->year = $request->startyear.' - '.$request->endyear;
        }
        $edu->save();
        return back()->with('successAddProfile', 'successAddProfile');   
    }
}
