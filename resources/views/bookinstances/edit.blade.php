<form method="POST" action="{{ route('bookinstances.update', ['bookinstance' => $book_instance]) }}">
    @csrf
    @method('PATCH')

    Due Back Date: <input type="date" name="due_back" value='{{ $book_instance->due_back }}'> <br>
    <input type="hidden" name="is_available" value="0">
    Availability:  <input type="checkbox" name="is_available" value='1' checked> <br>

    Books ({{ $book_instance->book->name }}):
    <select name="book_id">
        @foreach ($books as $book)
            <option value={{ $book->id }}>{{ $book->name }}</option>
        @endforeach
    </select> <br>

    Borrower ({{ $book_instance->borrower->name }}):
    <select name="borrower_id">
        @foreach ($users as $user)
            <option value={{ $user->id }}>{{ $user->name }}</option>
        @endforeach
    </select> <br>
    <input type="submit" name="submit" value="Submit!">
</form>