<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar uma cópia do livro') }}
        </h2>
        <style>
            input[type=text],
            select {
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
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="edit">
                    <form method="POST" action="{{ route('bookinstances.update', ['bookinstance' => $book_instance]) }}">
                        @csrf
                        @method('PATCH')

                        <label for="books">Livros</label>
                        <select id="books" name="books">
                            @foreach ($books as $book)
                                @if ($book_instance->book->id == $book->id)
                                    <option value={{ $book->id }} selected>{{ $book->name }}</option>
                                @endif
                                <option value={{ $book->id }}>{{ $book->name }}</option>
                            @endforeach
                        </select>

                        <label for="users">Mutuário</label>
                        <select id="users" name="users">
                            @foreach ($users as $user)
                                @if ($book_instance->borrower->id == $user->id)
                                    <option value={{ $user->id }} selected>{{ $user->name }}</option>
                                @endif
                                <option value={{ $user->id }}>{{ $user->name }}</option>
                            @endforeach
                        </select>

                        <input type="hidden" name="is_available" value="0">
                        <label for="name">Disponibilidade</label>
                        <input type="checkbox" id="is_available" name="is_available"
                            {{ $book_instance->is_available ? 'checked' : '' }}> <br>

                        <label for="name">Data de vencimento:</label>
                        <input type="date" id="due_back" name="due_back" value='{{ $book_instance->due_back }}'>
                        <br>

                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
