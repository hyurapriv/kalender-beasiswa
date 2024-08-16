<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="bg-white p-6 shadow-lg flex justify-between items-center px-24">
            <div class="flex items-center gap-10">
                <h2 class="font-bold text-lg">Scholar Verse</h2>
                <div class="flex gap-6 text-base font-semibold">
                    <a href="#" class="hover:text-blue-500">Program Kami</a>
                    <a href="#" class="hover:text-blue-500">Kalender Beasiswa</a>
                </div>
            </div>
            <div class="flex items-center gap-10">
                <a href="#" type="button"
                    class="bg-blue-500 text-white px-4 py-1 rounded-lg shadow-lg hover:opacity-85">Login</a>
                <div class="p-6 rounded-full shadow-md bg-gray-200"></div>
            </div>
        </nav>
    </header>

    {{-- Top Section --}}
    <section class="mb-6 mt-16">
        <div class="px-24">
            <div class="flex-shrink-0 w-full bg-sky-600 p-10 flex justify-between rounded-xl shadow-xl">
                <div>
                    <h1 class="text-2xl font-bold text-white">Selamat Datang di Website</h1>
                    <h1 class="text-4xl font-bold text-white">Scholar Verse</h1>
                    <div class="mt-10">
                        <h3 class="text-lg font-bold text-white">Temukan Informasi Seputar Kalender Beasiswa Agustus
                            2024
                        </h3>
                        <h3 class="text-base font-medium text-white mb-10">Tekan Tombol di Bawah Untuk Mendaftar
                            Sekarang
                        </h3>
                        <a href="" type="button"
                            class="text-white bg-orange-400 p-4 text-base font-semibold rounded-md shadow-lg hover:opacity-85">Daftar
                            Sekarang!</a>
                    </div>
                </div>
                <img src="{{ asset('assets/img/img-1.png') }}" alt="Image 1" class="w-60 h-60 object-cover">
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section class="mb-16 py-8">
        <div class="px-24">
            <h1 class="text-slate-800 text-center mt-10 text-2xl font-bold">Promo Menarik Bulan Ini</h1>
            <div class="grid grid-cols-3 mt-16 gap-10">
                <div class="bg-gray-200 rounded-md shadow-lg p-20 relative">
                    <img src="{{ asset('assets/img/promo-1.png') }}" alt=""
                        class="absolute inset-0 object-cover w-full h-full">
                </div>
                <div class="bg-gray-200 rounded-md shadow-lg p-20 relative">
                    <img src="{{ asset('assets/img/promo-2.jpg') }}" alt=""
                        class="absolute inset-0 object-cover w-full h-full">
                </div>
                <div class="bg-gray-200 rounded-md shadow-lg p-20 relative">
                    <img src="{{ asset('assets/img/promo-3.png') }}" alt=""
                        class="absolute inset-0 object-cover w-full h-full">
                </div>
            </div>
        </div>
    </section>

    {{-- Universitas Sectiion --}}
    <section class="mb-4 py-20 ">
        <h1 class="text-2xl text-black font-bold text-center">Beasiswa Universitas Impian</h1>
        <div class="px-24 flex flex-row justify-center mt-16 gap-14">
            <img src="{{ asset('assets/img/ui.png') }}" class="w-16 h-16 grayscale duration-700 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/ugm.png') }}" class="w-16 h-16 grayscale duration-700 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/itb.png') }}" class="w-16 h-16 grayscale duration-700 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/pens.png') }}" class="w-16 h-16 grayscale duration-700 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/unair.png') }}" class="w-16 h-16 grayscale duration-700 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/harvard.png') }}" class="w-16 h-16 grayscale duration-700 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/stanford.webp') }}"
                class="w-20 h-20 grayscale pb-4 duration-700 hover:grayscale-0" alt="">
            <img src="{{ asset('assets/img/mit.png') }}"
                class="w-20 h-12 grayscale pt-3 duration-700 hover:grayscale-0" alt="">
        </div>
    </section>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f0f9ff" fill-opacity="1"
                d="M0,160L30,138.7C60,117,120,75,180,85.3C240,96,300,160,360,197.3C420,235,480,245,540,213.3C600,181,660,107,720,106.7C780,107,840,181,900,186.7C960,192,1020,128,1080,128C1140,128,1200,192,1260,224C1320,256,1380,256,1410,256L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>
    </div>

    {{-- Kerja Sama --}}
    <section class="bg-sky-50 py-20 px-10">
        <div class="px-24">
            <h1 class="text-2xl font-bold text-center">Tutorial Daftar Beasiswa di Scholar Verse</h1>
    
            <!-- Bagian Pertama -->
            <div class="relative flex items-start mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center">1.</span>
                    <!-- Garis vertikal -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 top-full h-[calc(100%+12rem)] flex flex-col items-center justify-between">
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                    </div>
                </div>
                <div class="flex-grow bg-white rounded-lg shadow-lg flex justify-between px-8">
                    <div class="flex flex-col max-w-96">
                        <h3 class="text-2xl font-bold mt-8">Beasiswa Bidikmisi PTN Indonesia</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem consequatur a veniam.</h3>
                        <a href="#" class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85" type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}" class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>
    
            <!-- Bagian Kedua -->
            <div class="relative flex items-start mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center">2.</span>
                    <!-- Garis vertikal -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 top-full h-[calc(100%+12rem)] flex flex-col items-center justify-between">
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                        <div class="w-1 h-4 bg-sky-700 rounded-full my-2"></div>
                    </div>
                </div>
                <div class="flex-grow bg-white rounded-lg shadow-lg flex justify-between px-8">
                    <div class="flex flex-col max-w-96">
                        <h3 class="text-2xl font-bold mt-8">Beasiswa Bidikmisi PTN Indonesia</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem consequatur a veniam.</h3>
                        <a href="#" class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85" type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}" class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>
    
            <!-- Bagian Ketiga -->
            <div class="relative flex items-start justify-center mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center">3.</span>
                </div>
                <div class="flex-grow bg-white rounded-lg shadow-lg flex justify-between px-8">
                    <div class="flex flex-col max-w-96">
                        <h3 class="text-2xl font-bold mt-8">Beasiswa Bidikmisi PTN Indonesia</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem consequatur a veniam.</h3>
                        <a href="#" class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85" type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}" class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</body>

</html>
