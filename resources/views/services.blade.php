<x-layout>
    <x-slot:heading>
        Services Page
    </x-slot:heading>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-white dark:bg-zinc-800 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-extrabold text-center text-zinc-800 dark:text-zinc-300 mb-8">Services</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-zinc-800 rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                <img alt="Web Development" src="https://placehold.co/150" class="mx-auto my-4">
                <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Web Development</h2>
                <p class="text-zinc-600 dark:text-zinc-400 text-center">Custom websites tailored to your needs.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                <img alt="UI/UX Design" src="https://placehold.co/150" class="mx-auto my-4">
                <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-200 mb-2">UI/UX Design</h2>
                <p class="text-zinc-600 dark:text-zinc-400 text-center">Beautiful and intuitive user interfaces.</p>
            </div>
            <div class="bg-white dark:bg-zinc-800 rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                <img alt="SEO Optimization" src="https://placehold.co/150" class="mx-auto my-4">
                <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-200 mb-2">SEO Optimization</h2>
                <p class="text-zinc-600 dark:text-zinc-400 text-center">Improve your website's search engine visibility.</p>
            </div>
        </div>
    </div>
    </body>
    </html>

</x-layout>
