<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFiles extends Controller
{
    //
    public function index(){
      return view('uploadfiles');
}
public function store(Requet $request, UploadFile  $upload){
  dd($upload);

}


}
