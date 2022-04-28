@extends('books.base')

@section('title', 'Edit')

@section('body')
    @parent

    <div class="bkcont">
        <h2>Book Update</h2>
        <hr />

        <form class="form" action="{{ url('/update', $book->id) }}" method="post">
            @csrf
            @method('PUT')

            <label>Name</label>
            <input type="text" name="name" value="{{ $book->Name }}" required />
            <label>Author</label>
            <input type="text" name="author" value="{{ $book->Author }}" required />
            <label>Description</label>
            <textarea rows="6" name="decription" required>{{ $book->Description }}</textarea>
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
@stop