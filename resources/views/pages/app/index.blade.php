<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholar Verse</title>
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
                <img src="{{ asset('assets/img/img-1.png') }}" alt="Image 1" class="w-60 h-60 object-cover drop-shadow-lghj">
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
    <section class="mb-4 py-20">
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
    <section class="bg-sky-50 -mb-60 py-60 px-10">
        <div class="px-24">
            <h1 class="text-2xl font-bold text-center -mt-36">Tutorial Daftar Beasiswa di Scholar Verse</h1>

            <!-- Bagian Pertama -->
            <div class="relative flex items-start mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span
                        class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center shadow-lg">1.</span>
                    <!-- Garis vertikal -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 top-full h-[calc(100%+12rem)] flex flex-col items-center justify-between">
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
                        <h3 class="text-2xl font-bold mt-8">Registrasi & Login</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Exercitationem consequatur a veniam.</h3>
                        <a href="#"
                            class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85"
                            type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}"
                            class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>

            <!-- Bagian Kedua -->
            <div class="relative flex items-start mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span
                        class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center shadow-lg">2.</span>
                    <!-- Garis vertikal -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 top-full h-[calc(100%+12rem)] flex flex-col items-center justify-between">
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
                        <h3 class="text-2xl font-bold mt-8">Cari & Pilih Program Beasiswa</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Exercitationem consequatur a veniam.</h3>
                        <a href="#"
                            class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85"
                            type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}"
                            class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>
            <div class="relative flex items-start mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span
                        class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center shadow-lg">3.</span>
                    <!-- Garis vertikal -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 top-full h-[calc(100%+12rem)] flex flex-col items-center justify-between">
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
                        <h3 class="text-2xl font-bold mt-8">Daftarkan Data Diri Kamu</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Exercitationem consequatur a veniam.</h3>
                        <a href="#"
                            class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85"
                            type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}"
                            class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>
            <div class="relative flex items-start mt-10 px-28">
                <div class="relative mr-6 my-auto">
                    <span
                        class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center shadow-lg">4.</span>
                    <!-- Garis vertikal -->
                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 top-full h-[calc(100%+12rem)] flex flex-col items-center justify-between">
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
                        <h3 class="text-2xl font-bold mt-8">Tunggu Notifikasi Pengumuman</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Exercitationem consequatur a veniam.</h3>
                        <a href="#"
                            class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85"
                            type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}"
                            class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>

            <!-- Bagian Ketiga -->
            <div class="relative flex items-start justify-center mt-10 px-28 mb-20">
                <div class="relative mr-6 my-auto">
                    <span
                        class="text-lg text-sky-700 font-bold bg-white p-3 rounded-full w-12 h-12 flex items-center justify-center shadow-lg">5.</span>
                </div>
                <div class="flex-grow bg-white rounded-lg shadow-lg flex justify-between px-8">
                    <div class="flex flex-col max-w-96">
                        <h3 class="text-2xl font-bold mt-8">Selesai</h3>
                        <h3 class="text-lg font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Exercitationem consequatur a veniam.</h3>
                        <a href="#"
                            class="bg-orange-400 text-center text-white py-2 mr-60 mt-4 text-base font-bold rounded-lg shadow-md hover:opacity-85"
                            type="button">Daftar</a>
                    </div>
                    <div class="py-10">
                        <img src="{{ asset('assets/img/promo-1.png') }}"
                            class="h-40 w-40 object-cover shadow-lg rounded-lg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#1f2937" fill-opacity="1" d="M0,32L26.7,53.3C53.3,75,107,117,160,112C213.3,107,267,53,320,69.3C373.3,85,427,171,480,181.3C533.3,192,587,128,640,112C693.3,96,747,128,800,138.7C853.3,149,907,139,960,117.3C1013.3,96,1067,64,1120,85.3C1173.3,107,1227,181,1280,218.7C1333.3,256,1387,256,1413,256L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
      </svg>
      <footer class="bg-gray-800 text-white py-16">
        <div class="container mx-auto px-24">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <!-- Scholar Verse Logo & Description -->
                <div>
                    <h2 class="font-bold text-lg mb-4">Scholar Verse</h2>
                    <p class="text-gray-400">Platform untuk menemukan informasi beasiswa dan program akademik di universitas terbaik di seluruh dunia.</p>
                </div>
                
                <!-- Navigation Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Program Kami</h3>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Beasiswa Dalam Negeri</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Beasiswa Luar Negeri</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Program Magang</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Bimbingan Belajar</a></li>
                    </ul>
                </div>
                
                <!-- Support Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Bantuan</h3>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Kontak Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Panduan</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                
                <!-- Contact Information -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Hubungi Kami</h3>
                    <p class="text-gray-400">Email: support@scholarverse.com</p>
                    <p class="text-gray-400">Telepon: +62 812 3456 7890</p>
                    <div class="mt-6 flex gap-4">
                        <a href="#" class="text-gray-400 hover:text-white"><span class="material-icons">facebook</span></a>
                        <a href="#" class="text-gray-400 hover:text-white"><span class="material-icons">twitter</span></a>
                        <a href="#" class="text-gray-400 hover:text-white"><span class="material-icons">instagram</span></a>
                        <a href="#" class="text-gray-400 hover:text-white"><span class="material-icons">linkedin</span></a>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center border-t border-gray-700 pt-6">
                <p class="text-gray-500">© 2024 Scholar Verse. All rights reserved.</p>
            </div>
        </div>
    </footer>    
</body>

</html>
