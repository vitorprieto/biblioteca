<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a book copy') }}
        </h2>
        <style>
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div.edit {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="edit">
                    <form method="POST" action="{{ route('bookinstances.update', ['bookinstance' => $book_instance]) }}">
                        @csrf
                        @method('PATCH')

                        <label for="books">Books ({{ $book_instance->book->name }})</label>
                        <select id="books" name="books">
                            @foreach ($books as $book)
                                <option value={{ $book->id }}>{{ $book->name }}</option>
                            @endforeach
                        </select>

                        <label for="users">Borrower ({{ $book_instance->borrower->name }})</label>
                        <select id="users" name="users">
                            @foreach ($users as $user)
                                <option value={{ $user->id }}>{{ $user->name }}</option>
                            @endforeach
                        </select>

                        <input type="hidden" name="is_available" value="0">
                        <label for="name">Availability</label>
                        <input type="checkbox" id="is_available" name="is_available" value="1" checked> <br>

                        <label for="name">Due Back Date:</label>
                        <input type="date" id="due_back" name="due_back" value='{{ $book_instance->due_back }}'> <br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>