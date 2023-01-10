@extends('template')

@section('title', 'edit book')

@section('body')

<div class="m-5">
  <h1 class="text-center">Edit Book</h1>
  <form action="/update-book/{{$book->id}}" method="POST">
      @csrf
      @method('patch')
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Title" value="{{$book->Title}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Author" value="{{$book->Author}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">PublishDate</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate" value="{{$book->PublishDate}}">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Stock</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="Stock" value="{{$book->Stock}}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection