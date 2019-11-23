@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $book->author }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">{{ $book->annotations }}</p>
            <a href="{{ route('book_index') }}">Back</a>
        </div>
    </div>
@endsection
