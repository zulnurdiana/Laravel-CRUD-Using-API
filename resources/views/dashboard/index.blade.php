@extends('dashboard.layouts.main')


@section('container')

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
      </div>

      <h1 class="mb-4 text-center">All Post Categories</h1>
        <div class="container">
            <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                <a href="/blog?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
                </div>
              @endforeach 
            </div>
        </div>

    
@endsection