<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
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
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
            </div>
        </div>
    </div>
</x-app-layout>
