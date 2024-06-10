<x-layout>
    <x-slot name="heading">
        Home Page
    </x-slot>

    <x-slot name="content">
        <div id="home-section" class="flex h-screen items-center justify-center">
            <div class="flex-1 text-left p-8">
                <h1 class="text-5xl font-bold text-cyan-500 mb-4">Welcome to My Portfolio 🌟</h1>
                <h2 class="text-3xl text-cyan-400 mb-6">I'm Hazel Davian, a passionate Web Developer 💻</h2>
                <p class="text-lg text-gray-300">I create beautiful and functional websites using modern technologies.</p>
            </div>
            <div class="flex-1 flex justify-center items-center">
                <img src="images/hazel-homepage.png" alt="Your Logo" class="w-1/2 h-auto fade-in border-4 border-gray-600">
            </div>
        </div>

        <!-- About Me Section -->
        <section id="about" class="h-screen flex items-center justify-center bg-gray-800">
            <div class="text-center p-8">
                <h1 class="text-5xl font-bold text-cyan-500 mb-4">About Me</h1>
                <p class="text-lg text-gray-300">I have a passion for developing beautiful and functional websites...</p>
                <!-- Add more content as needed -->
            </div>
        </section>
    </x-slot>
</x-layout>
