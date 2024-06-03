<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative md:flex justify-center items-center hidden">
    <img src="{{ asset('assets/images/penduduk-cover.webp') }}" alt="" class="w-full dark:brightness-[85%] hidden lg:block">
    <div
        class="bg-white/[0.73] dark:bg-[#24292d]/[0.73] w-[571px] h-[185px] z-1 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px] dark:text-white">Daftar Penduduk RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center dark:text-white">Tingkatkan Persaudaraan di Lingkungan
            Warga</p>
    </div>
</div>

<div
    class=" lg:hidden sm:sticky sm:top-0 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="lg:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Daftar Penduduk RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-sm sm:text-lg text-left">Tingkatkan Persaudaraan di Lingkungan
                Warga</p>
        </div>

        <div class="flex gap-6">
            <div class="sm:basis-1/5 basis-1/4" x-data="{ editModal: false }" @keydown.escape="editModal = false">
                <button @click="editModal = true"
                    :class="{
                        'bg-yellow-500  text-white': {{ request('rt') ? 'true' : 'false' }},
                        'bg-gray-100 text-[#2d5523] dark:bg-[#1f2429] dark:text-gray-300': {{ request('rt') ? 'false' : 'true' }}
                    }"
                    class="border-gray-400 border px-9 text-center py-3 rounded-full">
                    <i class="fa-solid fa-sliders sm:text-3xl text-xl"></i>
                </button>

                <!-- Modal Overlay -->
                <div x-show="editModal" x-cloak class="fixed inset-0 z-99 flex items-end justify-center">
                    <div class="fixed inset-0" @click="editModal = false"></div>

                    <!-- Modal Content -->
                    <div x-show="editModal" x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="-translate-x-full opacity-0"
                        x-transition:enter-end="translate-x-0 opacity-100"
                        x-transition:leave="transition ease-in duration-300 transform"
                        x-transition:leave-start="translate-x-0 opacity-100"
                        x-transition:leave-end="-translate-x-full opacity-0"
                        class="bg-[#f3f3f3] dark:bg-[#30373F] rounded-r-lg shadow-lg h-fit max-w-screen-sm fixed left-0 sm:top-[282px] top-[257px] z-999999 p-6">
                        <!-- Modal header -->
                        <div class="w-fit flex flex-col">
                            <div class="w-fit">
                                <a href="{{ route('penduduk') }}"
                                    class="{{ request('rt') == '' ? 'font-bold bg-yellow-500 text-white' : '' }} block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Semua
                                    RT</a>
                            </div>
                            @foreach ($rts as $rt)
                                <div class="w-fit">
                                    <a href="{{ route('penduduk-rt', $rt) }}"
                                        class="{{ request('rt') == $rt ? 'font-bold bg-yellow-500 text-white' : '' }} block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">RT
                                        {{ $rt }}</a>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:basis-4/5 basis-3/4">
                <form action="{{ route('penduduk-search') }}" method="GET" class="w-full mx-auto lg:shadow-2xl">
                    <label for="default-search"
                        class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
                    <div class="relative h-full">
                        <div
                            class="absolute inset-y-0 ps-6 text-lg flex justify-center  text-[#2d5523]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="default-search" name="search"
                            class=" bg-gray-100 dark:bg-[#1f2429] border-gray-400 border block w-full  ps-13 text-[#2d5523] text-base rounded-full h-full focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#2d5523] dark:focus:border-yellow-500 sm:placeholder:text-lg placeholder:text-base "
                            placeholder="Cari Penduduk" required />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class=" min-h-[100vh] mx-auto py-[34px] w-[90%]">
    <div class="hidden lg:flex lg:flex-row flex-col-reverse static justify-between  w-full pb-10">
        <form action="{{ route('penduduk-search') }}" class="w-fit h-full flex items-center justify-center mb-0">
            <div
                class="flex shadow-md rounded-xl w-full bg-white dark:bg-[#30373F] border-2 border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
                <div class="flex w-full">
                    <div class="w-fit px-4">
                        <label for="search"
                            class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 text-[#58a444] dark:text-white h-4 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" name="search" id="search"
                                class="block w-full p-2 ps-10 text-sm dark:bg-[#30373F] text-gray-900 rounded-lg focus:outline-none dark:border-gray-600 placeholder:text-[#58a444] dark:placeholder-white dark:text-white"
                                rounded-lg" placeholder="Cari Penduduk" />
                        </div>
                    </div>
                    <div class="border-x-2 border-gray-400 dark:border-white px-4 w-fit">
                        <div class="relative">
                            <select name="filterRT" id="filterRT" onchange="window.location.href = this.value"
                                class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option value="{{ route('penduduk') }}" {{ request('rt') == '' ? 'selected' : '' }}>
                                    Pilih RT</option>
                                @foreach ($rts as $rt)
                                <option value="{{ route('penduduk-rt', $rt) }}"
                                    {{ request('rt') == $rt ? 'selected' : '' }}>{{ $rt }}</option>
                                @endforeach

                            </select>
                            <i
                                class="fa-solid fa-regular fa-star absolute left-2 -top-1 pt-4  text-sm text-[#58a444] dark:text-white"></i>
                            <i
                                class="fa-solid fa-angle-down text-[#58a444] dark:text-white absolute right-2 top-0 pt-4  text-sm"></i>
                        </div>
                    </div>
                </div>
                <div class="w-fit flex justify-end items-center px-4">
                    <button type="submit">
                        <i class="fa-solid fa-circle-chevron-right text-3xl text-yellow-500"></i>
                    </button>
                </div>
            </div>
        </form>
       
    </div>
    <div class="relative pt-40 sm:pt-0 overflow-x-auto rounded-lg shadow-xl dark:shadow-gray-900">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400 ">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 lg:w-[20%] sm:w-[20%] w-[23%] py-3 hidden sm:table-cell">
                        NIK
                    </th>
                    <th scope="col" class="px-6 lg:w-[20%] sm:w-[20%] w-[23%] py-3 ">
                        Nama
                    </th>
                    <th scope="col" class="px-6 !lg:w-[30%] sm:w-[25%] w-[23%] py-3 hidden lg:table-cell  ">
                        Status Penduduk
                    </th>
                    <th scope="col" class="px-6 lg:w-[10%] sm:w-[10%] w-[8%] py-3">
                        RT
                    </th>
                    <th scope="col" class="px-6 lg:w-[20%] sm:w-[50%] w-[23%] py-3">
                        Alamat
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduks as $warga)
                    <tr
                        class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E]  dark:border-gray-700 font-medium md:text-base text-sm text-center text-[#2d5523]  dark:text-white">
                        <td scope="row" class="px-6 py-4  hidden md:inline-flex">
                            {{ $warga->nik }}
                        </td>
                        <td scope="row" class="px-6 py-4 ">
                            {{ $warga->nama }}
                        </td>
                        <td scope="row" class="px-6 py-4  hidden lg:inline-flex">
                            {{ $warga->statusPenduduk }}
                        </td>
                        <td scope="row" class="px-6 py-4 ">
                            {{ $warga->rt }}
                        </td>
                        <td scope="row" class="px-6 py-4 ">
                            {{ $warga->alamat }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        @if ($penduduks->total() == 0)
            <div
                class="flex flex-col w-full h-fit py-8 justify-center items-center gap-4  dark:bg-[#343b44] shadow-sm border-b-2 dark:border-gray-600">
                <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                <img src="{{ asset('assets/images/no-data.png') }}" alt=""
                    class="w-[500px] h-[300px] object-cover">
                <p class="text-2xl font-semibold text-green-900 dark:text-white">Data Tidak Ditemukan</p>
            </div>
        @endif
        <div class="px-8 py-5 dark:bg-[#4f5966]  rounded-b-lg">
            {{ $penduduks->links() }}
        </div>
    </div>

</div>

<x-footer>

</x-footer>
