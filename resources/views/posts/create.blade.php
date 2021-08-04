@extends('layouts.app')


@section('content')


  <div class="card card-default">
    <div class="card-header">

      Create Post

    </div>
    <div class="card-body">
      <form class="" action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
          <label for="title">title</label>
          <input type="text" class="form-control" name="title" id ="title" value="">
        </div>
        <div class="form-group">
          <label for="description">Description</label>

          <textarea name="description" class=" form-control" rows="5" cols="5"></textarea>

        </div>
        <div class="form-group">
          <label for="content">Content</label>

          <textarea name="content" class=" form-control" rows="5" cols="5"></textarea>

        </div>

        <div class="form-group">
          <label for="published_at">Published At</label>
          <input type="text" class="form-control" name="published_at" id ="published_at" value="">
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image" id ="image" value="">
        </div>
        <button class="btn btn-success" type="submit">
          Create Post
        </button>
      </form>



    </div>
  </div>

@endsection
