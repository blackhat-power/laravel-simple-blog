<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Idea;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
  public function __construct(){
    $this->middleware('guest');
  }
    public function index(){
      return view('auth.register');
    }
    public function store ( Request $request){
      $this->validate(
        $request, [
          'name'=>'required',
          'username'=>'required',
          'email'=>'email|required',
          'password'=>'required|confirmed|min:6'

        ]
      );
      User::create([
        'name'=>$request->name,
        'password'=>$request->password,
        'email'=>$request->email,
        'username'=>$request->username
      ]);
      auth()->attempt($request->only('email', 'password'));
     return redirect()->route('dashboard');
    }

}
