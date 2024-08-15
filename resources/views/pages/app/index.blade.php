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
                <a href="#" type="button" class="bg-blue-500 text-white px-4 py-1 rounded-lg shadow-lg">Login</a>
                <div class="p-6 rounded-full shadow-md bg-gray-200"></div>
            </div>
        </nav>
    </header>
    <section class="mx-24 mb-10 mt-16">
        <div class="flex-shrink-0 w-full bg-sky-600 p-10 flex justify-between rounded-xl shadow-xl">
            <div>
                <h1 class="text-2xl font-bold text-white">Selamat Datang di Website</h1>
                <h1 class="text-4xl font-bold text-white">Scholar Verse</h1>
                <div class="mt-10">
                    <h3 class="text-lg font-bold text-white">Temukan Informasi Seputar Kalender Beasiswa Agustus 2024
                    </h3>
                    <h3 class="text-base font-medium text-white mb-8">Tekan Tombol di Bawah Untuk Mendaftar Sekarang
                    </h3>
                    <a href="" type="button" class="text-white bg-orange-400 p-4 text-base font-semibold">Daftar
                        Sekarang!</a>
                </div>
            </div>
            <img src="{{ asset('assets/img/img-1.png') }}" alt="Image 1" class="w-60 h-60 object-cover">
        </div>

        <!-- Grid Section -->
        <div>

            <h1 class="text-slate-800 text-center mt-10 text-2xl font-bold">Promo Menarik Bulan Ini</h1>
            <div class="grid grid-cols-2 mt-10 gap-10">
                <div class="bg-gray-200 rounded-md shadow-lg p-20">
                    <h3 class="text-lg font-semibold"></h3>
                </div>
                <div class="bg-gray-200 rounded-md shadow-lg p-20">
                    <h3 class="text-lg font-semibold"></h3>
                </div>
                <div class="bg-gray-200 rounded-md shadow-lg p-20">
                    <h3 class="text-lg font-semibold"></h3>
                </div>
                <div class="bg-gray-200 rounded-md shadow-lg p-10">
                    <h3 class="text-lg font-semibold"></h3>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
