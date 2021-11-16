@foreach ($categories as $category)
    <p>Name: {{ $category->name }}</p>
    <p>Description: {{ $category->description }}</p>

    <a href="{{ url('categories/' . $category->id . '/edit') }}">Edit</a>
    <form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
    <hr>
@endforeach
