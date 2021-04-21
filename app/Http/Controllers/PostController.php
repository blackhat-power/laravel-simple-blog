<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth')->only('store');
    }

    public function index(){
      $post=Post::latest()->with(['user','like'])->paginate(5);
      return view('posts.index', ['posts'=>$post]);
    }
    public function store(Request $request){
      $this->validate($request,[
        'body'=>'required'
      ]);

      $request->user()->post()->create([
        'body'=>$request->body

      ]);

      return back();

    }
}
