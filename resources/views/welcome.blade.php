<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-800 text-white">
    <div class="w-4/5 mx-auto h-screen">
        <header class="flex flex-row items-center justify-between mt-8 mb-16">
            <div class="text-3xl font-extrabold">
                <a href="/">
                    HalfTime Rentals</div>
                </a>
            <nav class="space-x-4 font-bold">
                <a href="">Explore</a>
                <a href="">Contact</a>
                <a href="{{ route('rent') }}"
                    class="ml-20 px-4 py-2 border rounded hover:bg-white hover:text-gray-800 transition-all">Rent A
                    Car</a>
                <a href="{{ route('login') }}" class="px-4 py-2 border rounded bg-white text-gray-800">Login</a>
            </nav>
        </header>
        <main>
            <section class="flex flex-col items-center justify-center bg-gray-300">
                <img src="{{ asset('img/hero.jpg') }}" alt="hero image" class="w-full">
                <div>
                    <form action="" method="post" class="flex flex-row items-center justify-between py-12 gap-20">
                        <div>
                            <x-label for="pickup" :value="__('Pick-up Date')" />
                            <x-input id="pickup" class="block w-full mt-2" type="date" name="pickup" />
                        </div>
                        <div>
                            <x-label for="dropoff" :value="__('Drop-off Date')" />
                            <x-input id="pickup" class="block w-full mt-2" type="date" name="pickup" />
                        </div>
                        <div class="mt-5">
                            <a
                                class="block w-full bg-gray-700 uppercase font-semibold tracking-wider text-white text-center rounded-md px-16 py-3"
                                href="{{ route('rent') }}"
                            >
                                Search
                            </a>
                        </div>
                    </form>
                </div>
            </section>


            {{-- Featured Cars --}}
            <section class="text-gray-600 body-font">
                <div class="mt-24 text-center text-3xl text-white">
                    Explore / Featured Cars
                </div>
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <div class="p-4 md:w-1/3">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="https://pictures.topspeed.com/IMG/crop_webp/201801/ford-edge-15_400x266.webp"
                                    alt="blog">
                                <div class="p-6 bg-gray-300">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        FORD</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Edge</h1>
                                    <p class="leading-relaxed mb-3">
                                        So what makes the Edge so technologically adept? Well, the standard safety
                                        features list is long. It includes Forward Collision Warning and Dynamic Brake
                                        Support...
                                    </p>
                                    <div class="flex items-center flex-wrap ">
                                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>1.2K
                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>6
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="https://pictures.topspeed.com/IMG/crop_webp/202104/2022-jeep-compass-16_400x266.webp"
                                    alt="blog">
                                <div class="p-6 bg-gray-300">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        JEEP</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Compass</h1>
                                    <p class="leading-relaxed mb-3">
                                        This compass also comes with a new plug-in hybrid powertrain called the 4xe.
                                        Trivia: This is the first Jeep launch in Europe after incorporating it into the
                                        Stellantis umbrella...
                                    </p>
                                    <div class="flex items-center flex-wrap">
                                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>1.2K
                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>6
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="https://pictures.topspeed.com/IMG/crop_webp/202112/2022-toyota-camry-39_400x266.webp"
                                    alt="blog">
                                <div class="p-6 bg-gray-300">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                        TOYOTA</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Camry</h1>
                                    <p class="leading-relaxed mb-3">
                                        The Camry is in its eighth generation and is one of Toyota’s best-selling cars
                                        outside of the RAV4. The Camry went through a major update for the 2021 model
                                        year...
                                    </p>
                                    <div class="flex items-center flex-wrap ">
                                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <span
                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>1.2K
                                        </span>
                                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                <path
                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                </path>
                                            </svg>6
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        {{-- FOOTER --}}
        <footer class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    
                    <span class="ml-3 text-xl">HalfTime Rentals</span>
                </a>
                
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </footer>
    </div>
</body>

</html>