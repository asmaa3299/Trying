@extends('layout')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card" style="margin-top: 50px; margin-bottom: 20px;">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->body }}</p>
          @auth
            @if(auth()->user()->id == $post->user_id)
              <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-secondary float-left mr-2 my-2">Edit</a>
              <form action={{"/posts/". $post->id}} method="POST">
               {{ csrf_field() }} <!-- For Security-->
               {{ method_field('DELETE') }}
                <button class="btn btn-danger float-left mr-2 my-2">Delete</button>
              </form>
            @endif
          @endauth
          <hr>
          <p class="text-muted" style="font-size: 14px;">{{ $post->created_at->toDayDateTimeString()  }}</p>
            <p>Created by: {{ @$post->user->name }}</p>
        </div>
      </div>
  </div>
</div>
<hr>
@endsection