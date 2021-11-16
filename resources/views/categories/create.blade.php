<form method="POST" action=" {{ route('categories.store') }}">
    @csrf

    Name: <input type="text" name="name"> <br>
    Description:  <input type="text" name="description"> <br>

    <input type="submit" name="submit" value="Submit!">
</form>