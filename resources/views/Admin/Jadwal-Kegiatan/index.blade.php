<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="grid grid-cols-4 grid-rows-2 gap-8 h-[570px] w-full">
        <div class="col-span-3 row-span-2 h-full w-full bg-white rounded-lg shadow-xl flex flex-col justify-center gap-14 items-center p-8">
            <div class="flex items-center justify-around w-full h-[10%]">
                <button id="prev" aria-label="calendar backward" onclick="prev()" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <span tabindex="0" class="focus:outline-none  text-2xl font-extrabold dark:text-gray-100 text-gray-800" id="calendarHead"></span>
                <button id="next" aria-label="calendar forward" onclick="next()" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-between w-full h-full">
                <table class="w-full lg:h-full">
                    <thead>
                        <tr>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Min</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sen</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sel</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Rab</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Kam</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Jum</p>
                                </div>
                            </th>
                            <th class="pb-10">
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
        <div class="col-span-1 row-span-1 h-full w-full bg-white rounded-lg shadow-xl flex flex-col gap-2 p-4">
            <div class="font-bold text-lg text-center text-black">Kegiatan Mendatang</div>
            <div class="flex flex-col h-[85%] overflow-y-auto py-2 pt-1 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1 row-span-1 h-full w-full bg-white rounded-lg shadow-xl flex flex-col gap-2 p-4">
            <div class="font-bold text-lg text-center text-black">Kegiatan Pada 07-05-2024</div>
            <div class="flex flex-col h-[85%] overflow-y-auto py-2 pt-1 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-24 py-2 gap-2">
                    <div class="flex flex-col w-[30%] h-full bg-[#cefbc4] rounded-xl items-center justify-center pb-3 relative">
                        <p class="font-bold text-4xl text-[#57BA47]">10</p>
                        <p class="font-semibold text-sm text-black">Jum</p>
                        <div class="absolute w-5 h-5 rounded-full bg-[#D4B204] border-4 border-white -bottom-2"></div>
                    </div>
                    <div class="flex flex-col h-full w-[70%] items-center px-2 gap-1">
                        <div class="text-lg font-medium text-black text-left w-full">Nama Acara</div>
                        <div class="flex items-center gap-2 mt-1 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-regular fa-clock"></i>
                            <p>07:00 - 10:00</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Rumah Pak RW</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        let date = new Date();
        let currYear = date.getFullYear();
        let currMonth = date.getMonth();

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
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";

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

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i == 10 || i == 15) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
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
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
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
</x-admin-layout>