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
<div class="bg-[#Fff]  mx-auto py-[34px]  w-[90%]">
    <div class="flex border-b-[1.9px] h-[57px] w-[24%] border-[#2d5523]">
        <p class="text-[#2d5523] font-bold text-[19px] w-full flex  items-center">
            Jenis Surat
        </p>
    </div>
    <div class="flex flex-row gap-14 mt-9 h-fit">
        <div class="basis-1/4 items-center flex-col ">

            <div class=" p-2 border-2 rounded-sm">
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk') }}'"
                        class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523] bg-white border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk-pindah') }}'"
                        class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523] bg-white border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan Pindah
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk-kematian') }}'"
                        class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523] bg-white border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan Kematian
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="basis-3/4 w-full h-full">
            <div class=" gap-11  w-full h-full">
                <div class="text-[#2d5523] text-2xl pb-2 font-bold">
                    Formulir Surat Keterangan Kematian
                </div>
                <div class="text-[#2d5523] text-lg pb-10 font-medium">
                    Masukkan identitas orang yang meninggal
                </div>
                <form action="{{ route('storeSkKematian') }}" method="post" class="gap-4 flex flex-col h-fit">
                    @csrf
                    {{-- NIK --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8 flex my-auto items-center">
                            <label for="nik"
                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">NIK</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nik" name="nik" value="{{ Auth::user()->penduduk->nik }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pr-10 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(NIK)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Nomor KK --}}
                    <div class="gap-2 flex w-full h-fit mt-4">
                        <div class="basis-1/4 h-full ps-8 flex my-auto items-center">
                            <label for="nomor_kk"
                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                KK</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nomor_kk" name="nomor_kk"
                                value="{{ Auth::user()->penduduk->kartuKeluarga->niKeluarga }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 pr-10 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(No.KK)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Pelapor --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="nama_pelapor"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">nama
                                Pelapor</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan Nama Pelapor Kematian"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Hubungan Pelapor --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="hubungan_pelapor"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Hubungan
                                Pelapor</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="hubungan_pelapor" name="hubungan_pelapor"
                                placeholder="Masukkan Hubungan Pelapor dengan yang Meninggal"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Penyebab Kematian --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="penyebab_kematian"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Penyebab
                                Kematian</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="penyebab_kematian" name="penyebab_kematian"
                                placeholder="Masukkan Penyebab Kematian"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Tempat Meninggal --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="tempat_meninggal"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Tempat
                                Meninggal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="tempat_meninggal" name="tempat_meninggal" placeholder="Masukkan Tempat Meninggal"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Tanggal dan Waktu Meninggal --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="tanggal_wafat"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Tanggal
                                dan Waktu Meninggal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="tanggal_wafat" name="tanggal_wafat" type="datetime-local"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-[46%] p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="flex w-full justify-end items-center ps-8 pt-7">
                        <button type="submit"
                            class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<x-footer>

</x-footer>
