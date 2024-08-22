<header>
    <nav class="bg-white p-6 shadow-lg flex justify-between items-center px-24 flex-col-mobile">
        <div class="flex items-center gap-10 flex-col-mobile w-full-mobile text-center-mobile">
            <a class="font-bold text-2xl text-blue-500" href="{{ route('home') }}">Scholar Verse</a>
            <div class="flex gap-3 text-base font-semibold flex-col-mobile mt-4-mobile">
                <x-active-link route="program-kami">Program Kami</x-active-link>
                <x-active-link route="kalender-beasiswa">Kalender Beasiswa</x-active-link>
                <x-active-link route="bimbingan-belajar">Bimbingan Belajar</x-active-link>
            </div>
        </div>
        <div class="flex items-center gap-10 mt-4-mobile">
            <a href="#" type="button"
                class="bg-blue-500 text-white px-4 py-1 rounded-lg shadow-lg hover:bg-blue-600">Login</a>
            <div class="p-6 rounded-full shadow-md bg-gray-200 hidden-mobile"></div>
        </div>
    </nav>
</header>
