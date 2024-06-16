<x-layout>
    <x-slot:heading>
        Case Study Page
    </x-slot:heading>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crisscross Layout</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 p-6">
    <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between p-4">
        <div class="max-w-md lg:max-w-lg order-2 lg:order-1 mb-4 lg:mb-0 lg:mr-4">
            <img src="https://placehold.co/300" alt="Case Study Image" class="rounded-lg shadow-lg">
        </div>
        <div class="max-w-md lg:max-w-lg order-1 lg:order-2 lg:ml-4">
            <p class="text-lg text-center lg:text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row-reverse items-center justify-center lg:justify-between p-4">
        <div class="max-w-md lg:max-w-lg mb-4 lg:mb-0 lg:ml-4">
            <img src="https://placehold.co/300" alt="Case Study Image" class="rounded-lg shadow-lg">
        </div>
        <div class="max-w-md lg:max-w-lg lg:mr-4">
            <p class="text-lg text-center lg:text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    </body>
    </html>

</x-layout>
