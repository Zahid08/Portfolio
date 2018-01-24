<?php

namespace App\Http\Controllers;

use App\Commnet;
use App\portfolio;
use App\Skill;
use Illuminate\Http\Request;
use PhpParser\Comment;

class WelcomeController extends Controller
{
   public  function  index(){
       $skills=Skill::orderBy('id','desc')->take(10)->where('publication_status', 1)->get();
       $portfolio=portfolio::orderBy('id','desc')->take(10)->where('publication_status', 1 )->where('Type_project','Web')->get();
       $webs=portfolio::orderBy('id','desc')->take(10)->where('publication_status', 1 )->where( 'Type_project','Desktop')->get();
       return view('frontend.home.home-content',
           ['skills'=>$skills,'portfolio'=>$portfolio,'webs'=>$webs]
       );
   }

    public  function Usercomment(Request $request){
        $comments=new Commnet();
        $comments->name=$request->name;
        $comments->email=$request->email;
        $comments->phoneno=$request->phoneno;
        $comments->place=$request->place;
        $comments->project_details=$request->project_details;
        $comments->save();
        return redirect('/');
    }
}
