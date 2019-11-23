@extends('layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Annotations</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td><a href="{{ route('book_show', ['id' => $book->id]) }}">{{ $book->author }}</a> </td>
                <td>{{ $book->annotations }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                            <form method="post" action="{{ route('book_delete', ['id' => $book->id]) }}">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-danger">X</button>
                            </form>
                        </div>
                        <div class="col-md-2"><a href="{{route('book_edit', ['id' => $book->id])}}" class="btn btn-warning"><i class="far fa-edit"></i></a></div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
@endsection
