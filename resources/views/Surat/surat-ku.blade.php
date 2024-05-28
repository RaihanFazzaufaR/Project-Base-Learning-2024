<x-header menu='{{ $menu }}'>
</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/surat-cover.jpg') }}" alt="" class="w-full ]">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">Ajuan Surat di RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">Mudahkan Akses Surat di Lingkungan RW</p>
    </div>
</div>

<div class="bg-[#Fff] min-h-[100vh] px-[65px] py-5 w-[100%] mt-10">
    {{-- search --}}
    <div class="flex gap-7 justify-between pb-10 w-full ">
        <form action="{{ route('penduduk-search') }}" method="GET" class="w-96 my-auto ">
            <label for="default-search"
                class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
            <div class="relative  h-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-[#2d5523] dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="search"
                    class="block w-full p-4 ps-10 border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                    placeholder="Cari" required />
            </div>
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-gray-700 dark:text-gray-400">
                <tr>
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
                @foreach ($permintaanSurat as $surat)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            {{ $surat->nama }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            {{ $surat->jenisSurat }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            {{ $surat->minta_tanggal }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            @if ($surat->status === 'selesai')
                                <a href=""
                                    class="w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-envelope"></i>
                                    Lihat Surat
                                </a>
                            @elseif ($surat->status === 'ditolak')
                                <button
                                    class="w-fit text-white bg-red-500 rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-red-700 hover:scale-105 transition-all">
                                    Ditolak
                                </button>
                            @elseif ($surat->status === 'diproses' || $surat->status === 'menunggu')
                                <button
                                    class="w-fit text-white bg-yellow-500 rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-yellow-700 hover:scale-105 transition-all">
                                    Diproses
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-8 py-5">
            {{ $permintaanSurat->links() }}
        </div>
    </div>
</div>

<x-footer>
</x-footer>
