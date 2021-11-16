<form method="POST" action=" {{ route('categories.update', ['category' => $category]) }}">
    @csrf
    @method('PATCH')

    Name: <input type="text" name="name" value='{{ $category->name }}'> <br>
    Description:  <input type="text" name="description" value='{{ $category->description }}'> <br>

    <input type="submit" name="submit" value="Submit!">
</form>