<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - Portfolio | Hazel Davian</title>
    <meta name="description" content="Explore my projects and portfolio. Learn about my skills and expertise in software development.">
    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:title" content="My Projects - Portfolio | Hazel Davian">
    <meta property="og:description" content="Explore my projects and portfolio. Learn about my skills and expertise in software development.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/your-image.jpg') }}">
    <meta property="og:image:alt" content="My Projects - Portfolio">

    <!-- andere meta tags en links -->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
<x-layout>
    <x-slot name="heading">
        Portfolio
    </x-slot>

    <main class="min-h-screen custom-background flex items-center justify-center">
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-8 text-center">My Projects</h1>
            <section class="grid grid-cols-1 gap-8">
                <article class="bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden">
                    <header class="p-6">
                        <h2 class="text-xl font-bold mb-2 text-center">Mario Game with JavaScript</h2>
                    </header>
                    <section class="p-6">
                        <p class="text-zinc-700 dark:text-zinc-300 text-center">We had to build a game using JavaScript and HTML5. It was a group project with 3 members and involved PHP.</p>
                    </section>
                </article>
                <article class="bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden">
                    <header class="p-6">
                        <h2 class="text-xl font-bold mb-2 text-center">Chirpify - Twitter Clone</h2>
                    </header>
                    <section class="p-6">
                        <p class="text-zinc-700 dark:text-zinc-300 text-center">We received an OOP assignment to recreate Twitter as Chirpify.</p>
                    </section>
                </article>
                <article class="bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden">
                    <header class="p-6">
                        <h2 class="text-xl font-bold mb-2 text-center">Auto Sales Website</h2>
                    </header>
                    <section class="p-6">
                        <p class="text-zinc-700 dark:text-zinc-300 text-center">We built a website focusing on database management, specifically for auto sales.</p>
                    </section>
                </article>
            </section>
            <!-- Link styled as a button at the end of the page -->
            <div class="mt-8 text-center">
                <a href="https://github.com/hazezavier?tab=repositories" target="_blank" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-xl transition duration-200 inline-block">
                    View More Projects on GitHub
                </a>
            </div>
        </div>
    </main>
</x-layout>
</body>

</html>
