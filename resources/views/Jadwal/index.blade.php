<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/kegiatan-cover.png') }}" alt="" class="w-full">
    <div class=" w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center ">
        <p class="text-[#2d5523] font-bold text-[36px]">Jadwal Kegiatan di RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">“Tumbuhkan Kolaborasi Masyarakat di Setiap Kegiatan RW”</p>
    </div>
</div>

<div class="w-[90%] mx-auto h-fit flex justify-between items-center mt-15">
    <form action="" class="basis-3/5 w-full h-full flex items-center justify-center mb-0">
        <div class="flex shadow-md rounded-xl w-full bg-white border-2 border-[#2d5523] items-center justify-between py-2 h-fit">
            <div class="flex w-full">
                <div class="w-[50%] px-4">
                    <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 rounded-lg" placeholder="Cari Kegiatan..." required />
                    </div>
                </div>
                <div class="border-x-2 border-gray-400 px-4 w-fit">
                    <div class="relative">
                        <select class="block py-2.5 px-9 w-full text-sm text-gray-500 bg-transparent appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Pilih RT</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <i class="fa-solid fa-street-view absolute left-2 top-0 pt-4 text-gray-500 text-sm"></i>
                        <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4 text-gray-500 text-sm"></i>
                    </div>
                </div>
                <div class="w-fit px-4 border-r-2 border-gray-400">
                    <div class="relative">
                        <select class="block py-2.5 px-9 w-full text-sm text-gray-500 bg-transparent appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Pilih Kategori</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <i class="fa-solid fa-layer-group absolute left-2 top-0 pt-4 text-gray-500 text-sm"></i>
                        <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4 text-gray-500 text-sm"></i>
                    </div>
                </div>
            </div>
            <div class="w-fit flex justify-end items-center px-4">
                <button>
                    <i class="fa-solid fa-circle-chevron-right text-3xl text-yellow-500"></i>
                </button>
            </div>
        </div>
    </form>

    <a href="#" class="w-auto shadow-2xl h-fit text-[20px] py-3 px-6 bg-yellow-500 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-500 hover:scale-105">
        Ajukan Kegiatan
    </a>
</div>

