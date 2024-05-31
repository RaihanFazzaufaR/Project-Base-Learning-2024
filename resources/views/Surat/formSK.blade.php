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
<div class="bg-[#Fff] h-fit mx-auto pt-[34px] w-[90%]">
    <div class="flex border-b-[1.9px] h-[57px] w-[24%] border-[#2d5523]">
        <p class="text-[#2d5523] font-bold text-[19px] w-full flex  items-center">
            Jenis Surat
        </p>
    </div>
    <div class="flex flex-row gap-14 mt-9">
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
                <div class="text-[#2d5523] text-2xl pb-10 font-bold">
                    Formulir Surat Keterangan
                </div>
                <form action="{{ route('storeSk') }}" method="post" class="gap-4 flex flex-col h-fit">
                    @csrf
                    {{-- Nama --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="nama"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Nama
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nama" name="nama" value="{{ Auth::user()->penduduk->nama }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk"
                                value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Nama)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Tempat, Tanggal Lahir --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="ttl"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Tempat,
                                Tanggal Lahir</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="ttl" name="ttl"
                                value="{{ Auth::user()->penduduk->tempatLahir }}, {{ Auth::user()->penduduk->tanggalLahir }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Tempat, Tanggal lahir)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Jenis Kelamin --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="jk"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Jenis
                                Kelamin</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="jk" name="jk"
                                value="{{ Auth::user()->penduduk->jenisKelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Jenis Kelamin)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Agama --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="agama"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Agama</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="agama" name="agama" value="{{ Auth::user()->penduduk->agama }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Agama)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Pekerjaan --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="Pekerjaan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Pekerjaan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="Pekerjaan" name="Pekerjaan" value="{{ Auth::user()->penduduk->pekerjaan }}"
                                readonly readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Pekerjaan)</span>
                            </div>
                        </div>
                    </div>
                    {{-- NIK --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="noKTP"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">No.KTP</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="noKTP" name="noKTP" value="{{ Auth::user()->penduduk->nik }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(NIK)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex ">
                            <label for="alamat"
                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="alamat" name="alamat" cols="19" rows="3"
                                value="{{ Auth::user()->penduduk->kartuKeluarga->alamat }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Alamat)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Keperluan --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex ">
                            <label for="keperluan"
                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Keperluan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <textarea id="keperluan" name="keperluan" cols="19" rows="3" placeholder="Masukkan Keperluan"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    <div class="flex w-full justify-end items-center ps-8 pt-7">
                        <button type="submit"
                            class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
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
