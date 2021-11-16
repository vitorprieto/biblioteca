<h1>Book:</h1>
<p>Name: {{ $book->name }}</p>
<p>Author: {{ $book->author }}</p>
<p>Publication Date: {{ $book->publication_date }}</p>
<p>Category: {{ $book->category->name }}</p>

<a href="{{ url('books/' . $book->id . '/edit') }}">Edit</a>
<form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>

<h1>Copies:</h1>

@if (count($book->book_instances) <=0)
    <p>No records found</p>
@endif

@foreach ($book->book_instances as $instance)
    <p>Book: {{ $instance->book->name }}</p>
    <p>Borrower: {{ $instance->borrower->name }}</p>
    <p>Due Back Date: {{ $instance->due_back }}</p>
    <p>Availability: {{ $instance->is_available ? 'Available' : 'Not Available' }}</p>

    <a href="{{ url('bookinstances/' . $instance->id . '/edit') }}">Edit</a>
    <form action="{{ route('bookinstances.destroy', ['bookinstance' => $instance]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

    <hr>
@endforeach