<div class="relative min-h-[40vh] w-[90%] mx-auto flex flex-col mt-20 gap-18 mb-30">
    <div class="flex h-[10%] w-full justify-center items-center text-4xl font-bold text-green-900">Kegiatan Mendatang</div>
    <div class="grid h-[90%] w-full grid-cols-3">
        @foreach ($dataUpcoming as $dt)
        <div class="bg-white rounded-xl shadow-xl flex flex-col w-[380px] h-full pt-8 pb-4 gap-3 border-2 border-green-900 hover:scale-105 hover:shadow-2xl transition ease-in-out duration-300 group">
            <!-- <div class="absolute w-full h-full bg-black/40 rounded-xl left-0 top-0 flex justify-center items-center opacity-0 transition ease-in-out duration-300 group-hover:opacity-100">
                <button class="w-fit h-fit px-4 py-2 font-semibold text-sm border-2 border-white bg-green-500 text-white rounded-xl">Lihat Detail</button>
            </div> -->
            <div class="relative w-full h-fit flex justify-center items-center -top-10">
                <div class="absolute w-fit h-fit px-4 py-3 font-bold text-xl bg-yellow-200 rounded-xl shadow-md text-green-900">{{ $dt->mulai_tanggal }}</div>
            </div>
            <div class="flex w-full h-fit justify-start items-center gap-5 px-7">
                <div class="px-3 py-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                <div class="py-1 px-4 flex border border-green-900 rounded-xl text-sm font-medium text-green-900 justify-center items-center gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                </div>
            </div>
            <div class="text-2xl font-semibold text-green-900 flex justify-start px-7">{{ $dt->judul }}</div>
            <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-map-location-dot"></i>
                <p class="text-left">{{ $dt->lokasi }}</p>
            </div>
            <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-user"></i>
                <p>
                    {{ $dt->penduduk->nama }}
                    @if ($dt->penduduk->jabatan !== 'Tidak ada')
                    ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                    @endif
                </p>
            </div>
            <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-dollar-sign"></i>
                <p>Rp. {{ $dt->iuran }} / KK</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="relative min-h-[90vh] py-3 w-[90%] flex mx-auto gap-14 justify-end items-center" id="dateToday">
    <div class="w-[400px] h-fit shadow-xl rounded-xl overflow-hidden absolute left-0 border-2 border-green-900">
        <div class="px-8 py-4 dark:bg-gray-800 bg-white  flex flex-col justify-between gap-8 h-[380px]">
            <div class="flex items-center justify-around">
                <button id="prev" aria-label="calendar backward" onclick="prev()" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <span tabindex="0" class="focus:outline-none  text-lg font-extrabold dark:text-gray-100 text-gray-800" id="calendarHead"></span>
                <button id="next" aria-label="calendar forward" onclick="next()" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-between h-full">
                <table class="w-full lg:h-full">
                    <thead>
                        <tr>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Min</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sen</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sel</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Rab</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Kam</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Jum</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sab</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="days">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="w-[1050px] h-fit flex flex-col pl-25 py-7 gap-11 justify-center items-center">
        <div class="flex justify-center items-center text-4xl font-bold text-green-900">Jadwal Kegiatan</div>
        @if (empty($dataToday->toArray()))
        <div class="flex flex-col w-full justify-center items-center gap-4">
            <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
            <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[400px] h-[300px] object-cover">
            <p class="text-2xl font-semibold text-green-900">Tidak ada kegiatan hari ini</p>
        </div>
        @endif
        <div class="flex w-full max-h-[91vh] flex-wrap items-start justify-start px-10 py-10 overflow-y-auto scrollbar-thin">
            <?php $count = 0; ?>

            @foreach ($dataToday as $dt)

            <?php $count++; ?>

            @if ($count % 2 == 1)
            <div class="flex w-full group">
                <div class="flex flex-col w-[45%] bg-yellow-200 min-h-10 rounded-xl shadow-lg px-6 py-5 gap-3 justify-start">
                    <div class="flex w-full h-fit justify-end items-center gap-5">
                        <!-- <div class="px-3 p-1 flex border gap-2 border-green-900 rounded-xl text-sm font-medium text-green-900 items-center justify-center">
                <p>Hari Ke-1</p>
            </div> -->
                        <div class="px-3 p-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                    </div>
                    <div class="text-2xl font-semibold text-green-900 flex justify-end">{{ $dt->judul }}</div>
                    <div class="flex gap-3 items-center justify-end text-sm font-medium text-green-900">
                        <p class="text-right">{{ $dt->lokasi }}</p>
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="flex gap-4 items-center justify-end text-sm font-medium text-green-900">
                        <p>{{ $dt->penduduk->nama }}
                            @if ($dt->penduduk->jabatan !== 'Tidak ada')
                            ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                            @endif
                        </p>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="flex gap-5 items-center justify-end text-sm font-medium text-green-900">
                        <p>Rp. {{ $dt->iuran }} / KK</p>
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                </div>
                <div class="flex justify-center items-center w-[10%] relative">
                    <div class="w-1 h-full bg-gray-100 transition ease-in-out duration-300 group-hover:bg-green-700"></div>
                    <div class="absolute bg-yellow-100 size-4 rounded-full border-2 border-green-700"></div>
                </div>
                <div class="flex p-8 justify-start items-center w-[45%]">
                    <div class="px-3 p-1 flex border gap-2 border-green-900 rounded-xl text-sm font-medium text-green-900 items-center justify-center">
                        <i class="fa-regular fa-clock"></i>
                        <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="flex w-full group">
                <div class="flex p-8 justify-end items-center w-[45%]">
                    <div class="px-3 p-1 flex border gap-2 border-green-900 rounded-xl text-sm font-medium text-green-900 items-center justify-center">
                        <i class="fa-regular fa-clock"></i>
                        <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                    </div>
                </div>
                <div class="flex justify-center items-center w-[10%] relative">
                    <div class="w-1 h-full bg-gray-100 transition ease-in-out duration-300 group-hover:bg-green-700"></div>
                    <div class="absolute bg-yellow-100 size-4 rounded-full border-2 border-green-700"></div>
                </div>
                <div class="flex flex-col w-[45%] bg-yellow-200 min-h-10 rounded-xl shadow-lg px-6 py-5 gap-3 justify-start">
                    <div class="flex w-full h-fit justify-start items-center gap-5">
                        <div class="px-3 p-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                    </div>
                    <div class="text-2xl font-semibold text-green-900">{{ $dt->judul }}</div>
                    <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <p>{{ $dt->lokasi }}</p>
                    </div>
                    <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900">
                        <i class="fa-solid fa-user"></i>
                        <p>{{ $dt->penduduk->nama }}
                            @if ($dt->penduduk->jabatan !== 'Tidak ada')
                            ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                            @endif
                        </p>
                    </div>
                    <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <p>Rp. {{ $dt->iuran }} / KK</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

