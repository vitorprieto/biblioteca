<p>Name: {{ $category->name }}</p>
<p>Author: {{ $category->description }}</p>

<p>Books: </p>
    @foreach ($category->books as $book)
    <p>Name: {{ $book->name }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Publication Date: {{ $book->publication_date }}</p>
    <p>Category: {{ $book->category->name }}</p>
    <hr>
    @endforeach

<a href="{{ url('categories/' . $category->id . '/edit') }}">Edit</a>
<form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>