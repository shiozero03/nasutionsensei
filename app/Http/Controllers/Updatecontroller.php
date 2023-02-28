<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Portfolio;
use App\Models\Admin;
use App\Models\JobExperience;
use App\Models\Education;

use Hash;

class Updatecontroller extends Controller
{
    public function article(Request $request){
        $tujuan_upload = 'assets/images/landing-page/article';

        $art = Article::where('id_article', $request->id_article)->first();

        $title = $request->title;
        $content = $request->content;
        $category = $request->category;
        $created_at = $request->created_at;

        if($request->featured_image == null){
            $data = [
                'title' => $title,
                'content' => $content,
                'category' => $category,
                'created_at' => $created_at
            ];
        } else{
            $delete = \File::delete('assets/images/landing-page/article/'.$art->feature_image);
            if($delete){
                $file = $request->file('featured_image');
                $namafile = time().'_'.$file->getClientOriginalName();
                $file->move($tujuan_upload,$namafile);

                $data = [
                    'feature_image' => $namafile,
                    'title' => $title,
                    'content' => $content,
                    'category' => $category,
                    'created_at' => $created_at
                ];
            }
        }
        Article::where('id_article', $request->id_article)->update($data);
        return redirect('admin/article')->with('successUpdateArticle', 'successUpdateArticle');
    }
    public function portfolio(Request $request){
        $id = $request->id_portfolio;

        $cekport = Portfolio::where('id_portfolio', $id)->first();
        if($request->created_at == null){ $created_at = $cekport->created_at; } else { $created_at = $request->created_at; }
        if($request->thumbnail == null){ $thumbnail = $cekport->thumbnail; } else {
            $delete = \File::delete('assets/images/landing-page/portfolio/thumbnail/'.$cekport->thumbnail);
            if($delete){
                $tujuan_upload = 'assets/images/landing-page/portfolio/thumbnail/';
                $file = $request->file('thumbnail');
                $namafile = time().'_'.$file->getClientOriginalName();
                $file->move($tujuan_upload,$namafile); $thumbnail = $namafile;
            }
        }

        $category = $request->category;

        if($category == 'Journal' || $category == 'Makalah'){
            if($request->file == null){ $links = $cekport->link; } else {
                $delete = \File::delete('assets/pdf/landing-page/portfolio/journal/'.$cekport->link);
                if($delete){
                    $tujuan_upload_file = 'assets/pdf/landing-page/portfolio/journal/';
                    $file_journal = $request->file('file');
                    $namafilejournal = time().'_'.$file_journal->getClientOriginalName();
                    $file_journal->move($tujuan_upload_file,$namafilejournal);
                    $links = $namafilejournal;
                }
            }
        } elseif ($category == 'Skripsi'){
            if($request->file == null){ $links = $cekport->link; } else {
                $delete = \File::delete('assets/pdf/landing-page/portfolio/skripsi/'.$cekport->link);
                if($delete){
                    $tujuan_upload_file = 'assets/pdf/landing-page/portfolio/skripsi/';
                    $file_skripsi = $request->file('file');
                    $namafileskripsi = time().'_'.$file_skripsi->getClientOriginalName();
                    $file_skripsi->move($tujuan_upload_file,$namafileskripsi);
                    $links = $namafileskripsi;
                }
            }
        } elseif ($category == 'Design'){
            if($request->file == null){ $links = $cekport->link; } else {
                $delete = \File::delete('assets/images/landing-page/portfolio/design/'.$cekport->link);
                if($delete){
                    $tujuan_upload_file = 'assets/images/landing-page/portfolio/design/';
                    $file_design = $request->file('file');
                    $namafiledesign = time().'_'.$file_design->getClientOriginalName();
                    $file_design->move($tujuan_upload_file,$namafiledesign);
                    $links = $namafiledesign;
                }
            }
        } else {
            $links = $request->link;
        }
        $data = [
            'category' => $category,
            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'link' => $links,
            'created_at' => $created_at
        ];
        Portfolio::where('id_portfolio', $id)->update($data);
        return back()->with('successUpdatePortfolio', 'successUpdatePortfolio');
    }
    public function profilpicture(Request $request){
        $tujuan_upload = 'assets/images/landing-page';
        $admin = Admin::find(Session('loginid'));
        $delete = \File::delete('assets/images/landing-page/'.$admin->profile_picture);
        if($delete){
            $file = $request->file('profile_picture');
            $namafile = time().'_'.$file->getClientOriginalName();
            $file->move($tujuan_upload,$namafile);

            $data = [
                'profile_picture' => $namafile
            ];
            Admin::find(Session('loginid'))->update($data);
        }
        return back()->with('successUpdateProfile', 'successUpdateProfile');
    }
    public function userlogin(Request $request){
        $admin = Admin::find(Session('loginid'));
        if($request->password == $admin->password){ $password = $admin->password; } else{ $password = Hash::make($request->password); }
        $data = [
            'username' => $request->username,
            'password' => $password
        ];
        Admin::find(Session('loginid'))->update($data);
        return back()->with('successUpdateProfile', 'successUpdateProfile');
    }
    public function userinfo(Request $request){  
        $data = [
            'name' => $request->name,
            'about' => $request->about,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'url' => $request->url,
            'whatsapp' => $request->whatsapp,
            'github' => $request->github,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube
        ];
        Admin::find(Session('loginid'))->update($data);
        return back()->with('successUpdateProfile', 'successUpdateProfile');
    }
    public function userjob(Request $request){
        $data = [
            'location' => $request->location,
            'position' => $request->position,
            'about' => $request->about,
            'date' => $request->date
        ];
        JobExperience::where('id_job', $request->id_job)->update($data);
        return back()->with('successUpdateProfile', 'successUpdateProfile');
    }
    public function usereducation(Request $request){
        $tujuan_upload = 'assets/images/landing-page/';
        $edu = Education::where('id_education', $request->id_education)->first();

        if($request->school_logo == null){
            $data = [
                'school_name' => $request->school_name,
                'afillate' => $request->afillate,
                'year' => $request->startyear
            ];
        } else{
            $delete = \File::delete('assets/images/landing-page/'.$edu->school_logo);
            if($delete){
                $file = $request->file('school_logo');
                $namafile = time().'_'.$file->getClientOriginalName();
                $file->move($tujuan_upload,$namafile);
                $data = [
                    'school_logo' => $namafile,
                    'school_name' => $request->school_name,
                    'afillate' => $request->afillate,
                    'year' => $request->startyear
                ];
            }
        }
        Education::where('id_education', $request->id_education)->update($data);
        return back()->with('successUpdateProfile', 'successUpdateProfile');  
    }
}
