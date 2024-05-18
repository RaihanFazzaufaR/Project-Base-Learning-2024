<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/surat-cover.jpg') }}" alt="" class="w-full ]">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">Ajuan Surat di RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">“Mudahkan Akses Surat di Lingkungan RW”</p>
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
                    <li
                        class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523] bg-white border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li
                        class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523] bg-white border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white peer-checked:bg-yellow-500 hover:text-white hover:bg-yellow-500 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">
                                Surat Keterangan Pindah
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="grid w-full">
                    <li
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
                <form action="" class="gap-4 flex flex-col h-fit">
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="nama"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Nama
                            </label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="nama" name="nama" value="{{ Auth::user()->penduduk->nama }}" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <input type="hidden" id="id_penduduk" name="id_penduduk"
                                value="{{ Auth::user()->penduduk->id_penduduk }}">
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="nik"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">NIK</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="nik" name="nik" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="jk"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Jenis
                                Kelamin</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="jk" name="jk" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="ttl"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Tempat,
                                Tanggal Lahir</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="ttl" name="ttl" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="NKK" class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">No.
                                Kartu Keluarga</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="NKK" name="NKK" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="warganegara"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Warganegara
                                / Agama</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="warganegara" name="warganegara" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="pekerjaan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Pekerjaan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="pekerjaan" name="pekerjaan" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="statuspernikahan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Status
                                Pernikahan</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="statuspernikahan" name="statuspernikahan" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex ">
                            <label for="alamat"
                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat Asal</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <textarea id="alamat" name="alamat" cols="19" rows="3" readonly
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex ">
                            <label for="alamat-pindah"
                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat Pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <textarea id="alamat-pindah" name="alamat-pindah" cols="19" rows="3" placeholder="Masukkan Alamat Pindah"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                        </div>
                    </div>
                    <div class="gap-2 flex w-full h-fit">
                        <div class="basis-1/4 h-full ps-8  flex my-auto items-center">
                            <label for="alasan"
                                class="text-lg font-bold items-center flex w-full  text-[#2d5523] dark:text-white">Alasan Pindah</label>
                        </div>
                        <div class="basis-3/4 h-full flex items-center">
                            <input id="alasan" name="alasan" placeholder="Masukkan Alasan Pindah"
                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            {{-- <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}"> --}}
                        </div>
                    </div>
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
                                    <option value="1">Makanan</option>
                                    <option value="2">Minuman</option>
                                    <option value="3">Peralatan Rumah Tangga</option>
                                    <option value="4">Kebutuhan Pokok</option>
                                    <option value="5">Jasa</option>
                                    <option value="6">Lainnya</option>
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
