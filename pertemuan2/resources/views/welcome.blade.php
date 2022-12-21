@extends('template')

@section('title', 'welcome')

@section('body')

<div class="d-flex m-5">
  @foreach ($books as $book)
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$book->Title}}</h5>
        <p class="card-text">{{$book->Author}}</p>
        <p class="card-text">{{$book->PublishDate}}</p>
        <p class="card-text">{{$book->Stock}}</p>
        <a href="{{route('show', $book->id)}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  @endforeach
</div>

  {{-- {{ $i = 1 }}

  @if ($i > 0)
    {{ $i }}
  @endif --}}

  {{-- @for ($i = 0; $i < 10; $i++)
    {{ $i }}
  @endfor --}}

@endsection