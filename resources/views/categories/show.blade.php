<!DOCTYPE html>
<html>
<head>
<style>
#categories {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#categories td, #categories th {
  border: 1px solid #ddd;
  padding: 8px;
}

#categories tr:nth-child(even){background-color: #f2f2f2;}

#categories tr:hover {background-color: #ddd;}

#categories th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Categories:</h1>

<table id="categories">
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <tr>
    <td>{{ $category->name }}</td>
    <td>{{ $category->description }}</td>

    <td><a href="{{ url('categories/' . $category->id . '/edit') }}">Edit</a></td>
    <td>
    <form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
        @csrf
        @method('DELETE')

      <button type="submit">Delete</button>
    </form>
    </td>
    </tr>
</table>

<h2>Books:</h2>

@if (count($category->books) <=0)
    <p>No records found</p>
@endif

<table id="categories">
    <tr>
      <th>Name</th>
      <th>Author</th>
      <th>Publication Date</th>
      <th>Category</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach ($category->books as $book)
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