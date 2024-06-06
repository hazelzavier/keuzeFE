<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <!-- resources/views/home.blade.php -->
    @extends('components.layout')

    @section('title', 'Home')

    @section('content')
        <div class="flex h-screen items-center justify-center">
            <div class="flex-1 text-left p-8">
                <h1 class="text-5xl font-bold text-cyan-500 mb-4">Welcome to My Portfolio 🌟</h1>
                <h2 class="text-3xl text-cyan-400 mb-6">I'm [Your Name], a passionate Web Developer 💻</h2>
                <p class="text-lg text-gray-300">I create beautiful and functional websites using modern technologies.</p>
            </div>
            <div class="flex-1 flex justify-center items-center">
                <img src="/path/to/your/logo.png" alt="Your Logo" class="w-1/2 h-auto">
            </div>
        </div>
    @endsection

</x-layout>
