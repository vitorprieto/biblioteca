<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Cópias de livros') }}
        </h2>
        <style>
            #books {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #books td,
            #books th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #books tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #books tr:hover {
                background-color: #ddd;
            }

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
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                @if (count($book_instances) <= 0)
                    <p>Nenhum registro foi encontrado</p>
                @endif

                <table id="books">
                    <tr>
                        <th>Livro</th>
                        <th>Mutuári</th>
                        <th>Data de vencimento</th>
                        <th>Disponibilidade</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                    @foreach ($book_instances as $instance)
                        <tr>
                            <td>{{ $instance->book->name }}</td>
                            <td>{{ $instance->borrower->name }}</td>
                            <td>{{ $instance->due_back }}</td>
                            <td>
                                @livewire('update-availability', ['instance' => $instance])
                            </td>

                            <td><a href="{{ url('bookinstances/' . $instance->id . '/edit') }}">Edit</a></td>
                            <td>
                                <form action="{{ route('bookinstances.destroy', ['bookinstance' => $instance]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{ $book_instances->links() }}
        </div>
    </div>
</x-app-layout>
