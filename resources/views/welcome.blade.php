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
            <div class="text-3xl font-extrabold">HalfTime Rentals</div>
            <nav class="space-x-4 font-bold">
                <a href="">Explore</a>
                <a href="">Contact</a>
                <a href="#"
                    class="ml-20 px-4 py-2 border rounded hover:bg-white hover:text-gray-800 transition-all"
                >Rent A Car</a>
                <a href="{{ route('login') }}"
                    class="px-4 py-2 border rounded bg-white text-gray-800"
                >Login</a>
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
                        <div class="flex items-center justify-end mt-4">

                            <x-button class="block mt-3 w-full">
                                {{ __('Search') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
</body>
</html>