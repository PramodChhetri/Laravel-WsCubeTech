<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @stack('title')

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 ">


    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="text-white text-2xl font-bold">WsCube</a>

            <!-- Burger Menu for Small Screens -->
            <div class="md:hidden">
                <button id="burger-menu" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Links (Hidden by default) -->
            <div id="navbar" class="hidden md:flex md:space-x-4 md:ml-4">
                <a href="{{route('home')}}" class="text-white">Home</a>
                <a href="{{route('about')}}" class="text-white">About</a>
                <a href="{{route('service')}}" class="text-white">Services</a>
                <a href="/contact" class="text-white">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Sidebar Menu (Hidden by default) -->
    <div id="sidebar"
        class="md:hidden fixed inset-0 bg-blue-500 bg-opacity-75 z-50 hidden transition-opacity duration-300 ease-in-out">
        <div class="flex justify-end p-4">
            <button id="close-sidebar" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center p-8">
            <a href="#" class="text-white mb-4 w-full h-auto text-center justify-center p-1 hover:text-gray-300 hover:bg-blue-700 transition">Home</a>
            <a href="#" class="text-white mb-4 w-full h-auto text-center justify-center p-1 hover:text-gray-300 hover:bg-blue-700 transition">About</a>
            <a href="#"  class="text-white mb-4 w-full h-auto text-center justify-center p-1 hover:text-gray-300 hover:bg-blue-700 transition">Services</a>
            <a href="#"  class="text-white mb-4 w-full h-auto text-center justify-center p-1 hover:text-gray-300 hover:bg-blue-700 transition">Contact</a>
        </div>
    </div>
    
    <div class="p-5">
        
