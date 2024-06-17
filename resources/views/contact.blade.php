
<x-layout>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <meta name="description" content="Contact me for inquiries, questions, or collaborations. Get in touch today!">
    <meta property="og:title" content="Contact Me">
    <meta property="og:description" content="Contact me for inquiries, questions, or collaborations. Get in touch today!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/your-image.jpg') }}">
    <meta property="og:image:alt" content="Contact Me">

    <main class="min-h-screen custom-background flex items-center justify-center">
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-8 text-center text-white">Contact Me</h1>

            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="max-w-md mx-auto bg-white p-8 rounded shadow">
                @csrf
                <section class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </section>
                <section class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </section>
                <section class="mb-4">
                    <label for="remarks" class="block text-gray-700 text-sm font-bold mb-2">Remarks:</label>
                    <textarea name="remarks" id="remarks" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </section>
                <section class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                </section>
            </form>
        </div>
    </main>
</x-layout>
