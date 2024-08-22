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
                    <h3 class="text-lg font-semibold mb-4">Filter Beasiswa</h3>

                    <div class="relative mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Jenjang Beasiswa</label>
                        <button id="dropdownButton1"
                            class="w-full bg-white border border-gray-300 rounded-md p-2 flex items-center justify-between text-gray-700">
                            <span class="text-sm">Pilih Jenjang Beasiswa</span>
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
                                    <label for="filter1-s1" class="ml-2 text-sm font-medium text-gray-700">S1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter1-s2" name="filter1" value="S2"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter1-s2" class="ml-2 text-sm font-medium text-gray-700">S2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter1-s3" name="filter1" value="S3"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter1-s3" class="ml-2 text-sm font-medium text-gray-700">S3</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown 2 -->
                    <div class="relative mb-4" id="dropdownContainer2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Jenjang Negara</label>
                        <button id="dropdownButton2"
                            class="w-full bg-white border border-gray-300 rounded-md p-2 flex items-center justify-between text-gray-700">
                            <span class="text-sm">Pilih Negara</span>
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
                                    <label for="filter2-s1" class="ml-2 text-sm font-medium text-gray-700">S1</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter2-s2" name="filter2" value="S2"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter2-s2" class="ml-2 text-sm font-medium text-gray-700">S2</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="filter2-s3" name="filter2" value="S3"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                    <label for="filter2-s3" class="ml-2 text-sm font-medium text-gray-700">S3</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Kolom Layanan -->
                <div class="lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                    <!-- Kolom 1 -->
                    <div class="bg-white px-8 py-6 rounded-lg shadow-lg border border-gray-400">
                        <img src="{{ asset('assets/img/service1.jpg') }}" alt="Service 1"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h2 class="text-lg font-bold mb-2">Beasiswa A</h2>
                        <p class="text-gray-700 mb-4">Deskripsi singkat tentang layanan A</p>
                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="bg-white px-8 py-6 rounded-lg shadow-lg border border-gray-400">
                        <img src="{{ asset('assets/img/service2.jpg') }}" alt="Service 2"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h2 class="text-lg font-bold mb-2">Beasiswa B</h2>
                        <p class="text-gray-700 mb-4">Deskripsi singkat tentang Beasiswa B</p>
                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="bg-white px-8 py-6 rounded-lg shadow-lg border border-gray-400">
                        <img src="{{ asset('assets/img/service3.jpg') }}" alt="Service 3"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h2 class="text-lg font-bold mb-2">Beasiswa C</h2>
                        <p class="text-gray-700 mb-4">Deskripsi singkat tentang beasiswa C</p>
                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                    </div>

                    <!-- Kolom 4 -->
                    <div class="bg-white px-8 py-6 rounded-lg shadow-lg border border-gray-400">
                        <img src="{{ asset('assets/img/service3.jpg') }}" alt="Service 3"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h2 class="text-lg font-bold mb-2">Beasiswa D</h2>
                        <p class="text-gray-700 mb-4">Deskripsi singkat tentang layanan D</p>
                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
