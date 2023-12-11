<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Button to trigger Create Book Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createBookModal">
                        Tambah Buku
                    </button>
                    <div class="mt-4">
                        <h3>Informasi Buku</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->writer }}</td>
                                        <td>{{ $book->publisher }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateBookModal{{$book->id}}">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteBookModal{{$book->id}}">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    @include('layouts.book.update')
                                    @include('layouts.book.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @include('layouts.book.create')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
