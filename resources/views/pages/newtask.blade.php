@extends('layouts.app')

@section('title', 'new task')

@section('content')
    <section class="flex justify-center p-4">
        <article class="border rounded  bg-gray-100 w-96 shadow-md p-4">
            <h1 class="text-2xl text-center font-bold text-blue-500">New Task</h1>
            <form method="post">
                <div class="p-2">
                    <label for="title" class="font-semibold">Title</label>
                    <input type="text" id="title" class="rounded bg-gray-50 border w-full p-2" />
                </div>
                <div class="p-2">
                    <label for="date" class="font-semibold">Date</label>
                    <input type="date" id="date" class="rounded bg-gray-50 border w-full p-2" />
                </div>
                <div class="p-2">
                    <label for="description" class="font-semibold">Description</label>
                    <textarea id="description" class="rounded bg-gray-50 border w-full h-40description h-40 p-2"></textarea>
                </div>
                <div class="p-2 clas flex justify-end">
                    <button type="submit"
                        class="button-gradient">Submit</button>
                </div>
            </form>
        </article>
    </section>
@endsection
