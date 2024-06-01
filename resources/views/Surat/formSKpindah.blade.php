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
                    <li onclick="location.href='{{ route('suratPindah') }}'"
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
                    Formulir Surat Keterangan Pindah
                </div>
                <form action="{{ route('sk-pindah') }}" method="GET" class="gap-4 flex flex-col h-fit">
                    {{-- nama --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="nama"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Nama
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nama" name="nama" value="{{ Auth::user()->penduduk->nama }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <input type="hidden" id="id_penduduk" name="id_penduduk"
                                value="{{ Auth::user()->penduduk->id_penduduk }}">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Nama)</span>
                            </div>
                        </div>
                    </div>
                    {{-- nik --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="nik"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">NIK</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="nik" name="nik" value="{{ Auth::user()->penduduk->nik }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(NIK)</span>
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
                    {{-- Warganegara / Agama --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="warganegara"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Warganegara
                                / Agama</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="warganegara" name="warganegara"
                                value="{{ Auth::user()->penduduk->warganegara }} / {{ Auth::user()->penduduk->agama }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Warganegara / Agama)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Pekerjaan --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="pekerjaan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Pekerjaan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="pekerjaan" name="pekerjaan" value="{{ Auth::user()->penduduk->pekerjaan }}"
                                readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Pekerjaan)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Status Pernikahan --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="statuspernikahan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Status
                                Pernikahan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="statuspernikahan" name="statuspernikahan"
                                value="{{ Auth::user()->penduduk->statusNikah . ' Menikah' }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Status Pernikahan)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat Asal --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="alamat-asal"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Alamat-asal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center relative">
                            <input id="alamat-asal" name="alamat-asal"
                                value="{{ Auth::user()->penduduk->kartukeluarga->alamat }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-2 text-sm text-[#34662C] dark:text-gray-400">
                                <span>(Alamat asal)</span>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat Pindah --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex ">
                            <label for="alamat-pindah"
                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat Pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <textarea id="alamat-pindah" name="alamat-pindah" cols="19" rows="3"
                                placeholder="Masukkan Alamat Pindah"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    {{-- Alasan Pindah --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="alasan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Alasan
                                Pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="alasan" name="alasan" placeholder="Masukkan Alasan Pindah"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </div>
                    </div>
                    {{-- Keluarga yang pindah --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8 flex my-auto items-center">
                            <label for="keluarga-pindah"
                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Keluarga
                                yang pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="keluarga-pindah" name="keluarga-pindah" type="number"
                                placeholder="Masukkan Jumlah Anggota Keluarga yang Pindah"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                x-model="maxSelection" @change="validateSelection">
                        </div>
                    </div>

                    <script>
                        function dropdown() {
                            return {
                                options: [{
                                        value: 1,
                                        text: 'Lucky Kurniawan Langoday',
                                        selected: false
                                    },
                                    {
                                        value: 2,
                                        text: 'Lucky Kurniawan Langoday',
                                        selected: false
                                    },
                                    {
                                        value: 3,
                                        text: 'Lucky Kurniawan Langoday',
                                        selected: false
                                    },
                                    {
                                        value: 4,
                                        text: 'Lucky Kurniawan Langoday',
                                        selected: false
                                    },
                                    {
                                        value: 5,
                                        text: 'Lucky Kurniawan Langoday',
                                        selected: false
                                    },
                                    {
                                        value: 6,
                                        text: 'Lucky Kurniawan Langoday',
                                        selected: false
                                    }
                                ],
                                selected: [],
                                maxSelection: 0,
                                open: false,
                                isOpen() {
                                    return this.open;
                                },
                                openDropdown() {
                                    this.open = true;
                                },
                                closeDropdown() {
                                    this.open = false;
                                },
                                select(index, event) {
                                    if (this.selected.length < this.maxSelection) {
                                        if (!this.options[index].selected) {
                                            this.options[index].selected = true;
                                            this.selected.push(index);
                                        } else {
                                            this.remove(index, event);
                                        }
                                    }
                                },
                                remove(index, event) {
                                    this.options[index].selected = false;
                                    this.selected.splice(this.selected.indexOf(index), 1);
                                },
                                loadOptions() {
                                    // Load options if needed
                                },
                                selectedValues() {
                                    return this.selected.map(index => this.options[index].text).join(', ');
                                },
                                validateSelection() {
                                    if (this.selected.length > this.maxSelection) {
                                        this.selected = this.selected.slice(0, this.maxSelection);
                                    }
                                }
                            }
                        }
                    </script>
                    {{-- Pengikut/Keluarga Yang Pindah --}}
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex ">
                            <label for="pengikut"
                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Pengikut/Keluarga Yang
                                Pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <div
                                class="text-[#2d5523]  placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                <select class="hidden" x-cloak id="select">
                                    <option value="1">Lucky Kurniawan Langoday</option>
                                    <option value="2">Lucky Kurniawan Langoday</option>
                                    <option value="3">Lucky Kurniawan Langoday</option>
                                    <option value="4">Lucky Kurniawan Langoday</option>
                                    <option value="5">Lucky Kurniawan Langoday</option>
                                    <option value="6">Lucky Kurniawan Langoday</option>
                                </select>

                                <div x-data="dropdown()" x-init="loadOptions()"
                                    class="flex flex-col items-center">
                                    <input name="values" type="hidden" :value="selectedValues()" />
                                    <div class="relative z-20 inline-block  w-full">
                                        <div class="relative flex flex-col items-center h-full">
                                            <div @click="open" class="w-full">
                                                <div
                                                    class=" flex rounded-lg border-2 border-[#2d5523] border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input">
                                                    <div class="flex flex-auto flex-wrap gap-3">
                                                        <template x-for="(option,index) in selected"
                                                            :key="index">
                                                            <div
                                                                class="my-1.5 flex items-center justify-center rounded-lg border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                <div class="max-w-full flex-initial"
                                                                    x-model="options[option]"
                                                                    x-text="options[option].text"></div>
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
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </template>
                                                        <div x-show="selected.length == 0" class="flex-1 ">
                                                            <input placeholder="Pilih Anggota Keluarga"
                                                                class=" placeholder-[#2d5523]"
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
                                                                        fill="#637381"></path>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full px-4">
                                                <div x-show.transition.origin.top="isOpen()"
                                                    class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded-lg bg-white shadow dark:bg-form-input"
                                                    @click.outside="close">
                                                    <div class="flex w-full flex-col">
                                                        <template x-for="(option,index) in options"
                                                            :key="index">
                                                            <div>
                                                                <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark"
                                                                    @click="select(index,$event)">
                                                                    <div :class="option.selected ? 'border-primary' : ''"
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
    <script>
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
                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false;
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);
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
