@extends('template')

@section('title', 'create category')

@section('body')

<form action="/store-category" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Category</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Name" value="{{old('Name')}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection