@extends('books.base')

@section('title', 'Retrieve')

@section('body')
    @parent

    <div class="bkcont">
        <h2>Book Details</h2>
        <hr />

        <div class="bkb">
            <h2>{{ $book->Name }}</h2>
            <h3>{{ $book->Author }}</h3>

            <p>{{ $book->Description }}</p>

            <div class="btn">
                <a href="{{ url('/edit', $book->id) }}">Update</a>
                <a href="{{ url('/delete', $book->id) }}">Delete</a>
            </div>
        </div>
    </div>
@stop