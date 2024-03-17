<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Laravel Example - @yield('title')</title>
</head>

<body>
    <aside class="sticky w-screen my-2">
        <div class="p-2 text-gray-200 font-semibold uppercase container rounded-full mx-auto bg-gradient-to-br from-gray-500 to-gray-800 w-full">
            <nav class="flex justify-between items-center">
                <ul class="flex gap-4 p-2 mx-4">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('tasks')}}">Tasks</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <div class="mx-4 p-2">
                    <a href="{{route('login')}}"> Login</a>
                    <span>|</span>
                    <a href="{{route('register')}}">Register</a>
                    {{-- <i class="fa fa-user"></i> --}}
                </div>
            </nav>
        </div>
    </aside>
    <section class="container mx-auto">
        @yield('content')
    </section>
</body>

</html>
