<form method="POST" action=" {{ route('books.store') }}">
    @csrf

    Name: <input type="text" name="name"> <br>
    Author:  <input type="text" name="author"> <br>
    Publication Date:  <input type="date" name="publication_date"> <br>

    Category:
    <select name="category">
        @foreach ($categories as $category)
            <option value={{ $category->id }}>{{ $category->name }}</option>
        @endforeach
    </select> <br>

    <input type="submit" name="submit" value="Submit!">
</form>