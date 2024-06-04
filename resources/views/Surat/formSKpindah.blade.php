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
<div class=" mx-auto py-[34px]  w-[90%]">
    <div class="lg:flex hidden  border-b-[1.9px] h-[57px] w-[24%] border-[#2d5523] dark:border-white">
        <p class="text-[#2d5523] dark:text-white font-bold text-[19px] w-full flex  items-center">
            Jenis Surat
        </p>
    </div>
    <div class="flex flex-row gap-14  h-fit lg:mt-9 mt-44 sm:mt-0">
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
                <div class="sm:text-2xl text-[18px] sm:px-8 py-5 sm:pb-0  font-bold dark:text-white sm:w-[100%] w-[90%]  mx-auto">
                    Formulir Surat Keterangan Pindah
                </div>
                <form action="{{ route('storeSkPindah') }}" method="post" class="gap-4 flex flex-col h-fit sm:p-8 sm:w-[100%] w-[90%] mx-auto">
                    @csrf
                    {{-- nama --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="nama"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Nama
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nama" name="nama" value="{{ Auth::user()->penduduk->nama }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <input type="hidden" id="id_penduduk" name="id_penduduk"
                                value="{{ Auth::user()->penduduk->id_penduduk }}">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                
                            </div>
                        </div>
                    </div>
                    {{-- nik --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="nik"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">NIK</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nik" name="nik" value="{{ Auth::user()->penduduk->nik }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Jenis Kelamin --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
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
                    {{-- Tempat, Tanggal Lahir --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
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
                    {{-- Warganegara / Agama --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="warganegara"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Warganegara
                                / Agama</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="warganegara" name="warganegara"
                                value="{{ Auth::user()->penduduk->warganegara }} / {{ Auth::user()->penduduk->agama }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Pekerjaan --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="pekerjaan"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Pekerjaan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="pekerjaan" name="pekerjaan" value="{{ Auth::user()->penduduk->pekerjaan }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Status Pernikahan --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="statuspernikahan"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Status
                                Pernikahan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="statuspernikahan" name="statuspernikahan"
                                value="{{ Auth::user()->penduduk->statusNikah . ' Menikah' }}" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Alamat Asal --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex my-auto items-center">
                            <label for="alamat-asal"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Alamat-asal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <textarea id="alamat-asal" name="alamat-asal"
                                value="" readonly
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">{{ Auth::user()->penduduk->kartukeluarga->alamat }}</textarea>
                        </div>
                    </div>
                    {{-- Alamat Pindah --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8 flex my-auto items-center">
                            <label for="alamat-pindah"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">
                                Alamat Pindah
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <textarea id="alamat-pindah" name="alamat-pindah" placeholder="Masukkan Alamat Pindah"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    {{-- RT RW --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8 flex my-auto items-center">
                            <label for="rt" class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">
                                RT
                            </label>
                        </div>
                        <div class="basis-1/4 h-full flex items-center">
                            <select name="rt" id="rt"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                                <option selected="">Pilih RT</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="basis-1/4 h-full sm:ps-8 flex my-auto items-center">
                            <label for="rw" class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">
                                RW
                            </label>
                        </div>
                        <div class="basis-1/4 h-full flex items-center">
                            <select name="rw" id="rw"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required>
                                <option selected="">Pilih RW</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                            </select>
                        </div>
                    </div>
                    {{-- Alasan Pindah --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8 flex my-auto items-center">
                            <label for="alasan-pindah"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">
                                Alasan Pindah
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <textarea id="alasan-pindah" name="alasan-pindah" placeholder="Masukkan Alasan Pindah"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    {{-- Keluarga yang pindah --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8 flex my-auto items-center">
                            <label for="keluarga-pindah"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Keluarga
                                yang pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="keluarga-pindah" name="keluarga-pindah" type="number" min="1"
                                value="0" readonly placeholder="Masukkan Jumlah Anggota Keluarga yang Pindah"
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>

                    {{-- Pengikut/Keluarga Yang Pindah --}}
                    <div class="gap-2 flex w-full flex-col sm:flex-row h-fit">
                        <div class="basis-1/4 h-full sm:ps-8  flex ">
                            <label for="pengikut"
                                class="sm:text-lg text-base sm:font-bold font-semibold items-center flex w-full  text-[#2d5523] dark:text-white">Pengikut / Keluarga Yang
                                Pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">

                            <div
                                class="bg-white border-2 border-[#2d5523] dark:bg-[#505c6a] sm:text-lg text-base sm:font-bold font-semibold dark:border-gray-500 dark:placeholder-gray-400 dark:text-white text-[#2d5523] shadow-md placeholder-[#34662C]/50  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full sm:p-2.5 p-1.5  dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <select class="hidden" x-cloak id="select" name="anggotaKeluarga[]" multiple>
                                    @foreach ($anggotaKeluarga as $dt)
                                        <option value="{{ $dt->id_penduduk }}">{{ $dt->nama }}</option>
                                    @endforeach
                                </select>

                                <div x-data="dropdown()" x-init="loadOptions()"
                                    class="flex flex-col items-center">
                                    <input name="values" type="hidden" :value="selectedValues()" />
                                    <div class="relative z-20 inline-block  w-full">
                                        <div class="relative flex flex-col items-center h-full">
                                            <div @click="open" class="w-full">
                                                <div
                                                    class=" flex rounded-lg border-2 border-[#2d5523] dark:border-gray-600 border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input">
                                                    <div class="flex flex-auto flex-wrap gap-3">
                                                        <template x-for="(option,index) in selected"
                                                            :key="index">
                                                            <div
                                                                class="my-1.5 flex items-center justify-center rounded-lg border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                <div class="max-w-full flex-initial"
                                                                    x-model="options[option]"
                                                                    x-text="options[option].text">
                                                                </div>
                                                                <div class="flex flex-auto flex-row-reverse">
                                                                    <div @click="remove(index,option)"
                                                                        class="cursor-pointer pl-2 hover:text-danger">
                                                                        <svg class="fill-current" role="button"
                                                                            width="12" height="12"
                                                                            viewBox="0 0 12 12" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z"
                                                                                fill="currentColor">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                        <div x-show="selected.length == 0" class="flex-1 ">
                                                            <input placeholder="Pilih Anggota Keluarga yang Pindah"
                                                                class=" placeholder-[#2d5523] dark:bg-[#505c6a] dark:placeholder-white w-full focus:outline-none appearance-none"
                                                                :value="selectedValues()" />
                                                        </div>
                                                    </div>
                                                    <div class="flex w-8 items-center py-1 pl-1 pr-1">
                                                        <button type="button" @click="open"
                                                            class="h-6 w-6 cursor-pointer outline-none focus:outline-none"
                                                            :class="isOpen() === true ? 'rotate-180' : ''">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g opacity="0.8">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                        fill="#24292d"></path>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full px-4">
                                                <div x-show.transition.origin.top="isOpen()"
                                                    class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white  dark:bg-[#505c6a] shadow dark:bg-form-input"
                                                    @click.outside="close">
                                                    <div class="flex w-full flex-col">
                                                        <template x-for="(option,index) in options"
                                                            :key="index">
                                                            <div>
                                                                <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark"
                                                                    @click="select(index,$event)">
                                                                    <div :class="option.selected ?
                                                                        'border-primary' : ''"
                                                                        class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                        <div class="flex w-full items-center">
                                                                            <div class="mx-2 leading-6"
                                                                                x-model="option" x-text="option.text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full justify-end items-center  pt-7">
                        <button type="submit"
                            class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:hover:bg-[#4ea840] dark:bg-[#57ba47]">
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
    <script>
        let counter = 0;
        let jumlahKeluargaPindah = document.getElementById('keluarga-pindah');

        const updateCounter = () => {
            jumlahKeluargaPindah.value = counter;
        }

        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() {
                    this.show = true;
                },
                close() {
                    this.show = false;
                },
                isOpen() {
                    return this.show === true;
                },
                select(index, event) {
                    if (!this.options[index].selected) {
                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);
                        counter++;
                        updateCounter();
                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false;
                        counter--;
                        updateCounter();
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);
                    counter--;
                    updateCounter();
                },
                loadOptions() {
                    const options = document.getElementById("select").options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute("selected") != null ?
                                options[i].getAttribute("selected") : false,
                        });
                    }
                },
                selectedValues() {
                    return this.selected.map((option) => {
                        return this.options[option].value;
                    });
                },
            };
        }
    </script>
</x-footer>
