<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Livros') }}
        </h2>

    </x-slot>

    <div class="flex flex-col py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-800 border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-center text-white">Nome</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-center text-white">Autor</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-center text-white">Data de Publicação</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-center text-white">Categoria</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-center text-white">Editar</th>
                            <th scope="col" class="px-6 py-4 text-sm font-medium text-center text-white">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $book->name }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $book->author }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $book->publication_date }}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    {{ $book->category->name }}</td>

                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    <a href="{{ url('books/' . $book->id . '/edit') }}">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                    <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $books->links() }}
        </div>
    </div>
</x-app-layout>
