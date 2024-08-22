@extends('layouts.app')

@section('content')
    {{-- Top Section --}}
    <section class="mb-6 mt-16">
        <div class="px-4 sm:px-6 lg:px-24">
            <div
                class="w-full bg-sky-600 p-4 sm:p-6 lg:p-10 flex flex-col sm:flex-row justify-between items-center rounded-xl shadow-xl">
                <div class="text-center sm:text-left mb-6 sm:mb-0">
                    <h1 class="text-xl sm:text-2xl lg:text-2xl font-bold text-white mb-2">Selamat Datang di Website</h1>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-4">Scholar Verse</h1>
                    <div class="mt-4 sm:mt-6 lg:mt-10">
                        <h3 class="text-sm sm:text-base lg:text-lg font-bold text-white mb-2">Temukan Informasi Seputar
                            Kalender Beasiswa Agustus 2024</h3>
                        <h3 class="text-xs sm:text-sm lg:text-base font-medium text-white mb-4 sm:mb-6 lg:mb-6">Tekan
                            Tombol di Bawah Untuk Mendaftar Sekarang</h3>
                        <a href="" type="button"
                            class="inline-block text-white bg-orange-400 px-3 py-2 sm:px-4 sm:py-3 lg:p-4 text-xs sm:text-sm lg:text-base font-semibold rounded-md shadow-lg hover:bg-orange-500 transition duration-300">
                            Daftar Sekarang!
                        </a>
                    </div>
                </div>
                <img src="{{ asset('assets/img/img-1.png') }}" alt="Image 1"
                    class="w-32 h-32 sm:w-48 sm:h-48 lg:w-60 lg:h-60 object-cover drop-shadow-lg">
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section class="mb-16 py-8">
        <div class="px-24 px-4-mobile">
            <h1 class="text-slate-800 text-center mt-10 text-4xl font-bold">Top Trending Beasiswa Bulan Ini</h1>
            <div class="grid grid-cols-3 grid-cols-1-mobile mt-16 gap-10">
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden mb-10 flex flex-col">
                    <img src="{{ asset('assets/img/promo-1.png') }}" class="w-full h-44 object-cover rounded-lg shadow-md"
                        alt="Promo">
                    <div class="py-8 px-6 flex-grow flex flex-col">
                        <h3 class="mb-auto font-bold text-xl text-slate-800 min-h-[3rem]">Beasiswa Scholar Verse</h3>
                        <p class="font-bold text-sm text-slate-800 mt-2">Batas Pendaftaran:</p>
                        <p class="font-normal text-sm text-slate-800 mb-4">02 September 2024 - 01 Desember 2024</p>
                        <div class="mt-auto text-center flex">
                            <a href="#"
                                class="bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white py-2 px-4 rounded-md w-full mx-auto">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden mb-10 flex flex-col">
                    <img src="{{ asset('assets/img/promo-2.jpg') }}" class="w-full h-44 object-cover rounded-lg shadow-md"
                        alt="Promo">
                    <div class="py-8 px-6 flex-grow flex flex-col">
                        <h3 class="mb-auto font-bold text-xl text-slate-800 min-h-[3rem]">Beasiswa Bidikmisi</h3>
                        <p class="font-bold text-sm text-slate-800 mt-2">Batas Pendaftaran:</p>
                        <p class="font-normal text-sm text-slate-800 mb-4">01 Agustus 2024 - 25 September 2024</p>
                        <div class="mt-auto text-center flex">
                            <a href="#"
                                class="bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white py-2 px-4 rounded-md w-full mx-auto">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden mb-10 flex flex-col">
                    <img src="{{ asset('assets/img/promo-3.png') }}" class="w-full h-44 object-cover rounded-lg shadow-md"
                        alt="Promo">
                    <div class="py-8 px-6 flex-grow flex flex-col">
                        <h3 class="mb-auto font-bold text-xl text-slate-800 min-h-[3rem]">Beasiswa GenMas Indonesia</h3>
                        <p class="font-bold text-sm text-slate-800 mt-2">Batas Pendaftaran:</p>
                        <p class="font-normal text-sm text-slate-800 mb-4">01 Januari 2025 - 10 Januari 2025</p>
                        <div class="mt-auto text-center flex">
                            <a href="#"
                                class="bg-blue-500 hover:bg-blue-600 font-medium text-sm text-white py-2 px-4 rounded-md w-full mx-auto">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Universitas Section --}}
    <section class="mb-4 py-20">
        <h1 class="text-4xl text-black font-bold text-center">Beasiswa Universitas Impian</h1>
        <div class="px-24 flex flex-row justify-center mt-16 gap-14 flex-wrap">
            <img src="{{ asset('assets/img/ui.png') }}" class="w-16 h-16 grayscale duration-500 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/ugm.png') }}" class="w-16 h-16 grayscale duration-500 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/itb.png') }}" class="w-16 h-16 grayscale duration-500 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/pens.png') }}" class="w-16 h-16 grayscale duration-500 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/unair.png') }}" class="w-16 h-16 grayscale duration-500 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/harvard.png') }}" class="w-16 h-16 grayscale duration-500 hover:grayscale-0"
                alt="">
            <img src="{{ asset('assets/img/stanford.webp') }}"
                class="w-20 h-20 grayscale pb-4 duration-500 hover:grayscale-0" alt="">
            <img src="{{ asset('assets/img/mit.png') }}" class="w-20 h-12 grayscale pt-3 duration-500 hover:grayscale-0"
                alt="">
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
    <section class="bg-sky-50 py-52 -mb-56">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center mb-12 -mt-28">Tutorial Daftar Beasiswa di Scholar Verse</h1>

            <div class="space-y-12 mb-48">
                <!-- Langkah 1 -->
                <div class="flex flex-col md:flex-row items-start bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 bg-sky-700 text-white p-4 md:p-6 flex items-center justify-center">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-bold mb-2">Registrasi & Login</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#"
                            class="inline-block bg-orange-400 text-white py-2 px-4 rounded-lg shadow-md hover:bg-orange-500 transition duration-300">Login</a>
                    </div>
                    <div class="w-full md:w-1/3 p-6">
                        <img src="{{ asset('assets/img/login.png') }}"
                            class="w-40 h-40 ml-20 object-cover rounded-lg shadow-md" alt="Registrasi">
                    </div>
                </div>

                <!-- Langkah 2 -->
                <div class="flex flex-col md:flex-row items-start bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 bg-sky-700 text-white p-4 md:p-6 flex items-center justify-center">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-bold mb-2">Cari & Pilih Program Beasiswa</h3>
                        <p class="text-gray-600 mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#"
                            class="inline-block bg-orange-400 text-white py-2 px-4 rounded-lg shadow-md hover:bg-orange-500 transition duration-300">Cari
                            Beasiswa</a>
                    </div>
                    <div class="w-full md:w-1/3 p-6">
                        <img src="{{ asset('assets/img/cari.png') }}"
                            class="w-40 h-40 object-cover rounded-lg shadow-md ml-28" alt="Pilih Beasiswa">
                    </div>
                </div>

                <!-- Langkah 3 -->
                <div class="flex flex-col md:flex-row items-start bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 bg-sky-700 text-white p-4 md:p-6 flex items-center justify-center">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-bold mb-2">Daftarkan Data Diri Kamu</h3>
                        <p class="text-gray-600 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="w-full md:w-1/3 p-6">
                        <img src="{{ asset('assets/img/daftar.png') }}"
                            class="w-40 h-40 object-cover rounded-lg shadow-md ml-36" alt="Isi Data">
                    </div>
                </div>

                <!-- Langkah 4 -->
                <div class="flex flex-col md:flex-row items-start bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 bg-sky-700 text-white p-4 md:p-6 flex items-center justify-center">
                        <span class="text-2xl font-bold">4</span>
                    </div>
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-bold mb-2">Tunggu Notifikasi Pengumuman</h3>
                        <p class="text-gray-600 mb-4">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="w-full md:w-1/3 p-6">
                        <img src="{{ asset('assets/img/notification.png') }}"
                            class="w-40 h-40 object-cover rounded-lg shadow-md ml-28" alt="Notifikasi">
                    </div>
                </div>

                <!-- Langkah 5 -->
                <div class="flex flex-col md:flex-row items-start bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 bg-sky-700 text-white p-4 md:p-6 flex items-center justify-center">
                        <span class="text-2xl font-bold">5</span>
                    </div>
                    <div class="p-6 flex-grow">
                        <h3 class="text-xl font-bold mb-2">Selesai</h3>
                        <p class="text-gray-600 mb-4">Congratulations! You've successfully completed all steps. We wish
                            you the best of luck with your scholarship application.</p>
                    </div>
                    <div class="w-full md:w-1/3 p-6">
                        <img src="{{ asset('assets/img/sukses.png') }}"
                            class="w-40 h-40 object-cover rounded-lg shadow-md ml-20" alt="Selesai">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1f2937" fill-opacity="1"
            d="M0,32L26.7,53.3C53.3,75,107,117,160,112C213.3,107,267,53,320,69.3C373.3,85,427,171,480,181.3C533.3,192,587,128,640,112C693.3,96,747,128,800,138.7C853.3,149,907,139,960,117.3C1013.3,96,1067,64,1120,85.3C1173.3,107,1227,181,1280,218.7C1333.3,256,1387,256,1413,256L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
@endsection
