@extends('layout')
@section('content')
    <h2>List of All Posts</h2>
    @auth 
      <a href="/posts/create" class="btn btn-primary">publish new post</a>
    @endauth
    <hr>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card" style="max-width: 18rem; margin-bottom: 20px;">
                <div class="card-header bg-dark text-white">
                  {{ $post->title }}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->body }}</p>
                <a href="{{ '/posts/' . $post->id}}" class="btn btn-primary">Show More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
