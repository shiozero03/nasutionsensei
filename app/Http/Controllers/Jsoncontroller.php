<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Subscribe;
use App\Models\Order;
use App\Models\Article;
use App\Models\Articlecomment;
use App\Models\Portfolio;
use App\Models\Education;
use App\Models\JobExperience;
use App\Models\Skill;

use Session;
use DataTables;

class Jsoncontroller extends Controller
{
    //
    public function article(){
        $mess = Article::get();
        return DataTables::of(Article::all())
        ->addColumn('image', function ($mess){
          $img = "<img src='".asset("assets/images/landing-page/article/".$mess->feature_image)."' width='50%'>";
          return $img;
          })
        ->addColumn('view', function ($mess){
          $view = "<p>".$mess->view."</p>";
          return $view;
          })
        ->addColumn('last_update', function ($mess){
          $last = "<p>".date('d-m-Y', strtotime($mess->updated_at))."</p>";
          return $last;
          })
        ->addColumn('action', function($mess){
            $button = "<a href=".URL('/admin/article/view/'.$mess->id_article)." class='view ms-2 btn btn-success mt-2'><i class='fas fa-eye'></i></a>";
            $button .= "<a class='update ms-2 btn btn-warning mt-2' href=".URL('/admin/article/edit/'.$mess->id_article)."><i class='fas fa-edit'></i></a>";
            $button .= "<button class='hapus ms-2 btn btn-danger mt-2' id_article='".$mess->id_article."'><i class='fas fa-trash'></i></button>";
            $button .= "<a class='comment ms-2 btn btn-primary mt-2' href=".URL('/admin/article/comment/'.$mess->id_article)."><i class='fas fa-comment'></i></a>";
            return $button; })
        ->rawColumns(['action', 'image', 'view', 'last_update'])->make(true);
    }
    public function articlecomment(Request $request){
        $mess = Articlecomment::where('id_article', $request->id)->get();
        return DataTables::of(Articlecomment::where('id_article', $request->id)->get())->addColumn('action', function($mess){
            $button = "<button class='hapus btn btn-danger mt-2' id_comments='".$mess->id_comments."'><i class='fas fa-trash'></i></button>";
            return $button;
        })->rawColumns(['action'])->make(true);
    }
    public function message(){
        $mess = Message::get();
        return DataTables::of(Message::all())->addColumn('action', function($mess){
            $button = "<button class='hapus btn btn-danger mt-2' id_message='".$mess->id_message."'><i class='fas fa-trash'></i></button>";
            return $button;
        })->rawColumns(['action'])->make(true);
    }
    public function subscribe(){
        $mess = Subscribe::get();
        return DataTables::of(Subscribe::all())->addColumn('action', function($mess){
            $button = "<button class='hapus btn btn-danger mt-2' id_subscribe='".$mess->id_subscribe."'><i class='fas fa-trash'></i></button>";
            return $button;
        })->rawColumns(['action'])->make(true);
    }
    public function order(){
        $mess = Order::get();
        return DataTables::of(Order::all())->addColumn('action', function($mess){
            $button = "<button class='hapus btn btn-danger mt-2' id_order='".$mess->id_order."'><i class='fas fa-trash'></i></button>";
            return $button;
        })->rawColumns(['action'])->make(true);
    }
    public function portfolio(){
        $mess = Portfolio::get();
        return DataTables::of(Portfolio::all())
        ->addColumn('image', function ($mess){
          $img = "<img src='".asset("assets/images/landing-page/portfolio/thumbnail/".$mess->thumbnail)."' width='50%'>";
          return $img;
          })
        ->addColumn('action', function($mess){
            $link = $mess->link;
            if($mess->category == 'Website'){
                $button = "<a href=".$link." class='view ms-2 btn btn-success mt-2'><i class='fas fa-eye'></i></a>";
            } elseif ($mess->category == 'Skripsi'){
                $button = "<a href='/portfolio-admin/assets/pdf/landing-page/portfolio/skripsi/".$link."' target='__blank' class='view ms-2 btn btn-success mt-2'><i class='fas fa-eye'></i></a>";
            } elseif ($mess->category == 'Design'){
                $button = "<a href='/portfolio-admin/assets/images/landing-page/portfolio/design/".$link."' target='__blank' class='view ms-2 btn btn-success mt-2'><i class='fas fa-eye'></i></a>";
            }
            else{
                $button = "<a target='__blank' href='/portfolio-admin/assets/pdf/landing-page/portfolio/journal/".$link."' class='view ms-2 btn btn-success mt-2'><i class='fas fa-eye'></i></a>";
            }
            $button .= "<button class='update ms-2 btn btn-warning mt-2' id_portfolio='".$mess->id_portfolio."'><i class='fas fa-edit'></i></button>";
            $button .= "<button class='hapus ms-2 btn btn-danger mt-2' id_portfolio='".$mess->id_portfolio."'><i class='fas fa-trash'></i></button>";
            return $button; })
        ->rawColumns(['action', 'image'])->make(true);
    }
    public function editportfolio(Request $request){
      $id = $request->id_portfolio;
      $data = Portfolio::where('id_portfolio', $id)->first();
      $date = date('Y-m-d H:i', strtotime($data->created_at));
      return response()->json(['data' => $data, 'date' => $date]);
    }
    public function job(){
        $mess = JobExperience::get();
        return DataTables::of(JobExperience::all())
        ->addColumn('action', function($mess){
            $button = "<button class='update me-1 btn btn-warning mt-2 ' id_job='".$mess->id_job."'><i class='fas fa-edit'></i></button>";
            $button .= "<a class='hapus btn btn-danger mt-2' href=".URL('admin/delete/profil/user-job/'.$mess->id_job)."><i class='fas fa-trash'></i></a>";
            return $button;
        })->rawColumns(['action'])->make(true);
    }
    public function editjob(Request $request){
      $id = $request->id_job;
      $data = JobExperience::where('id_job', $id)->first();
      return response()->json(['data' => $data]);
    }
    public function language(){
        $mess = Skill::where('category', 'Language')->get();
        return DataTables::of(Skill::where('category', 'Language')->get())
        ->addColumn('image', function ($mess){
          $img = "<img src='".asset("assets/images/landing-page/".$mess->picture)."' width='50%'>";
          return $img;
          })
        ->addColumn('action', function($mess){
            $button = "<a class='hapus btn btn-danger mt-2' href=".URL('admin/delete/profil/user-skill/'.$mess->id_skill)."><i class='fas fa-trash'></i></a>";
            return $button;
        })->rawColumns(['action', 'image'])->make(true);
    }
    public function education(){
        $mess = Education::get();
        return DataTables::of(Education::all())
        ->addColumn('image', function ($mess){
          $img = "<img src='".asset("assets/images/landing-page/".$mess->school_logo)."' width='50%'>";
          return $img;
          })
        ->addColumn('action', function($mess){
            $button = "<button class='updateeducation me-1 btn btn-warning mt-2 ' id_education='".$mess->id_education."'><i class='fas fa-edit'></i></button>";
            $button .= "<a class='hapus btn btn-danger mt-2' href=".URL('admin/delete/profil/user-education/'.$mess->id_education)."><i class='fas fa-trash'></i></a>";
            return $button;
        })->rawColumns(['action', 'image'])->make(true);
    }
    public function editeducation(Request $request){
      $id = $request->id_education;
      $data = Education::where('id_education', $id)->first();
      return response()->json(['data' => $data]);
    }

}
