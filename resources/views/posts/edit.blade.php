@extends('layout')

@section('content')
<div class="row justify-content-center">
  <div class="col-4">
    <h1 style="margin-top:20px;">Edit A Post</h1>
  </div>   
</div>
<hr>
<form method="POST" action={{ '/posts/' . $post->id}}>
    {{ csrf_field() }} <!-- For Security-->
    {{ method_field('PUT') }}
  <div class="row justify-content-center">
    <div class="form-group col-md-7">
        <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-group col-md-7">
        <label for="inputPassword4">Body:</label>
        <textarea name="body" id="body" class="form-control" cols="30" rows="5">{{ $post->body }}</textarea>
    </div>
    <div class="form-group col-md-7">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </div>
  @include('layouts.errors')
  </form>
  
@endsection