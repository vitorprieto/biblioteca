<form method="POST" action=" {{ route('bookinstances.store') }}">
    @csrf

    Due Back Date: <input type="date" name="due_back"> <br>
    <input type="hidden" name="is_available" value="0">
    Availability:  <input type="checkbox" name="is_available" value="1" checked> <br>

    Books:
    <select name="books">
        @foreach ($books as $book)
            <option value={{ $book->id }}>{{ $book->name }}</option>
        @endforeach
    </select> <br>

    Borrower:
    <select name="users">
        @foreach ($users as $user)
            <option value={{ $user->id }}>{{ $user->name }}</option>
        @endforeach
    </select> <br>
    <input type="submit" name="submit" value="Submit!">
</form>