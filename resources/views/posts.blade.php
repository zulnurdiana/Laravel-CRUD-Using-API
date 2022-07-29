@extends('layout.main')

    @section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 fs-5">
                 <h1 style="font-size: 25px">{{ $post->title }}</h1>
                    <p> <small style="font-size: 17px ; font-style: italic">By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in</small> <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>

                       @if ($post->image)

                        <div style="max-height: 400px; overflow: hidden">
                            <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                        </div>
                        
                        @else

                            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

                        @endif 
                    <article class="py-3 fs-5" style="font-size: 5px">
                            {!! $post->body !!}
                    </article>

                
                    <a href="/blog" class="d-block mt-2">Back to posts</a>
            </div>
        </div>
    </div>
           
    @endsection