<x-header menu='{{ $menu }}'>
</x-header>

<div class="hidden lg:flex w-[100%] relative  justify-center items-center">
    <img src="{{ asset('assets/images/surat-cover.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] dark:bg-[#24292d]/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Ajuan Surat di RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Mudahkan Akses Surat di Lingkungan RW</p>
    </div>
</div>
<div class=" lg:hidden sm:sticky sm:top-0 top-21 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Ajuan Surat di RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-base sm:text-lg text-left">Mudahkan Akses Surat di Lingkungan RW</p>
        </div>

        <div class="flex gap-6">

            <div class="w-full">
                <form action="{{ route('surat.search') }}" method="GET" class="w-full mx-auto lg:shadow-2xl">
                    <label for="default-search" class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
                    <div class="relative h-full">
                        <div class="absolute inset-y-0 ps-6 sm:text-lg text-sm flex justify-center  text-[#2d5523]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="default-search" name="search" class=" bg-gray-100 dark:bg-[#1f2429] border-gray-400 border block w-full sm:py-3 py-1 ps-13 text-[#2d5523] text-base rounded-full h-full focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#2d5523] dark:focus:border-yellow-500 sm:placeholder:text-lg placeholder:text-sm pr-5" placeholder="Cari Surat" required />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="min-h-[100vh] mx-auto py-5 w-[90%] lg:mt-15 sm:mt-3 mt-45">
    {{-- search --}}
    <div class="w-[40%] h-fit hidden lg:flex justify-center items-center mb-10">
        <form action="{{ route('surat.search') }}" method="GET"
            class="w-full h-full flex items-center justify-center mb-0">
            <div
                class="flex shadow-md rounded-xl w-full bg-white dark:bg-[#30373F] border-2 border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
                <div class="flex w-full">
                    <div class="w-full px-4">
                        <label for="search"
                            class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 text-[#58a444] dark:text-white h-4 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" name="search" id="search"
                                class="block w-full p-2 ps-10 text-sm dark:bg-[#30373F] text-gray-900 rounded-lg focus:outline-none dark:border-gray-600 placeholder:text-[#58a444] dark:placeholder-white dark:text-white"
                                rounded-lg" placeholder="Cari Surat" />
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

    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="sm:w-full w-150 text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr >
                    <th scope="col" class="px-6 w-[25%] py-3">
                        Pembuat Surat
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3">
                        Jenis Surat
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3">
                        Tanggal Buat
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSurat as $surat)
                    <tr
                    class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700 ">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $surat->peminta->nama }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            @if ($surat->template_id == 1)
                                Surat Keterangan
                            @elseif($surat->template_id == 2)
                                Surat Keterangan Pindah
                            @elseif($surat->template_id == 3)
                                Surat Keterangan Kematian
                            @else
                                Jenis Surat Tidak Dikenal
                            @endif
                        </td>

                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $surat->minta_tanggal }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            @if ($surat->status === 'selesai')
                                <!-- Display the surat file -->
                                @switch($surat->template_id)
                                    @case(1)
                                        <a href="{{ route('showSk', ['pemintaId' => $surat->peminta_id, 'templateId' => 1]) }}"
                                            class="w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                            <i class="fa-regular fa-eye"></i>
                                            <span class="hidden sm:table-cell"> 

                                                Lihat Surat
                                            </span>
                                        </a>
                                    @break

                                    @case(2)
                                        <a href="{{ route('showSkPindah', ['pemintaId' => $surat->peminta_id, 'templateId' => 2]) }}"
                                            class="w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                            <i class="fa-regular fa-eye"></i>
                                            <span class="hidden sm:table-cell"> 

                                                Lihat Surat
                                            </span>
                                        </a>
                                    @break

                                    @case(3)
                                        <a href="{{ route('showSkKematian', ['pemintaId' => $surat->peminta_id, 'templateId' => 3]) }}"
                                            class="w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                            <i class="fa-regular fa-eye"></i>
                                            <span class="hidden sm:table-cell"> 

                                                Lihat Surat
                                            </span>
                                        </a>
                                    @break

                                    @default
                                        <!-- Jika template_id tidak cocok dengan kasus yang telah ditentukan -->
                                @endswitch

                                {{-- <a href=""
                                    class="w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-envelope"></i>
                                    Lihat Surat
                                </a> --}}
                                {{-- @elseif ($surat->status === 'ditolak')
                                    <button
                                        class="w-fit text-white bg-red-500 rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-red-700 hover:scale-105 transition-all">
                                        Ditolak
                                    </button>
                                @elseif ($surat->status === 'diproses' || $surat->status === 'menunggu')
                                    <button
                                        class="w-fit text-white bg-yellow-500 rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-yellow-700 hover:scale-105 transition-all">
                                        Diproses
                                    </button> --}}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($dataSurat->isEmpty())
        <div
            class="flex flex-col w-full h-fit py-8 justify-center items-center gap-4 shadow-sm my-auto  dark:border-gray-600">
            <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
            <img src="{{ asset('assets/images/no-data.png') }}" alt=""
                class="w-[500px] h-[300px] object-cover">
            <p class="text-2xl font-semibold text-green-900 dark:text-white">Data Tidak Ditemukan</p>
        </div>
    @endif
        <div class="px-8 py-5">
            {{ $dataSurat->links() }}
        </div>
    </div>
</div>

<x-footer>
</x-footer>
