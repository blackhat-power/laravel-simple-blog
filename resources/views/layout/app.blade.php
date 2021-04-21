<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body  class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6 ">
  <ul class="flex items-center">
    <li>
      <a href="#" class="p-3">Home</a>
    </li>
    <li>
      <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
    </li>
    <li>
      <a href="{{  route('posts')}}" class="p-3">Post</a>
    </li>
  </ul>
  <ul class="flex items-center">
    @auth

    <li>
      <a href="{{route('upload.index')}}" class="p-3">upload</a>
    </li>
    <li> <a href="#">{{auth()->user()->name}}</a> </li>
    <li>
      <a href="{{ route('logout')}}" class="p-3">Logout</a>
    </li>
    @endauth
    @guest
    <li>
      <a href="{{ route('login')}}" class="p-3">Login</a>
    </li>
    <li>
      <form action="{{ route('register') }}" class="p-3 inline">
        @csrf
        <button type="submit">Register</a>
      </form>
    </li>
    @endguest
  </ul>
</nav>

@yield('content')
  </body>
</html>
