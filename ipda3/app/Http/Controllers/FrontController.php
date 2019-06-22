<?php

namespace App\Http\Controllers;

use App\Catogery;
use App\Page;
use App\Post;
use App\Question;
use App\Slider;
use App\User;
use App\Video;
use App\Client;
use Image;

use App\Connect;
use Illuminate\Http\Request;
use Validator;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::take(20)->get();
        $videos=Video::take(1)->get();
        $sliders=Slider::take(1)->get();
        $pages=Page::take(1)->get();
        $cats=Catogery::all();
        $clients=Client::all();
        return view('front.index',compact('posts','videos','sliders','pages','cats','clients'));
    }
    public function news()
    {
        $posts=Post::paginate(100);

        return view('news.index',compact('posts'));
    }

    public function videos(){

        $videos=Video::paginate(100);

        return view('video.index',compact('videos'));

    }
    public function pages($id){

        $page=Page::find($id);

        return view('page.index',compact('page'));


    }

    public function connect(){

        $conn=Connect::take(1)->get();
        $pages=Page::take(1)->get();

        return view('connects.index',compact('conn','pages'));

    }

public function new($id){

    $post = Post::Find($id);
    return view('news.show',compact('post'));

}

public function sends(Request $request){
    $rule=[
        'name','addrss','text','addressmessage','email'=>'required'
    ];
    $message=[
        'name.required'=>'name is required'];
    $this->validate($request,$rule,$message);
        $con=Connect::create($request->all());

        return back();


}

public function questions()
{

    $ques=Question::take(20)->get();

    return view('questions.index',compact('ques'));

}

public function question(Request $request)
{

    $rule=[
        'question','email'=>'required'
    ];
    $message=[
        'question.required'=>'question is required'];
    $this->validate($request,$rule,$message);

    $que=Question::create($request->all());

    return back();
}
public function register(){

       return view('register.index');

}

public function registers(Request $request){

    $validator = Validator::make($request->all(), [
        'date' => 'required',
        'phone1' => 'required',
        'name' => 'required',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        dd('error');
    }

    $client=Client::create($request->all());

    if($request->hasFile('image')){
        $thumbnail = $request->file('image');
        $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
        Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
        $client->image = $filename;

        $client->save();
    };



    return back();

}

}
