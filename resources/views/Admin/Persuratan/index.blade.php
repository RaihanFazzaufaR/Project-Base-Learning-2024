<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-full sm:w-fit gap-8 items-center justify-between">
            <form class="lg:w-[22vw] w-[100%] sm:w-[300px]" action="{{ route('daftar-penduduk') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search"
                            class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 dark:border-[#57BA47] dark:bg-[#2F363E] dark:text-white rounded-xl border border-[#34662C] focus:outline-none focus:sm:border-[3px] focus:border-[2px]"
                            placeholder="Cari ..." />
                        <button type="submit"
                            class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-xl sm:text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="sm:h-full sm:w-fit sm:py-2 absolute sm:static" x-data="{ 'filterModal': false }"
                @keydown.escape="filterModal = false">
                <button @click="filterModal = true"
                    class="fixed sm:static flex bottom-5 animate-bounce sm:animate-none z-99 right-5 w-10 h-10 sm:w-29 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders sm:text-2xl text-xl"></i>
                    <div class="text-xl font-semibold hidden sm:block">Filter</div>
                </button>
                <x-admin.kependudukan.modal-filter-penduduk />
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-sm rounded-lg">
            <table class="w-[650px] sm:w-full text-center table-fixed relative">
                <thead
                    class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py- w-[20%]">
                            Pemohon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Surat
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3 w-[15%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach ($dataSurat as $surat)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $surat->peminta->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($surat->minta_tanggal)->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4">
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
                            <td class="px-6 py-4" x-data="{ 'selected': 'false' }">
                                <a href="#" @click.prevent="selected = (selected === 'true' ? '':'true')">
                                    {{ $surat->keperluan }}
                                    <span class="font-semibold"
                                        :class="(selected === 'true') ? 'hidden' : 'inline-block'">...</span>
                                    <span
                                        :class="(selected === 'true') ? 'inline-block' : 'hidden'">{{ $surat->keperluan }}</span>
                                </a>
                            </td>
                            <td>
                                <div class="px-6 py-4 flex items-center justify-center h-full">
                                    <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                        <button @click="detailModal = true"
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div class="hidden sm:inline-flex">Detail</div>
                                        </button>
                                        <!-- Detail modal -->
                                        @if ($surat->status === 'selesai')
                                            <!-- Display the surat file -->
                                            @switch($surat->template_id)
                                                @case(1)
                                                    <div x-show="detailModal"
                                                        x-transition:enter="md:transition-none transition ease-out duration-300 transform"
                                                        x-transition:enter-start="md:transition-none translate-y-full"
                                                        x-transition:enter-end="md:transition-none translate-y-0"
                                                        x-transition:leave="md:transition-none transition ease-in duration-300 transform"
                                                        x-transition:leave-start="md:transition-none translate-y-0"
                                                        x-transition:leave-end="md:transition-none translate-y-full"
                                                        tabindex="-1" aria-hidden="true"
                                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                        <div
                                                            class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block">
                                                        </div>
                                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]"
                                                            @click.away="detailModal = false"
                                                            x-transition:enter="motion-safe:ease-out duration-300"
                                                            x-transition:enter-start="opacity-0 scale-90"
                                                            x-transition:enter-end="opacity-100 scale-100">
                                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                                <div
                                                                    class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                    <h3
                                                                        class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                        Detail Surat Keterangan
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        @click="detailModal = false">
                                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                                    <div
                                                                        class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                                                        <div class="col-span-2 relative sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">NIK</label>
                                                                            <input name="nik" value="{{ $surat->nik }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Nama</label>
                                                                            <input name="nama" id="nama"
                                                                                value="{{ $surat->nama }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Jenis
                                                                                Kelamin</label>
                                                                            <input name="jenisKelamin" id="jenisKelamin"
                                                                                value="@if ($surat->jenisKelamin == 'L') Laki-laki @elseif($surat->jenisKelamin == 'P') Perempuan @endif"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Tempat,
                                                                                Tanggal Lahir</label>
                                                                            <input name="ttl" id="ttl"
                                                                                value="{{ $surat->tempatLahir . ', ' . \Carbon\Carbon::parse($surat->tanggalLahir)->format('d-m-Y') }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Agama</label>
                                                                            <input name="agama" id="agama"
                                                                                value="{{ $surat->agama }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Pekerjaan</label>
                                                                            <input name="pekerjaan" id="pekerjaan"
                                                                                value="{{ $surat->pekerjaan }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Alamat</label>
                                                                            <textarea name="alamat" rows="4" id="alamat"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->alamat }}</textarea>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Keperluan</label>
                                                                            <textarea name="keperluan" rows="4" id="keperluan"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->keperluan }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                                        <button @click="detailModal = false"
                                                                            class="hover:text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                            Keluar
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case(2)
                                                    <div x-show="detailModal"
                                                        x-transition:enter="md:transition-none transition ease-out duration-300 transform"
                                                        x-transition:enter-start="md:transition-none translate-y-full"
                                                        x-transition:enter-end="md:transition-none translate-y-0"
                                                        x-transition:leave="md:transition-none transition ease-in duration-300 transform"
                                                        x-transition:leave-start="md:transition-none translate-y-0"
                                                        x-transition:leave-end="md:transition-none translate-y-full"
                                                        tabindex="-1" aria-hidden="true"
                                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                        <div
                                                            class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block">
                                                        </div>
                                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]"
                                                            @click.away="detailModal = false"
                                                            x-transition:enter="motion-safe:ease-out duration-300"
                                                            x-transition:enter-start="opacity-0 scale-90"
                                                            x-transition:enter-end="opacity-100 scale-100">
                                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                                <div
                                                                    class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                    <h3
                                                                        class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                        Detail Surat Keterangan Pindah
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        @click="detailModal = false">
                                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                                    <div
                                                                        class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                                                        <div class="col-span-2 relative sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">NIK</label>
                                                                            <input name="nik"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->nik }}" readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Nama</label>
                                                                            <input name="nama" id="nama"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->nama }}" readonly>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label class="block mb-2 text-sm font-bold">Alasan
                                                                                Pindah</label>
                                                                            <textarea name="alasanPindah" rows="4" id="alasanPindah"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->alasan_pindah }}</textarea>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Jenis
                                                                                Kelamin</label>
                                                                            <input name="jenisKelamin" id="jenisKelamin"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="@if ($surat->jenisKelamin == 'L') Laki-laki @elseif($surat->jenisKelamin == 'P') Perempuan @endif"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Tempat,
                                                                                Tanggal Lahir</label>
                                                                            <input name="ttl" id="ttl"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->tempatLahir . ', ' . \Carbon\Carbon::parse($surat->tanggalLahir)->format('d-m-Y') }}"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Kewarganegaraan
                                                                                / Agama</label>
                                                                            <input name="kewarganaan&agama"
                                                                                id="kewarganaan&agama"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->warganegara }} / {{ $surat->agama }}"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Pekerjaan</label>
                                                                            <input name="pekerjaan" id="pekerjaan"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->pekerjaan }}" readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Status
                                                                                Pernikahan</label>
                                                                            <input name="statusPernikahan"
                                                                                id="statusPernikahan"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->statusNikah }} Menikah"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Jumlah
                                                                                Keluarga yang Pindah</label>
                                                                            <input name="jmlKeluarga" id="jmlKeluarga"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                value="{{ $surat->jumlah_keluarga_pindah }}"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Keluarga
                                                                                yang Pindah</label>
                                                                            <table class="w-full">
                                                                                <thead>
                                                                                    <tr class="bg-gray-200 dark:bg-gray-700">
                                                                                        <th class="py-2 px-3 border-[2px]">No
                                                                                        </th>
                                                                                        <th class="py-2 px-3 border-[2px]">NIK
                                                                                        </th>
                                                                                        <th class="py-2 px-3 border-[2px]">Nama
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>

                                                                                    @foreach ($surat->pindahPenduduk as $index => $dt)
                                                                                        <tr
                                                                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                                                            <td
                                                                                                class="py-2 text-center border-[2px] ">
                                                                                                {{ $index + 1 }}
                                                                                            </td>
                                                                                            <td
                                                                                                class="py-2 ps-3 border-[2px] ">
                                                                                                {{ $dt->penduduk->nik }}
                                                                                            </td>
                                                                                            <td
                                                                                                class="py-2 ps-3 border-[2px] ">
                                                                                                {{ $dt->penduduk->nama }}
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label class="block mb-2 text-sm font-bold">Alamat
                                                                                Asal</label>
                                                                            <textarea name="alamatAsal" rows="4" id="alamatAsal"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->alamat }}</textarea>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label class="block mb-2 text-sm font-bold">Alamat
                                                                                Pindah</label>
                                                                            <textarea name="alamatPindah" rows="4" id="alamatPindah"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->alamat_pindah }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                                        <button @click="detailModal = false"
                                                                            class="hover:text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                            Keluar
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case(3)
                                                    <div x-show="detailModal"
                                                        x-transition:enter="md:transition-none transition ease-out duration-300 transform"
                                                        x-transition:enter-start="md:transition-none translate-y-full"
                                                        x-transition:enter-end="md:transition-none translate-y-0"
                                                        x-transition:leave="md:transition-none transition ease-in duration-300 transform"
                                                        x-transition:leave-start="md:transition-none translate-y-0"
                                                        x-transition:leave-end="md:transition-none translate-y-full"
                                                        tabindex="-1" aria-hidden="true"
                                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                        <div
                                                            class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block">
                                                        </div>
                                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]"
                                                            @click.away="detailModal = false"
                                                            x-transition:enter="motion-safe:ease-out duration-300"
                                                            x-transition:enter-start="opacity-0 scale-90"
                                                            x-transition:enter-end="opacity-100 scale-100">
                                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                                <div
                                                                    class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                    <h3
                                                                        class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                        Detail Surat Keterangan Kematian
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        @click="detailModal = false">
                                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                                    <div
                                                                        class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                                                        <div class="col-span-2 relative sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">NIK</label>
                                                                            <input name="nik" value="{{ $surat->nik }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 relative sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">No
                                                                                KK</label>
                                                                            <input name="nkk"
                                                                                value="{{ $surat->nikeluarga }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Nama</label>
                                                                            <input name="nama" id="nama"
                                                                                value="{{ $surat->nama }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 relative sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Usia</label>
                                                                            <input name="usia"
                                                                                value="{{ \Carbon\Carbon::parse($surat->tanggalLahir)->diffInYears(\Carbon\Carbon::now()) }} Tahun"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Jenis
                                                                                Kelamin</label>
                                                                            <input name="jenisKelamin" id="jenisKelamin"
                                                                                value="{{ $surat->jenisKelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Tempat,
                                                                                Tanggal Lahir</label>
                                                                            <input name="ttl" id="ttl"
                                                                                value="{{ $surat->tempatLahir . ', ' . \Carbon\Carbon::parse($surat->tanggalLahir)->format('d-m-Y') }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Kewarganegaraan
                                                                                / Agama</label>
                                                                            <input name="kewarganegaraan&agama"
                                                                                id="kewarganegaraan&agama"
                                                                                value="{{ $surat->warganegara . ' / ' . $surat->agama }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Pekerjaan</label>
                                                                            <input name="pekerjaan" id="pekerjaan"
                                                                                value="{{ $surat->pekerjaan }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Tanggal
                                                                                dan Waktu</label>
                                                                            <input name="tgl&waktu" id="tgl&waktu"
                                                                                value="{{ \Carbon\Carbon::parse($surat->tanggal_wafat)->format('d-m-Y H:i') }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Alamat</label>
                                                                            <textarea name="alamat" rows="4" id="alamat"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->alamat }}</textarea>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label class="block mb-2 text-sm font-bold">Nama
                                                                                Pelapor</label>
                                                                            <input name="namaPelapor" id="namaPelapor"
                                                                                value="{{ $surat->nama_pelapor }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2 sm:col-span-1">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Hubungan
                                                                                Pelapor</label>
                                                                            <input name="hubPelapor" id="hubPelapor"
                                                                                value="{{ $surat->hubungan_pelapor }}"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label
                                                                                class="block mb-2 text-sm font-bold">Penyebab
                                                                                Kematian</label>
                                                                            <textarea name="penyebab" rows="4" id="penyebab"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->penyebab_kematian }}</textarea>
                                                                        </div>
                                                                        <div class="col-span-2">
                                                                            <label class="block mb-2 text-sm font-bold">Tempat
                                                                                Meninggal</label>
                                                                            <textarea name="tempatMeninggal" rows="4" id="tempatMeninggal"
                                                                                class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                                readonly>{{ $surat->tempat_meninggal }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                                        <button @click="detailModal = false"
                                                                            class="hover:text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                            Keluar
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @default
                                                    <!-- Jika template_id tidak cocok dengan kasus yang telah ditentukan -->
                                            @endswitch
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{ $dataSurat->links() }}
        </div>
    </div>
</x-admin-layout>
