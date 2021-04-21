@extends('layout.app')
@section('content')
<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
<form  action="{{ route('register')}}" method="post">
  @csrf
  <div class="mb-4">
    <label for="name" class="sr-only">Name</label>
    <input type="text" name="name" placeholder="your name" id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('name') border-red-500 @enderror "  value="{{old('name')}}">
    @error('name')
    <div class="mt-2">
      {{$message}}
    </div>
    @enderror

  </div>
  <div class="mb-4">
    <label for="username" class="sr-only">username</label>
    <input type="text" name="username" placeholder="your username" id="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror " value="{{old('username')}}">
    @error('username')
    <div class="mt-2">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-4">
    <label for="name" class="sr-only">email</label>
    <input type="email" name="email" placeholder="your email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror " value="{{old('email')}}">
    @error('email')
    <div class="mt-2">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="mb-4">
    <label for="password" class="sr-only">password</label>
    <input type="password" name="password" placeholder="choose password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror " value="">
    @error('password')
    <div class="mt-2">
      {{$message}}
    </div>
    @enderror

  </div>
  <div class="mb-4">
    <label for="password_confirmation" class="sr-only"> password Again</label>
    <input type="password" name="password_confirmation" placeholder="repeat password" id="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
  </div>
  <div class="mb-4">
    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full"> Register </button>
  </div>
</form>
  </div>

</div>
@endsection
