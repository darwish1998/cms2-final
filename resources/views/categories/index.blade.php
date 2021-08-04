@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-end mb-2">
  <a href="{{ route('categories.create') }}"class="btn btn-success">
   Add Categories
 </a>
</div>

<div class="card card-default">
  <div class="card-header">
    Categories
  </div>
  <div class="card-body">
    <table class="table">
      <thead>

        <th>Name</th>

        <th>

        </th>
      </thead>

      <tbody>
        @foreach ($categories as $category)

        <tr>

          <td>
            {{ $category->name }}
          </td>
          <td>
            <a href=" {{ route('categories.edit',$category->id)}} " class="btn btn-info btn-sm">
              Edit
            </a>

            <button class="btn btn-danger btn-sm" onclick="handleDelete({{$category->id}})">Delete</button>

          </td>
          </tr>
          @endforeach


      </tbody>

    </table>
    <form class="" action="" method="POST" id="deleteCategoryForm">


          @csrf
          @method('Delete')
      <div class="modal" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="deleteModal" >Delete Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-center text-bold"> Are sure you want to delete ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No Go back</button>
          <button type="submit" class="btn btn-danger">Yes Delete</button>
        </div>
      </div>
    </div>
  </div>
    </div>

    </form>

</div>

@endsection

@section('scripts')

  <script>

    function handleDelete(id) {

      var form = document.getElementById('deleteCategoryForm')
      form.action= '/categories/' + id


      $('#deleteModal').modal('show')

    }
  </script>

@endsection