<div class="relative min-h-[40vh] w-[90%] mx-auto flex flex-col mt-20 gap-15 mb-30" id="pastSchedule">
    <div class="flex h-[10%] w-full justify-center items-center text-4xl font-bold text-green-900">Kegiatan Yang Telah Berlalu</div>
    <div class="flex w-full min-h-20 gap-x-6 gap-y-3 flex-wrap items-center justify-center">
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Umum')?'bg-[#2d5523] text-white':'' }}">Umum</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Lingkungan')?'bg-[#2d5523] text-white':'' }}">Lingkungan</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Kesehatan')?'bg-[#2d5523] text-white':'' }}">Kesehatan</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Pendidikan')?'bg-[#2d5523] text-white':'' }}">Pendidikan</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Budaya')?'bg-[#2d5523] text-white':'' }}">Budaya</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Kemanusiaan')?'bg-[#2d5523] text-white':'' }}">Kemanusiaan</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Kuliner')?'bg-[#2d5523] text-white':'' }}">Kuliner</button>
        <button class="h-fit py-1 px-4 border-2 border-[#2d5523] rounded-2xl text-sm font-semibold text-[#2d5523] shadow-md hover:bg-[#2d5523] hover:text-white transition-all {{ ($kategoriDataPast == 'Ekonomi')?'bg-[#2d5523] text-white':'' }}">Ekonomi</button>
    </div>
    <div class="grid h-full w-full grid-cols-3 gap-12">
        @foreach ($dataPast as $dt)
        <div class="bg-white rounded-xl shadow-xl flex flex-col w-[380px] h-[260px] pt-8 pb-4 gap-3 border-2 border-green-900 hover:scale-105 hover:shadow-2xl transition ease-in-out duration-300 group">
            <!-- <div class="absolute w-full h-full bg-black/40 rounded-xl left-0 top-0 flex justify-center items-center opacity-0 transition ease-in-out duration-300 group-hover:opacity-100">
                <button class="w-fit h-fit px-4 py-2 font-semibold text-sm border-2 border-white bg-green-500 text-white rounded-xl">Lihat Detail</button>
            </div> -->
            <div class="relative w-full h-fit flex justify-center items-center -top-10">
                <div class="absolute w-fit h-fit px-4 py-3 font-bold text-xl bg-yellow-200 rounded-xl shadow-md text-green-900">{{ $dt->mulai_tanggal }}</div>
            </div>
            <div class="flex w-full h-fit justify-start items-center gap-5 px-7">
                <div class="px-3 py-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                <div class="py-1 px-4 flex border border-green-900 rounded-xl text-sm font-medium text-green-900 justify-center items-center gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                </div>
            </div>
            <div class="text-2xl font-semibold text-green-900 flex justify-start px-7">{{ $dt->judul }}</div>
            <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-map-location-dot"></i>
                <p class="text-left">{{ $dt->lokasi }}</p>
            </div>
            <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-user"></i>
                <p>
                    {{ $dt->penduduk->nama }}
                    @if ($dt->penduduk->jabatan !== 'Tidak ada')
                    ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                    @endif
                </p>
            </div>
            <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-dollar-sign"></i>
                <p>Rp. {{ $dt->iuran }} / KK</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<x-footer>
    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        const urlParams = new URLSearchParams(window.location.search);
        const dateParam = urlParams.get('date');

        // console.log(parseInt(dateParam.split("-")[0]));

        let date = new Date();
        let currYear = dateParam ? parseInt(dateParam.split("-")[0]) : date.getFullYear();
        let currMonth = dateParam ? parseInt(dateParam.split("-")[1])-1 : date.getMonth();

        const month = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ];

        const renderCalendar = () => {
            let dateKegiatan = @json($dataDate);
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";
            let dateCalendar = '';

            for (let i = firstDayofMonth; i > 0; i--) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = 1; i <= lastDateofMonth; i++) {
                counter++;

                dateCalendar = `${currYear}-${currMonth + 1}-${i}`;

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i === parseInt(dateParam?.split("-")[2]) && currMonth === (parseInt(dateParam?.split("-")[1])-1) && currYear === (parseInt(dateParam?.split("-")[0]))) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#A020F0]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt => dt.day == i && dt.month == currMonth && dt.year == currYear)) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = lastDayofMonth; i < 6; i++) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            calendarHead.innerHTML = `${month[currMonth]} ${currYear}`;

            days.innerHTML = daysDate;
        }

        const next = () => {
            currMonth++;
            if (currMonth > 11) {
                currMonth = 0;
                currYear++;
            }
            renderCalendar();
        }

        const prev = () => {
            currMonth--;
            if (currMonth < 0) {
                currMonth = 11;
                currYear--;
            }
            renderCalendar();
        }

        renderCalendar();
    </script>
    <script>
        if (dateParam) {
            const element = document.querySelector('#dateToday');
            window.scrollTo({
                top: element.offsetTop - 20,
                behavior: 'smooth'
            });
        }
        // auto scroll to element
        const autoScrollToElement = () => {
            const element = document.querySelector('#pastSchedule');
            window.scrollTo({
                top: element.offsetTop - 20,
                behavior: 'smooth'
            });
        }
        // autoScrollToElement();
    </script>
</x-footer>