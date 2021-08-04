@extends('layouts.app')

@section('content')



<div class="card card-default">
  <div class="card-header">
      {{isset($category) ? 'Edit Category' : 'Create Category'}}
  </div>
<div class="card-body">

  @if ($errors->any())

  <div class="alert alert-danger">

    <ul class="list-group">

      @foreach($errors->all() as $error)

      <li class="list-group-item text-danger">

        {{ $error }}

      </li>
      @endforeach
    </ul>

  </div>
  @endif

  <form class="" action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" method="POST">
    @csrf

    @if(isset($category))
    @method('PUT')
    @endif


    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" id="name" name="name" value="{{isset($category)? $category->name : ''}}">

    </div>
    <div class="form-group">
      <button class="btn btn-success" type="submit" name="button">

        {{isset($category) ? 'Update Category' : '  Add Categories'}}

      </button>

    </div>

  </form>
</div>
</div>


@endsection
