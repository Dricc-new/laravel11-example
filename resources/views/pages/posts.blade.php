@extends('layouts.app')

@section('title', 'posts')

@section('content')
    <article>
        <div class="flex justify-between items-center">
            <h1 class="text-2xl uppercase text-blue-500 font-semibold">posts</h1>
            <a href="{{ route('posts-new') }}" class="button-gradient m-2">New Post</a>
        </div>
        <hr>
        <div class="grid grid-cols-4 my-4">
            <div class="border rounded bg-gray-100">
                <h2 class="text-center font-semibold text-blue-500 text-xl">Title</h2>
                <h2 class="text-center ">5/05/2024</h2>
                <p class="m-1 border bg-gray-50 p-2 rounded">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Laudantium minima delectus inventore perspiciatis ipsam dicta illo incidunt, ratione, est distinctio
                    omnis earum fugiat dignissimos, maxime quo molestiae excepturi dolores quam!</p>
                <div class="flex justify-end gap-2">
                    <a href="#" class="p-2 text-gray-500"><i class="fas fa-pencil"></i></a>
                    <a href="#" class="p-2 text-red-600"><i class="fas fa-trash"></i></a>
                </div>
            </div>

        </div>

        <div class="flex justify-center">
            <div class="text-blue-500 p-2 flex justify-center gap-2">
                <a href="#" class="p-2 w-10 text-center bg-gray-50 rounded border"><i
                        class="fas fa-angle-left"></i></a>
                <a href="#" class="p-2 w-10 text-center bg-gray-50 rounded border">1</a>
                <a href="#" class="p-2 w-10 text-center bg-gray-50 rounded border">1</a>
                <a href="#" class="p-2 w-10 text-center bg-gray-50 rounded border">1</a>
                <a href="#" class="p-2 w-10 text-center bg-gray-50 rounded border">1</a>
                <a href="#" class="p-2 w-10 text-center bg-gray-50 rounded border"><i
                        class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </article>
@endsection
