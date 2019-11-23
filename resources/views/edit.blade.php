@extends('layout')
@section('content')
    <form action="{{ route('book_update', ['id' => $book->id ]) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" id="title" value="{{ $book->title }}" name="title" type="text"/>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" id="author" value="{{ $book->author }}" name="author" type="text"/>
        </div>
        <div class="form-group">
            <label for="annotation">Annotation</label>
            <textarea class="form-control" id="annotation" name="annotations">{{$book->annotations}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
