@extends('layouts.app')

@section('content')
    <section class="mb-6 mt-16">
        <div class="px-4 sm:px-6 lg:px-24">
            <div
                class="w-full bg-sky-600 p-4 sm:p-6 lg:p-10 flex flex-col sm:flex-row justify-between items-center rounded-xl shadow-xl">
                <div class="text-center sm:text-left mb-6 sm:mb-0">
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white mb-2">Informasi Seputar
                        Kalender Beasiswa Agustus 2024</h1>
                    <div class="mt-4 sm:mt-6 lg:mt-10">
                        <h3 class="text-sm sm:text-base lg:text-lg font-bold text-white mb-2">Temukan Informasi Seputar
                            Kalender Beasiswa Agustus 2024</h3>
                        <h3 class="text-xs sm:text-sm lg:text-base font-medium text-white mb-4 sm:mb-6 lg:mb-4">Tekan
                            Tombol di Bawah Untuk Mendaftar Sekarang</h3>
                        <a href="" type="button"
                            class="inline-block text-white bg-orange-400 px-3 py-2 sm:px-4 sm:py-3 lg:p-3 text-xs sm:text-sm lg:text-base font-semibold rounded-md shadow-lg hover:bg-orange-500 transition duration-300">
                            Daftar Sekarang!
                        </a>
                    </div>
                </div>
                <img src="{{ asset('assets/img/calendar.webp') }}" alt="carousel"
                    class="w-32 h-32 sm:w-48 sm:h-48 lg:w-60 lg:h-60 object-cover drop-shadow-lg">
            </div>
        </div>
    </section>

    <section class="mb-6 mt-16">
        <div class="px-4 sm:px-6 lg:px-24">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Kolom Filter -->
                <div class="lg:w-1/4 p-4">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">Filter Beasiswa</h3>

                    <div class="relative mb-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Jenjang Beasiswa</label>
                        <button id="dropdownButton1"
                            class="w-full bg-white border border-gray-300 rounded-md p-2 flex items-center justify-between text-gray-700">
                            <span class="text-sm text-gray-600">Pilih Jenjang Beasiswa</span>
                            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="dropdownMenu1"
                            class="absolute w-full bg-white border border-gray-300 rounded-md mt-2 hidden transition-all duration-300">
                            <div class="flex flex-col p-2 space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="filter1-s1" name="filter1" value="S1"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter1-s1" class="ml-2 text-sm font-medium text-gray-600">S1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter1-s2" name="filter1" value="S2"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter1-s2" class="ml-2 text-sm font-medium text-gray-600">S2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter1-s3" name="filter1" value="S3"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter1-s3" class="ml-2 text-sm font-medium text-gray-600">S3</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 2 -->
                    <div class="relative mb-4" id="dropdownContainer2">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Negara</label>
                        <button id="dropdownButton2"
                            class="w-full bg-white border border-gray-300 rounded-md p-2 flex items-center justify-between text-gray-700">
                            <span class="text-sm text-gray-500">Pilih Negara</span>
                            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="dropdownMenu2"
                            class="absolute w-full bg-white border border-gray-300 rounded-md mt-2 hidden transition-all duration-300">
                            <div class="flex flex-col p-2 space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="filter2-s1" name="filter2" value="S1"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter2-s1" class="ml-2 text-sm font-medium text-gray-600">Singapore</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter2-s2" name="filter2" value="S2"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter2-s2" class="ml-2 text-sm font-medium text-gray-600">Korea</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter2-s3" name="filter2" value="S3"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter2-s3" class="ml-2 text-sm font-medium text-gray-600">USA</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Layanan -->
                <div class="lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                    <div class="py-4 -mb-2 flex justify-start">
                        <input type="search" class="py-2 px-4 rounded-md shadow-sm border border-gray-400"
                            id="search" placeholder="Cari Layanan">
                    </div>
                    <div class="py-4 -mb-2 flex justify-end">
                        <select name="" class="py-2 px-4 rounded-md shadow-sm border border-gray-400 text-gray-500"
                            id="">
                            <option value="">Terpopuler</option>
                            <option value="">Open Terdekat</option>
                            <option value="">Deadline Terdekat</option>
                            <option value="">Deadline Terjauh</option>
                        </select>
                    </div>

                    <!-- Beasiswa Section -->
                    <div class="bg-white px-6 py-6 rounded-lg shadow-lg border border-gray-400 flex flex-col h-full">
                        <div class="mb-4 flex items-center">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">S1</span>
                            <span class="ml-2 bg-gray-100 px-2 py-1 rounded">Singapura</span>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-base font-medium mb-2">Beasiswa Partially Funded</h2>
                            <h3 class="text-xl font-bold mb-4">
                                Singapore University of Social Sciences
                            </h3>
                        </div>
                        <div class="bg-gray-100 p-3 mr-3 mb-6 rounded mt-auto">
                            <div class="text-gray-700 mb-2">
                                <span class="font-semibold">Open Registration:</span> 01 Januari 2025
                            </div>
                            <div class="text-gray-700">
                                <span class="font-semibold">Deadline:</span> <span class="text-red-500">10 Januari
                                    2025</span>
                            </div>
                        </div>
                        <a href="#"
                            class="text-white hover:bg-blue-600 bg-blue-500 py-2 px-3 rounded-md shadow-md block text-center">Selengkapnya</a>
                    </div>

                    <div class="bg-white px-6 py-6 rounded-lg shadow-lg border border-gray-400 flex flex-col h-full">
                        <div class="mb-4 flex items-center">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">S1</span>
                            <span class="ml-2 bg-gray-100 px-2 py-1 rounded">Indonesia</span>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-base font-medium mb-2">Beasiswa Fully Funded</h2>
                            <h3 class="text-xl font-bold mb-4">
                                Beasiswa Pelita Nusantara
                            </h3>
                        </div>
                        <div class="bg-gray-100 p-3 mr-3 mb-6 rounded mt-auto">
                            <div class="text-gray-700 mb-2">
                                <span class="font-semibold">Open Registration:</span> 21 Agustus 2024
                            </div>
                            <div class="text-gray-700">
                                <span class="font-semibold">Deadline:</span> <span class="text-red-500">25 Desember
                                    2024</span>
                            </div>
                        </div>
                        <a href="#"
                            class="text-white hover:bg-blue-600 bg-blue-500 py-2 px-3 rounded-md shadow-md block text-center">Selengkapnya</a>
                    </div>
                    <div class="bg-white px-6 py-6 rounded-lg shadow-lg border border-gray-400 flex flex-col h-full">
                        <div class="mb-4 flex items-center">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">S1</span>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded ml-2">S2</span>
                            <span class="ml-2 bg-gray-100 px-2 py-1 rounded">Indonesia</span>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-base font-medium mb-2">Beasiswa Fully Funded</h2>
                            <h3 class="text-xl font-bold mb-4">
                                Beasiswa Kedokteran Universitas Gadjah Mada
                            </h3>
                        </div>
                        <div class="bg-gray-100 p-3 mr-3 mb-6 rounded mt-auto">
                            <div class="text-gray-700 mb-2">
                                <span class="font-semibold">Open Registration:</span> 20 Oktober 2024
                            </div>
                            <div class="text-gray-700">
                                <span class="font-semibold">Deadline:</span> <span class="text-red-500">15 November
                                    2024</span>
                            </div>
                        </div>
                        <a href="#"
                            class="text-white hover:bg-blue-600 bg-blue-500 py-2 px-3 rounded-md shadow-md block text-center">Selengkapnya</a>
                    </div>
                    <div class="bg-white px-6 py-6 rounded-lg shadow-lg border border-gray-400 flex flex-col h-full">
                        <div class="mb-4 flex items-center">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">S1</span>
                            <span class="ml-2 bg-gray-100 px-2 py-1 rounded">Multiple Countries</span>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-base font-medium mb-2">Beasiswa Fully Funded</h2>
                            <h3 class="text-xl font-bold mb-4">
                                Beasiswa S1 Prestasi Luar Negeri
                            </h3>
                        </div>
                        <div class="bg-gray-100 p-3 mr-3 mb-6 rounded mt-auto">
                            <div class="text-gray-700 mb-2">
                                <span class="font-semibold">Open Registration:</span> 01 Agustus 2024
                            </div>
                            <div class="text-gray-700">
                                <span class="font-semibold">Deadline:</span> <span class="text-red-500">20 Agustus
                                    2024</span>
                            </div>
                        </div>
                        <a href="#"
                            class="text-white hover:bg-slate-900 bg-slate-800 py-2 px-3 rounded-md shadow-md block text-center">Pendaftaran Ditutup</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
