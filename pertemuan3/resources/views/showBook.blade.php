@extends ('template')

@section ('title', 'show book');

@section ('body')
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$book->Title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$book->Author}}</h6>
      <p class="card-text">{{$book->PublishDate}}</p>
      <p class="card-text">{{$book->Stock}}</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
@endsection