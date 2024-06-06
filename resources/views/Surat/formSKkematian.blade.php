<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative lg:flex hidden justify-center items-center">
    <img src="{{ asset('assets/images/surat-cover.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] dark:bg-[#24292d]/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Ajuan Surat di RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Mudahkan Akses Surat di Lingkungan RW</p>
    </div>
</div>
<div
    class=" lg:hidden sm:sticky sm:top-0 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="lg:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Ajuan Surat di RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans sm:text-lg text-sm text-left">Mudahkan Akses Surat di Lingkungan RW</p>
            <p class="text-[#468337] dark:text-gray-400 font-sans sm:text-lg text-sm text-left">Pilih Jenis Surat</p>
        </div>
       <div class="w-full overflow-x-auto">

           <div class=" flex min-w-[670px] h-fit gap-3  items-center ">
               <div onclick="location.href='{{ route('sk') }}'"
                   class=" py-1 px-4 border-2 border-[#2d5523] text-sm sm:text-lg font-semibold dark:border-yellow-500 rounded-2xl   dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all{{ $subMenu == 'SK' ? 'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] ' }}">
                   Keterangan
               </div>
               <div onclick="location.href='{{ route('sk-pindah') }}'"
                   class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl   dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all text-sm sm:text-lg font-semibold {{ $subMenu == 'SKP' ? 'dark:bg-yellow-500 bg-yellow-500 text-white' : 'text-[#2d5523] bg-white' }}  pl-3 items-center  w-fit p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                           Keterangan Pindah
               </div>
           
           
               <div onclick="location.href='{{ route('sk-kematian') }}'"
                   class="h-fit py-1 px-4 border-2 text-sm sm:text-lg font-semibold border-[#2d5523] dark:border-yellow-500 rounded-2xl   dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ $subMenu == 'SKK' ? 'dark:bg-yellow-500 bg-yellow-500 text-white' : 'text-[#2d5523] bg-white' }}  pl-3 items-center  w-fit p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                   Keterangan Kematian
               </div>
           </div>
       </div>
    </div>
</div>
<div class="mx-auto py-[34px]  w-[90%]">
    <div class="hidden lg:flex border-b-[1.9px] h-[57px] w-[24%] border-[#2d5523] dark:border-white">
        <p class="text-[#2d5523] dark:text-white font-bold text-[19px] w-full flex  items-center">
            Jenis Surat
        </p>
    </div>
    <div class="flex flex-row gap-14  h-fit lg:mt-9 mt-44 sm:mt-0">
        <div class="lg:basis-1/4 hidden lg:block items-center flex-col ">

            <div class=" p-2 border-2 rounded-sm">
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk') }}'"
                        class=" {{ $subMenu == 'SK' ? 'dark:bg-yellow-500 bg-yellow-500 text-white  ' : 'text-[#2d5523] bg-white' }} inline-flex pl-3 items-center justify-between w-full p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-[#E2A229] dark:hover:bg-[#E2A229] dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk-pindah') }}'"
                        class="{{ $subMenu == 'SKP' ? 'dark:bg-yellow-500 bg-yellow-500 text-white  ' : 'text-[#2d5523] bg-white' }} inline-flex pl-3 items-center justify-between w-full p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-[#E2A229] dark:hover:bg-[#E2A229] dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan Pindah
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk-kematian') }}'"
                        class="{{ $subMenu == 'SKK' ? 'dark:bg-yellow-500 bg-yellow-500 text-white  ' : 'text-[#2d5523] bg-white' }} inline-flex pl-3 items-center justify-between w-full p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan Kematian
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:basis-3/4 w-full h-full">
            <div class=" gap-11  w-full h-full border-2 dark:border-gray-500 rounded-xl">
                <div class="sm:text-2xl text-[18px] sm:px-8 py-5 sm:pb-0  font-bold dark:text-white sm:w-[100%] w-[90%]  mx-auto">
                    Formulir Surat Keterangan Kematian
                    <p class="text-[#2d5523] sm:text-lg text-base  sm:pt-4 pt-2 font-medium dark:text-white ">Masukkan identitas orang yang meninggal</p>
                </div>
                <form action="{{ route('storeSkKematian') }}" method="post" class="gap-4 flex flex-col h-fit sm:p-8 sm:w-[100%] w-[90%] mx-auto">
                    @csrf
                    {{-- NIK --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="nik"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">NIK</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nik" name="nik"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan NIK Almarhum">
                        </div>
                    </div>
                    {{-- Pelapor --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="nama_pelapor"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">nama
                                Pelapor</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input type="hidden" name="nik_pelapor" value="{{ Auth::user()->penduduk->id_penduduk }}">
                            <input id="nama_pelapor" name="nama_pelapor" value="{{ Auth::user()->penduduk->nama }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Hubungan Pelapor --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="hubungan_pelapor"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Hubungan
                                Pelapor</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="hubungan_pelapor" name="hubungan_pelapor"
                                placeholder="Masukkan Hubungan Pelapor dengan yang Meninggal"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Penyebab Kematian --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="penyebab_wafat"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Penyebab
                                Kematian</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="penyebab_kematian" name="penyebab_kematian"
                                placeholder="Masukkan Penyebab Kematian"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Tempat Meninggal --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="tempat_meninggal"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Tempat
                                Meninggal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="tempat_meninggal" name="tempat_meninggal" placeholder="Masukkan Tempat Meninggal"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    {{-- Tanggal dan Waktu Meninggal --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="tanggal_wafat"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Tanggal
                                dan Waktu Meninggal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="tanggal_wafat" name="tanggal_wafat" type="datetime-local"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="flex w-full justify-end items-center sm:ps-8 pt-7">
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
