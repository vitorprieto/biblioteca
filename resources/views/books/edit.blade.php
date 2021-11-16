<form method="POST" action=" {{ route('books.update', ['book' => $book]) }}">
    @csrf
    @method('PATCH')

    Name: <input type="text" name="name" value='{{ $book->name }}'> <br>
    Author:  <input type="text" name="author" value='{{ $book->author }}'> <br>
    Publication Date:  <input type="date" name="publication_date" value='{{ $book->publication_date }}'> <br>

    Category ({{ $book->category->name }}):
    <select name="category_id">
        @foreach ($categories as $category)
            <option value={{ $category->id }}>{{ $category->name }}</option>
        @endforeach
    </select> <br>

    <input type="submit" name="submit" value="Submit!">
</form>