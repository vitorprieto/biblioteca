<h1>Category:</h1>
<p>Name: {{ $category->name }}</p>
<p>Description: {{ $category->description }}</p>

<a href="{{ url('categories/' . $category->id . '/edit') }}">Edit</a>
<form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>

<h2>Books: </h2>

@if (count($category->books) <=0)
    <p>No records found</p>
@endif

    @foreach ($category->books as $book)
    <p>Name: {{ $book->name }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Publication Date: {{ $book->publication_date }}</p>
    <p>Category: {{ $book->category->name }}</p>
    <hr>
    @endforeach