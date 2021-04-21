@extends('layout.app')
@section('content')
<div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">

     <form action="{{route('posts')}}" method="post">
       @csrf
       <div class="mb-4">
       <label for="body" class="sr-only">Body</label>
       <textarea name="body" id="body" rows="4" cols="30" class="bg-gray-100 w-full border-2 p-4 rounded-lg  @error('body') border-red-500 @enderror" placeholder="Post something!">
       </textarea>
       @error('body')
       <div class=" text-red-500 mt-2 text-sm">
         {{$message}}
       </div>
       @enderror
        <div>
<button type="submit" class="bg-blue-500 rounded front-medium px-4 text-white mb-4">Post</button>
        </div>
     </form>
          @if ($posts->count())
          @foreach($posts as $post)
          <div>
          <span class="font-bold">{{$post->user->name}}</span> <span class="text-gray-500"> {{$post->created_at->diffForHumans()}} </span>
          </div>
           <div class="mb-4">
             <p>{{$post->body}}</p>
           </div>

           <div class=" flex flex-center">
             @auth
             @if(!$post->likedBy(auth()->user()))
               <form action="{{ route('posts.likes',$post->id)}}" method="post">
                 @csrf
              <button type="submit" class="text-blue-500  mr-2">Like</button>
               </form>
               @else
                <form action="{{route('posts.likes', $post)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-blue-500">Unlike</button>@endif @endauth<span> {{$post->like->count()}} {{Str::plural('like',$post->like->count())}}  </span>
                </form>

           </div>
           @endforeach
          @else
            nothing to show
          @endif


   </div>
   {{$posts->links()}}
  </div>
</div>
@endsection
