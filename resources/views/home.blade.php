<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Portfolio - Hazel Davian</title>
    <meta name="description" content="I'm Hazel Davian, a passionate Web Developer creating beautiful and functional websites using modern technologies. Learn more about my skills and experience.">
    <!-- andere meta tags en links -->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>

<body>
<x-layout>
    <x-slot name="heading">
        Home Page
    </x-slot>

    <nav>
        <!-- Navigatie-elementen kunnen hier worden toegevoegd -->
    </nav>

    <header id="home-section" class="grid grid-cols-1 md:grid-cols-2 h-screen items-center justify-center">
        <div class="flex flex-col justify-center items-start p-8">
            <h1 class="text-5xl font-bold text-cyan-500 mb-4">Welcome to My Portfolio 🌟</h1>
            <h2 class="text-3xl text-cyan-400 mb-6">I'm Hazel Davian, a passionate Web Developer 💻</h2>
            <p class="text-lg text-gray-300">I create beautiful and functional websites using modern technologies.</p>
        </div>
        <div class="flex justify-center items-center">
            <img src="images/hazel-homepage.png" alt="Your Logo" class="w-1/2 h-auto fade-in border-4 border-gray-600">
        </div>
    </header>

    <!-- About Me Section -->
    <section id="about" class="min-h-screen md:min-h-screen-75 flex flex-col items-center justify-center bg-gray-800 overflow-y-auto pb-20">
        <div class="container mx-auto py-8 text-center">
            <h1 class="text-5xl font-bold text-cyan-500 mb-4">About Me</h1>
            <div class="text-lg text-gray-300 mx-auto max-w-2xl">
                <p class="mb-6">Welcome to my corner of the web! I'm Hazel Zavier Zehoshafhat Davian, a 20-year-old originally from Jakarta, Indonesia, but now proud to call the Netherlands home.</p>
                <div class="mb-8">
                    <h3 class="text-3xl text-yellow-300 font-bold mb-2 tracking-wide">
                        <span class="text-cyan-500">Gaming Enthusiast</span>, Tech Explorer, <span class="text-pink-400">Code Dreamer</span>
                    </h3>
                    <p class="mb-2 hover:underline">My journey into the world of technology began with a passion for gaming. From the adrenaline-fueled matches of CS to the open-world adventures of GTA, I've always been drawn to the immersive experiences that PC gaming offers. It all started with Counter Strike 1.6, where I first discovered the thrill of online competition and the endless possibilities of virtual worlds.</p>
                    <p class="mb-2">As I delved deeper into gaming, I became increasingly curious about the inner workings of computers. I found myself tinkering with settings, exploring mods, and even dipping my toes into programming to enhance my gaming experience.</p>
                    <p class="mb-2 hover:underline">With the encouragement of my mom, I discovered the world of software development. The idea of being able to create something tangible out of lines of code resonated deeply with me. There's a certain magic in writing a piece of code and seeing it come to life on the screen, functioning just as you intended.</p>
                    <p class="mb-2">Since enrolling at Techniek College Rotterdam, I've expanded my skills in HTML5, CSS, JavaScript, PHP, Laravel, Tailwind CSS, and I've also gained some experience with Kotlin. Additionally, I completed a 6-month internship at ConfigWise as a Junior Software Developer.</p>
                </div>
                <div class="mt-6">
                    <h2 class="text-2xl font-semibold text-cyan-400 mb-2">Skills</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="border-4 border-cyan-500 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-cyan-300 mb-2">HTML/CSS</h3>
                            <div class="progress-bar h-4 bg-cyan-400 rounded-full mb-2">
                                <div class="progress-bar-inner h-full bg-cyan-600 rounded-full w-2/3"></div>
                            </div>
                        </div>
                        <div class="border-4 border-cyan-500 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-cyan-300 mb-2">JavaScript</h3>
                            <div class="progress-bar h-4 bg-cyan-400 rounded-full mb-2">
                                <div class="progress-bar-inner h-full bg-cyan-600 rounded-full w-1/2"></div>
                            </div>
                        </div>
                        <div class="border-4 border-cyan-500 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-cyan-300 mb-2">PHP</h3>
                            <div class="progress-bar h-4 bg-cyan-400 rounded-full mb-2">
                                <div class="progress-bar-inner h-full bg-cyan-600 rounded-full w-3/4"></div>
                            </div>
                        </div>
                        <div class="border-4 border-cyan-500 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-cyan-300 mb-2">Laravel</h3>
                            <div class="progress-bar h-4 bg-cyan-400 rounded-full mb-2">
                                <div class="progress-bar-inner h-full bg-cyan-600 rounded-full w-3/5"></div>
                            </div>
                        </div>
                        <div class="border-4 border-cyan-500 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-cyan-300 mb-2">Tailwind CSS</h3>
                            <div class="progress-bar h-4 bg-cyan-400 rounded-full mb-2">
                                <div class="progress-bar-inner h-full bg-cyan-600 rounded-full w-3/5"></div>
                            </div>
                        </div>
                        <div class="border-4 border-cyan-500 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-cyan-300 mb-2">Kotlin</h3>
                            <div class="progress-bar h-4 bg-cyan-400 rounded-full mb-2">
                                <div class="progress-bar-inner h-full bg-cyan-600 rounded-full w-1/4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
</body>

</html>
