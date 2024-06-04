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
<div
    class=" lg:hidden sm:sticky sm:top-0 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="lg:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Ajuan Surat di RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-sm text-left">Mudahkan Akses Surat di Lingkungan RW</p>
            <p class="text-[#468337] dark:text-gray-400 font-sans text-sm text-left">Pilih Jenis Surat</p>
        </div>
       <div class="w-full overflow-x-auto">

           <div class=" flex min-w-[670px] h-fit gap-3  items-center ">
               <div onclick="location.href='{{ route('sk') }}'"
                   class=" py-1 px-4 border-2 border-[#2d5523] text-sm sm:text-lg font-semibold dark:border-yellow-500 rounded-2xl   dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all{{ $subMenu == 'SK' ? 'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">
                   Keterangan
               </div>
               <div onclick="location.href='{{ route('sk-pindah') }}'"
                   class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl   dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all text-sm sm:text-lg font-semibold {{ $subMenu == 'SKP' ? 'dark:bg-yellow-500 bg-yellow-500 text-white' : 'text-[#2d5523] bg-white' }}  pl-3 items-center  w-fit p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                           Keterangan Pindah
               </div>
           
           
               <div onclick="location.href='{{ route('sk-kematian') }}'"
                   class="h-fit py-1 px-4 border-2 text-sm sm:text-lg font-semibold border-[#2d5523] dark:border-yellow-500 rounded-2xl   dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all{{ $subMenu == 'SKK' ? 'dark:bg-yellow-500 bg-yellow-500 text-white' : 'text-[#2d5523] bg-white' }}  pl-3 items-center  w-fit p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
                   Keterangan Kematian
               </div>
           </div>
       </div>
    </div>
</div>
<div class="h-fit mx-auto pt-[34px] w-[90%]">
    <div class="lg:flex hidden border-b-[1.9px] h-[57px] w-[24%] border-[#2d5523] dark:border-white">
        <p class="text-[#2d5523] dark:text-white font-bold text-[19px] w-full flex  items-center">
            Jenis Surat
        </p>
    </div>
    <div class="flex flex-row gap-14 lg:mt-9 mt-44 sm:mt-0">
        <div class="lg:basis-1/4 hidden lg:block items-center flex-col ">

            <div class=" p-2 border-2 rounded-sm">
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk') }}'"
                        class=" {{ $subMenu == 'SK' ? 'dark:bg-yellow-500 bg-yellow-500 text-white  ' : 'text-[#2d5523] bg-white' }} inline-flex pl-3 items-center justify-between w-full p-1.5  border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white ">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li onclick="location.href='{{ route('sk-pindah') }}'"
                        class="{{ $subMenu == 'SKP' ? 'dark:bg-yellow-500 bg-yellow-500 text-white  ' : 'text-[#2d5523] bg-white' }} inline-flex pl-3 items-center justify-between w-full p-1.5 border border-gray-200 cursor-pointer  dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:hover:bg-yellow-500 dark:text-white  dark:bg-[#30373F] dark:hover:text-white">
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
                <div class="text-[#2d5523] sm:text-2xl text-xl sm:px-8 py-5 sm:pb-0  font-bold dark:text-white sm:w-[100%] w-[90%]  mx-auto" >
                    Formulir Surat Keterangan
                </div>
                <form action="{{ route('storeSk') }}" method="post" class="gap-4 flex flex-col h-fit sm:p-8 sm:w-[100%] w-[90%] mx-auto">
                    @csrf
                    {{-- Nama --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="nama"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Nama
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nama" name="nama" value="{{ Auth::user()->penduduk->nama }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Tempat, Tanggal Lahir --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="ttl"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Tempat,
                                Tanggal Lahir</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="ttl" name="ttl"
                                value="{{ Auth::user()->penduduk->tempatLahir }}, {{ Auth::user()->penduduk->tanggalLahir }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Jenis Kelamin --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="jk"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Jenis
                                Kelamin</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="jk" name="jk"
                                value="{{ Auth::user()->penduduk->jenisKelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Agama --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="agama"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Agama</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="agama" name="agama" value="{{ Auth::user()->penduduk->agama }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Pekerjaan --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="Pekerjaan"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Pekerjaan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="Pekerjaan" name="Pekerjaan" value="{{ Auth::user()->penduduk->pekerjaan }}"
                                readonly 
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- NIK --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="noKTP"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">No.KTP</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="noKTP" name="noKTP" value="{{ Auth::user()->penduduk->nik }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Alamat --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex ">
                            <label for="alamat"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Alamat</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <textarea id="alamat" name="alamat" cols="19" rows="3"
                                value="  " readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ Auth::user()->penduduk->kartuKeluarga->alamat }}</textarea>
                        </div>
                    </div>
                    {{-- Keperluan --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fitt">
                        <div class="basis-1/4 h-full sm:ps-8  flex ">
                            <label for="keperluan"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Keperluan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <textarea id="keperluan" name="keperluan" cols="19" rows="3" placeholder="Masukkan Keperluan"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    <div class="flex w-full justify-end items-center  pt-7">
                        <button type="submit"
                            class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3 dark:hover:bg-[#4ea840] dark:bg-[#57ba47]">
                            Simpan
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<x-footer>

</x-footer>
