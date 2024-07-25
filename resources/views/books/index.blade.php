@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold my-4">Books</h2>
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/6 py-2">ISBN</th>
                <th class="w-1/6 py-2">Title</th>
                <th class="w-1/6 py-2">Author</th>
                <th class="w-1/3 py-2">Description</th>
                <th class="w-1/6 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($books as $book)
                <tr>
                    <td class="text-center py-2 border-b">{{ $book->isbn }}</td>
                    <td class="text-center py-2 border-b">{{ $book->title }}</td>
                    <td class="text-center py-2 border-b">{{ $book->author }}</td>
                    <td class="text-center py-2 border-b">{{ $book->description }}</td>
                    <td class="text-center py-2 border-b">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
