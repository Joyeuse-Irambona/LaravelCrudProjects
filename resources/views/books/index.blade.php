@extends('books.base')

@section('title', 'Home')

@section('body')
    @parent
    
    <div class="bkcont">
        <h2>Book list</h2>
        <hr />

        <div class="list">
            @if (count($books))
                @foreach ($books as $book)
                    <a href="{{ url('/show', $book->id) }}">
                        <div class="book">
                            <h3>{{ $book->Name }}</h3>
                            <p>{{ $book->Author }}</p>
                            <p class="auth">{{ $book->Description }}</p>
                        </div>
                    </a>
                @endforeach
            @else
                <div class="nobook">
                    <h3>You have not yet add book</h3>
                    <a href="/create">Add new Book</a>
                </div>
            @endif
        </div>
    </div>

@stop