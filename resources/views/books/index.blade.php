<h1>Books:</h1>
@foreach ($books as $book)
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
    <hr>
@endforeach
