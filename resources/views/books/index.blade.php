<!DOCTYPE html>
<html>
<head>
<style>
#books {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#books td, #books th {
  border: 1px solid #ddd;
  padding: 8px;
}

#books tr:nth-child(even){background-color: #f2f2f2;}

#books tr:hover {background-color: #ddd;}

#books th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Books:</h1>

<table id="books">
    <tr>
      <th>Name</th>
      <th>Author</th>
      <th>Publication Date</th>
      <th>Category</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach ($books as $book)
    <tr>
    <td>{{ $book->name }}</td>
    <td>{{ $book->author }}</td>
    <td>{{ $book->publication_date }}</td>
    <td>{{ $book->category->name }}</td>

    <td><a href="{{ url('books/' . $book->id . '/edit') }}">Edit</a></td>
    <td>
    <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
  </table>
  
  </body>
  </html>