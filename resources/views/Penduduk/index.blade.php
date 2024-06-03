<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative md:flex justify-center items-center hidden">
    <img src="{{ asset('assets/images/penduduk-cover.webp') }}" alt="" class="w-full dark:brightness-[85%]">
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
        <div class="sm:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Daftar Penduduk RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-sm text-left">Tingkatkan Persaudaraan di Lingkungan
                Warga</p>
        </div>

        <div class="flex gap-6">
            <div class="sm:basis-1/5 basis-1/4" x-data="{ editModal: false }" @keydown.escape="editModal = false">
                <button @click="editModal = true"
                    :class="{
                        'bg-yellow-500 dark:bg-[#505c6a] text-white': {{ request('rt') ? 'true' : 'false' }},
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
                        class="bg-[#f3f3f3] dark:bg-[#30373F] rounded-r-lg shadow-lg h-fit max-w-screen-sm fixed left-0 top-100 z-999999 p-6">
                        <!-- Modal header -->
                        <div class="w-fit flex flex-col">
                            <div class="w-fit">
                                <a href="{{ route('penduduk') }}"
                                    class="{{ request('rt') == '' ? 'font-bold' : '' }} block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Semua
                                    RT</a>
                            </div>
                            @foreach ($rts as $rt)
                                <div class="w-fit">
                                    <a href="{{ route('penduduk-rt', $rt) }}"
                                        class="{{ request('rt') == $rt ? 'font-bold' : '' }} block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">RT
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
                            class=" bg-gray-100 dark:bg-[#1f2429] border-gray-400 border block w-full  ps-13 text-[#2d5523] text-base rounded-full h-full focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#2d5523] dark:focus:border-yellow-500 sm:placeholder:text-lg placeholder:text-[17px]" 
                            placeholder="Cari Penduduk" required />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class=" min-h-[100vh] mx-auto py-[34px] w-[90%]">
    <div class="hidden lg:flex lg:flex-row flex-col-reverse static justify-between  w-full pb-10">
        <div class="gap-4 flex sm:w-fit w-full justify-end my-auto h-fit items-center pt-5 sm:pt-0">
            <div for="filterRT"
                class="text-base text-[#2d5523] font-semibold dark:text-white w-fit justify-center  sm:flex items-center">
                RT</div>
            <select id="filterRT" name="filterRT" onchange="window.location.href = this.value"
                class="w-fit sm:block h-fit py-3 text-center border-[3px] border-[#2d5523] text-[#2d5523] text-sm sm:text-base rounded-lg bg-gray-50 dark:bg-[#30373F] focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500 shadow-xl dark:shadow-gray-900">
                <option value="{{ route('penduduk') }}" {{ request('rt') == '' ? 'selected' : '' }}>Pilih RT
                </option>
                <option value="{{ route('penduduk-rt', '01') }}" {{ request('rt') == '01' ? 'selected' : '' }}>01
                </option>
                <option value="{{ route('penduduk-rt', '02') }}" {{ request('rt') == '02' ? 'selected' : '' }}>02
                </option>
                <option value="{{ route('penduduk-rt', '03') }}" {{ request('rt') == '03' ? 'selected' : '' }}>03
                </option>
                <option value="{{ route('penduduk-rt', '04') }}" {{ request('rt') == '04' ? 'selected' : '' }}>04
                </option>
                <option value="{{ route('penduduk-rt', '05') }}" {{ request('rt') == '05' ? 'selected' : '' }}>05
                </option>
            </select>
        </div>
        <form action="{{ route('penduduk-search') }}" method="GET" class="md:w-96 w-full my-auto ">
            <label for="default-search"
                class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
            <div class="relative mx-auto flex h-fit">
                <div
                    class="absolute md:inset-y-0 start-0 text-lg bottom-6  flex justify-center  text-[#58a444]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="search" id="default-search" name="search"
                    class=" block w-full p-4 h-fit ps-10  border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-[#fff] focus:ring-yellow-500 focus:border-yellow-500 dark:bg-[#30373F] dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#58a444] dark:focus:border-yellow-500 placeholder:text-base shadow-xl dark:shadow-gray-900"
                    placeholder="Cari Warga RW 03" required />
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
        <div class="px-8 py-5 dark:bg-[#4f5966] rounded-b-lg">
            {{ $penduduks->links() }}
        </div>
    </div>

</div>

<x-footer>

</x-footer>
