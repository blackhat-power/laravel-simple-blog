<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class LikePostController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    //
    public function index( Post $jpm, Request $request){
      if ($jpm->likedBy($request->user())) {
        // code...
        return response(null,409);
      }
    $jpm->like()->create([
        'user_id'=>$request->user()->id,
      ]);
      return back();
    }

    public function destroy(Post $jpm, Request $request){
      $request->user()->likes()->where('post_id',$jpm->id)->delete();
      return back();
    }

}
