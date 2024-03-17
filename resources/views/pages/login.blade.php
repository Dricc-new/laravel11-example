@extends('layouts.auth')

@section('title', 'new task')

@section('content')
    <section class="flex justify-center py-12 p-4">
        <article class="border rounded  bg-gray-100 w-96 shadow-md p-4">
            <h1 class="text-2xl text-center font-bold text-blue-500">Login</h1>
            <form method="post">
                <div class="p-2">
                    <label for="username" class="font-semibold">Username</label>
                    <input type="text" id="username" class="rounded bg-gray-50 border w-full p-2" />
                </div>
                <div class="p-2">
                    <label for="password" class="font-semibold">Password</label>
                    <input type="password" id="password" class="rounded bg-gray-50 border w-full p-2" />
                </div>
                
                <div class="p-2 clas flex justify-end">
                    <button type="submit"
                        class="button-gradient">Submit</button>
                </div>
            </form>
        </article>
    </section>
@endsection