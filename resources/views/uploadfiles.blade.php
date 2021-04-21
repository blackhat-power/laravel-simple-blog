@extends('layout.app')
@section('content')
<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
    @if (session()->has('status'))
    <div class="mb-4 w-full bg-red-500  rounded-lg py-4 text-center">
{{session('status')}}
    </div>

    @endif
<form  action="{{ route('upload.index')}}" method="post"  enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-md-6">
        <input type="file" name="image" class="form-control">
    </div>
  <div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> upload</button>
  </div>
</div>
</form>
</div>
</div>
@endsection
