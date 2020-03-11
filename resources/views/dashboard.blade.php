@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div>
                <h2 class="text-center">Dashboard</h2>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                          <div class="card" style="margin-top: 50px; margin-bottom: 20px;">
                              <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                                <a href="{{ '/posts/' . $post->id . '/edit'}}" class="btn btn-secondary float-left mr-2 my-2">Edit</a>
                                <form action={{"/posts/". $post->id}} method="POST">
                                  {{ csrf_field() }} <!-- For Security-->
                                  {{ method_field('DELETE') }}
                                  <button class="btn btn-danger float-left mr-2 my-2">Delete</button>
                                </form>
                                <hr>
                                <p class="text-muted" style="font-size: 14px;">{{ $post->created_at->toDayDateTimeString()  }}</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <hr>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
