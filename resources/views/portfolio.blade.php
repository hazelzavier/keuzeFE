<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-8 text-center">My Projects</h1>
        <ul class="grid gap-8">
            <li class="bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-center">Project 1</h2>
                    <p class="text-zinc-700 dark:text-zinc-300 text-center">Description of Project 1</p>
                </div>
            </li>
            <li class="bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-center">Project 2</h2>
                    <p class="text-zinc-700 dark:text-zinc-300 text-center">Description of Project 2</p>
                </div>
            </li>
            <li class="bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-center">Project 3</h2>
                    <p class="text-zinc-700 dark:text-zinc-300 text-center">Description of Project 3</p>
                </div>
            </li>
        </ul>
    </div>
    </body>
    </html>
</x-layout>
