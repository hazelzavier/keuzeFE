<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Offered - Hazel Davian</title>
    <meta name="description" content="Explore our services including Web Development, UI/UX Design, and SEO Optimization. Contact us to enhance your online presence.">
    <!-- andere meta tags en links -->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>

<body>
<x-layout>
    <x-slot name="heading">
        Services
    </x-slot>

    <main class="min-h-screen custom-background">
        <section class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 h-full">
            <article class="bg-white dark:bg-zinc-800 rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                <header>
                    <img alt="Web Development" src="images/web-development.png" class="mx-auto my-4">
                    <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-200 mb-2">Web Development</h2>
                </header>
                <p class="text-zinc-600 dark:text-zinc-400 text-center">Custom websites tailored to your needs.</p>
            </article>
            <article class="bg-white dark:bg-zinc-800 rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                <header>
                    <img alt="UI/UX Design" src="images/ui-ux.png" class="mx-auto my-4">
                    <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-200 mb-2">UI/UX Design</h2>
                </header>
                <p class="text-zinc-600 dark:text-zinc-400 text-center">Beautiful and intuitive user interfaces.</p>
            </article>
            <article class="bg-white dark:bg-zinc-800 rounded-lg p-6 shadow-lg flex flex-col items-center justify-center">
                <header>
                    <img alt="SEO Optimization" src="images/SEO.png" class="mx-auto my-4">
                    <h2 class="text-2xl font-semibold text-zinc-800 dark:text-zinc-200 mb-2">SEO Optimization</h2>
                </header>
                <p class="text-zinc-600 dark:text-zinc-400 text-center">Improve your website's search engine visibility.</p>
            </article>
        </section>
    </main>
</x-layout>
</body>

</html>
