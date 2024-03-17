@extends('layouts.app')

@section('title', 'welcome')

@section('content')
    <style>
        .animate-cube {
            animation-duration: 3s;
            animation-name: slidein;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            transition: all;
        }

        @keyframes slidein {
            from {
                transform: translateY(-20px);
            }

            to {
                transform: translateY(0px);
            }
        }
    </style>
    <article class="flex flex-col items-center gap-8 p-6 w-full relative">
        <div class="absolute bottom-20 right-2 pointer-events-none md:right-[12%]">
            <svg class="text-red-500 animate-cube" width="46" height="53" viewBox="0 0 46 53" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel"></path>
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel"></path>
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
            </svg>
        </div>
        <div class="absolute top-10 left-6 pointer-events-none md:left-[12%]">
            <svg class="text-red-500 animate-cube" width="46" height="53" viewBox="0 0 46 53" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel"></path>
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel"></path>
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
            </svg>
        </div>
        <div class="absolute bottom-0 left-16 pointer-events-none md:left-[24%]">
            <svg class="text-red-500 animate-cube" width="46" height="53" viewBox="0 0 46 53" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="m23.102 1 22.1 12.704v25.404M23.101 1l-22.1 12.704v25.404" stroke="currentColor"
                    stroke-width="1.435" stroke-linejoin="bevel"></path>
                <path d="m45.202 39.105-22.1 12.702L1 39.105" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel"></path>
                <path transform="matrix(.86698 .49834 .00003 1 1 13.699)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                <path transform="matrix(.86698 -.49834 -.00003 1 23.102 26.402)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.405H0z"></path>
                <path transform="matrix(.86701 -.49829 .86701 .49829 1 13.702)" stroke="currentColor" stroke-width="1.435"
                    stroke-linejoin="bevel" d="M0 0h25.491v25.491H0z"></path>
            </svg>
        </div>
        <a href="https://laravel.com/" class="flex flex-col justify-center items-center">
            <img class="w-32" src="https://laravel.com/img/logomark.min.svg" alt="Laravel">
            <img class="w-48" src="https://laravel.com/img/logotype.min.svg" alt="Laravel">
        </a>
        <div class="font-semibold">
            <h1 class="bg-clip-text text-transparent bg-gradient-to-br from-cyan-400 to-violet-700 text-7xl">
                Welcome
            </h1>
            <h3 class="bg-clip-text text-center text-transparent bg-gradient-to-br from-cyan-400 to-violet-700 text-2xl"> to
                this
                example</h3>
        </div>
    </article>
@endsection
