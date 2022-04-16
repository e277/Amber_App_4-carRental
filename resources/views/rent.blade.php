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
                    HalfTime Rentals
                </a>

            </div>

        </header>

        <main>

            <div class="min-h-screen bg-gray-300">
                <div class="container mx-auto p-10 max-w-screen-lg">
                    <div class="bg-white rounded shadow p-8">
                        <!--  ToastBar  -->
                        <div class="w-full bg-orange-200 text-yellow-900 px-4 py-2 flex items-center">
                            <img src="https://svgsilh.com/svg/151889.svg" class="w-10 block pr-2">
                            <div class="text-sm">Congrats you're eligible for a <b>Coupon Code</b> in this order </div>
                        </div>
                        <!-- Order Summary  -->
                        <div>
                            <h3 class="text-xl mt-4 font-bold">Order Summary</h3>
                            <!--     BOX     -->
                            <div class="border w-full rounded mt-5 flex p-4 justify-between items-center flex-wrap">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/41KufN65f8L.jpg" class="w-12">
                                <div class="w-2/3">
                                    <h3 class="text-lg font-medium">Black Jacket XL</h3>
                                    <p class="text-gray-600 text-xs">Sold by <b>Aashir Khan</b></p>
                                    <h4 class="text-red-700 text-xs font-bold mt-1">Only 2 left in stock</h4>
                                </div>
                                <div>
                                    <h4 class="text-3xl font-medium"><sup class="text-lg text-purple-800">$</sup> 89</h4>
                                    <h5 class="text-sm font-bold text-purple-800">60% OFF</h5>
                                </div>
                                <div class="w-full flex justify-between mt-4">
                                    <button class="text-red-700 hover:bg-red-100 px-2">DELETE</button>
                                    <label class="block uppercase tracking-wide text-gray-700" for="grid-first-name">
                                        QTY
                                        <select class="ml-3 text-sm bg-purple-700 border border-purple-200 text-white p-2 rounded leading-tight" id="grid-state">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="border w-full rounded mt-5 flex p-4 justify-between items-center flex-wrap">
                                <img src="https://cdn11.bigcommerce.com/s-tboh32g/images/stencil/1280x1280/products/385314/492280/104C_BlackBlackHQ__07610.1557157866.jpg?c=2?imbypass=on" class="w-12">
                                <div class="w-2/3">
                                    <h3 class="text-lg font-medium">Black Hat</h3>
                                    <p class="text-gray-600 text-xs">Sold by <b>Taha Dildar</b></p>
                                    <h4 class="text-red-700 text-xs font-bold mt-1">Only 1 left in stock</h4>
                                </div>
                                <div>
                                    <h4 class="text-3xl font-medium"><sup class="text-lg text-purple-800">$</sup> 20</h4>
                                    <h5 class="text-sm font-bold text-purple-800">40% OFF</h5>
                                </div>
                                <div class="w-full flex justify-between mt-4">
                                    <button class="text-red-700 hover:bg-red-100 px-2">DELETE</button>
                                    <label class="block uppercase tracking-wide text-gray-700" for="grid-first-name">
                                        QTY
                                        <select class="ml-3 text-sm bg-purple-700 border border-purple-200 text-white p-2 rounded leading-tight" id="grid-state">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="px-4 py-4 bg-purple-700 text-white w-full mt-3 rounded shadow font-bold hover:bg-purple-900">PROCEED TO CHECKOUT SCREEN</button>
                    </div>
                    <div class="flex justify-between mt-8 flex-wrap lg:justify-center">
                        <div class="bg-white rounded shadow p-2 w-full lg:w-2/4">
                            <div class="w-full bg-orange-200 px-8 py-6">
                                <h3 class="text-2xl mt-4 font-bold">Price Breakdown</h3>
                                <div class="flex justify-between mt-3">
                                    <div class="text-xl text-orange-900 font-bold">Amount</div>
                                    <div class='text-xl text-right font-bold '>$102</div>
                                </div>
                                <div class="flex justify-between mt-3">
                                    <div class="text-xl text-orange-900 font-bold">VAT (15%)</div>
                                    <div class='text-xl text-right font-bold'>$12</div>
                                </div>
                                <div class="bg-orange-300 h-1 w-full mt-3"></div>
                                <div class="flex justify-between mt-3">
                                    <div class="text-xl text-orange-900 font-bold">Total Amount</div>
                                    <div class="text-2xl text-orange-900 font-bold">$114</div>
                                </div>
                                <button class="px-4 py-4 bg-purple-700 text-white w-full mt-3 rounded shadow font-bold hover:bg-purple- 900"> CHECKOUT</button>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow px-10 py-6 w-full mt-4 flex flex-wrap justify-center lg:w-2/4 lg:ml-3">
                            <div class="pr-8">
                                <h3 class="text-2xl mt-4 font-bold text-purple-900">Thank You, Alex</h3>
                                <h4 class="text-sm text-gray-600 font-bold">ORDER #5624</h4>
                            </div>
                            <img src="https://image.flaticon.com/icons/svg/1611/1611768.svg" alt="" class="w-24">
                        </div>
                    </div>
                </div>
            </div>

        </main>

        {{-- FOOTER --}}
        <footer class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">

                    <span class="ml-3 text-xl">HalfTime Rentals</span>
                </a>

                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
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
