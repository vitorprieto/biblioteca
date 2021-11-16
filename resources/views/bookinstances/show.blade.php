<h1>Book Instance (copy):</h1>

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