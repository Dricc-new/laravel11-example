@extends('layouts.app')

@section('title', 'new post')

@section('content')
    <section class="flex justify-center p-4">
        <article class="border rounded  bg-gray-100 w-96 shadow-md p-4">
            <h1 class="text-2xl text-center font-bold text-blue-500">New post</h1>
            <form method="post">
                <div class="p-2">
                    <label for="title" class="font-semibold">Title</label>
                    <input type="text" id="title" class="rounded bg-gray-50 border w-full p-2" />
                </div>
                <div class="p-2">
                    <label for="description" class="font-semibold">Description</label>
                    <textarea id="description" class="rounded bg-gray-50 border w-full h-40description h-24 p-2"></textarea>
                </div>
                <div class="p-2 flex">
                    <label for="image" class="w-full relative overflow-hidden rounded h-32">
                        <img src="" id="tumbnail" class="object-contain w-full h-32 hidden border rounded bg-gray-50" alt="">
                        <div
                            class="font-semibold flex flex-col justify-center items-center border-dashed text-gray-400 bg-gray-50 rounded w-full p-2 h-32 border-2">
                            <span class="text-2xl">Drag and Drop</span>
                            or
                            <span class="text-xl">click to upload a image</span>
                        </div>

                    </label>
                    <script></script>
                    <input type="file" hidden id="image" class="" />
                </div>
                <div class="p-2 clas flex justify-end">
                    <button type="submit" class="button-gradient">Submit</button>
                </div>
            </form>
        </article>
    </section>
@endsection
