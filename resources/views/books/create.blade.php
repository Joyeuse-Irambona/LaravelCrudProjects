@extends('books.base')

@section('title', 'add book')

@section('body')
    @parent

    <div class="bkcont">
        <h2>Book Update</h2>
        <hr />
		<form class="form" action="/store" method="POST">
			@csrf
            @method('POST')
			<label>Title</label>
			<input type="text" name="name" required />
			<label>Author</label>
			<input type="text" name="author" required />
			<label>Description</label>
			<textarea rows="6" 
			name="decription" required></textarea>
			<button type="submit" name="submit">Add Book</button>
		</form>
	</div>
@stop