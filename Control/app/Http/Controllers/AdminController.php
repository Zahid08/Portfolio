<?php

namespace App\Http\Controllers;

use App\Commnet;
use App\FeedBackMailInfo;
use App\portfolio;
use App\Skill;
use App\sub_image;
use App\typeofproject;
use Illuminate\Http\Request;
use Image;
use Mail;
use Session;

class AdminController extends Controller
{

    public  function  mangeSkill(){
        $skills=Skill::orderBy('id','desc')->take(15)->get();
        return view('Admin.Skill.skill-content',
            ['skills'=>$skills]
        );
    }

    public  function  portfolio(){
        $projects=typeofproject::orderBy('id','desc')->take(15)->get();
        $portolios=portfolio::orderBy('id','desc')->take(15)->get();
        return view('Admin.Project.project-content',
            ['projects'=>$projects,'portolios'=>$portolios]
        );
    }

    public  function comment(){
        $comments=Commnet::orderBy('id','desc')->take(15)->get();
        return view('Admin.Comment.comment-content',
            ['comments'=>$comments]
        );
    }

    public function EditComment($id){
        $comments = Commnet::find($id);
        return view('Admin.Comment.Edit-content',['comments'=>$comments]);
    }

    public function SendMail(Request $request){
   $mail=new FeedBackMailInfo();
   $mail->email=$request->email;
   $mail->message=$request->message;
   $mail->save();



   $data = $mail->toArray();
   Mail::send('Admin.Comment.mail', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Congratulation Mail');
        });
        return redirect('/comment');
    }

    public function addNewSkill(Request $request){
       $addskill=new Skill();
       $addskill->skill_name=$request->skill_name;
       $addskill->percentage=$request->percentage;
       $addskill->publication_status=$request->publication_status;
       $addskill->save();
       return redirect('/skill');
    }

    public function  published($id){
        $skill = Skill::find($id);
        $skill->publication_status= 1;
        $skill->save();
        return redirect('/skill')->with('message', 'skill info published successfully.');

    }
    public function  unpublished($id){
        $skill = Skill::find($id);
        $skill->publication_status= 0;
        $skill->save();
        return redirect('/skill')->with('message', 'skill info published successfully.');
    }
    public function Remove($id){
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('/skill')->with('message', 'delete successfully.');
    }

    public  function RemoveComment($id){
        $comment = Commnet::find($id);
        $comment->delete();
        return redirect('/comment')->with('message', 'delete successfully.');
    }

    public function ProjectType(Request $request){
    $project=new typeofproject();
    $project->category_name=$request->category_name;
    $project->publication_status=$request->publication_status;
    $project->save();
    return redirect('/portfolio');

    }

    public function Project(Request $request){

        $productImage = $request->file('image');
        $imageName = $productImage->getClientOriginalName();
        $directory= 'images/';
        $imageUrl = $directory.$imageName;
        Image::make($productImage)->save($imageUrl);

        $projectdemo=new portfolio();
        $projectdemo->Type_project=$request->Type_project;
        $projectdemo->project_name=$request->project_name;
        $projectdemo->image=$imageUrl;
        $projectdemo->link=$request->link;
        $projectdemo->publication_status=$request->publication_status;
        $projectdemo->save();

        $projectId = $projectdemo->id;

        $subImages = $request->file('sub_image');
        foreach ($subImages as $subImage) {
            $subImageName = $subImage->getClientOriginalName();
            $subImageDirectory= 'sub_images/';
            $subImageUrl = $subImageDirectory.$subImageName;
            Image::make($subImage)->save($subImageUrl);

             $subImage=new sub_image();
             $subImage->projectId=$projectId;
            $subImage->sub_image = $subImageUrl;
            $subImage->save();
        }
        return redirect('/portfolio');
    }

    public function  publishedportfolio($id){
        $portfolio = portfolio::find($id);
        $portfolio->publication_status= 1;
        $portfolio->save();
        return redirect('/portfolio')->with('message', 'skill info published successfully.');

    }
    public function  unpublishedportfolio($id){
        $portfolio = portfolio::find($id);
        $portfolio->publication_status= 0;
        $portfolio->save();
        return redirect('/portfolio')->with('message', 'skill info published successfully.');
    }
    public function Removeportfolio($id){
        $portfolio = portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio')->with('message', 'delete successfully.');
    }

}
