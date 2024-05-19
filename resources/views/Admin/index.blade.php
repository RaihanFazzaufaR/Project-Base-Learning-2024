<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border border-stroke bg-white px-5 py-7 shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-[#19A8EF] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold text-5xl group-hover:text-white">100</div>
          <div class="font-semibold text-[15px] text-gray-500 group-hover:text-gray-200">Jumlah KK</div>
        </div>
        <div class="text-5xl text-[#19A8EF] group-hover:text-white">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border border-stroke bg-white px-5 py-7 shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-[#FEAD34] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold text-5xl group-hover:text-white">1000</div>
          <div class="font-semibold text-[15px] text-gray-500 group-hover:text-gray-200">Jumlah Penduduk</div>
        </div>
        <div class="text-5xl text-[#FEAD34] group-hover:text-white">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border border-stroke bg-white px-5 py-7 shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-[#9119EF] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold text-5xl group-hover:text-white">43</div>
          <div class="font-semibold text-[15px] text-gray-500 group-hover:text-gray-200">Jumlah UMKM</div>
        </div>
        <div class="text-5xl text-[#9119EF] group-hover:text-white">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border border-stroke bg-white px-5 py-7 shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-[#19EF88] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold text-5xl group-hover:text-white">100</div>
          <div class="font-semibold text-[15px] text-gray-500 group-hover:text-gray-200">Jumlah Aduan</div>
        </div>
        <div class="text-5xl text-[#19EF88] group-hover:text-white">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
  </div>

  <div class="mt-6 md:mt-14 grid grid-cols-12 grid-rows-5 gap-4 md:gap-6 2xl:gap-7.5 max-h-[690px]">
    <div class="col-span-8 row-span-2 bg-white rounded-xl shadow-xl flex flex-col py-4 px-8 max-h-[245px]">
      <div class="h-fit w-full text-left font-bold text-lg text-black">Demografi Penduduk</div>
      <div class="h-full w-full">
        <canvas id="barPendudukChart" height="80%"></canvas>
      </div>
    </div>

    <div class="col-span-4 row-span-5 bg-white rounded-xl shadow-xl flex flex-col py-4 px-8 gap-1 ">
      <div class="h-fit w-full text-left font-bold text-lg text-black">Daftar UMKM Terbaru</div>
      <div class="flex flex-col h-[91%] overflow-y-auto pt-2 scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
        <div class="flex py-4 border-b-2 border-gray-500 gap-5">
          <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-20 w-24 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg">Toko Kelontong</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">00:00 - 23:59</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 pt-1"></i>
              <p class="text-sm">Raihan Fazzaufa R.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-end items-center pt-3">
        <button class="py-1 px-4 bg-[#57BA47] font-medium text-sm text-white rounded-lg shadow-md hover:bg-[#234C1D] transition ease-in-out duration-300 hover:scale-105">Lainnya</button>
      </div>
    </div>
    <div class="col-span-8 row-span-3 bg-white rounded-xl shadow-xl flex flex-col py-4 px-8 h-full">
      <div class="flex w-full py-2">
        <div class="flex w-[55%] flex-col gap-1 text-left">
          <p class="font-bold text-lg text-black">Jumlah Penerima Bansos</p>
          <p class="font-normal text-sm text-gray-500">Menunjukkan jumlah penerima bansos per tahunnya</p>
        </div>
        <div class="flex w-[45%] flex-col gap-1">
          <div class="font-bold text-2xl text-black text-right pr-4 w-full">175 Orang</div>
          <div class="flex w-full gap-1 items-center justify-end">
            <span class="font-normal text-sm text-gray-500">Rata-rata pada tahun</span>
            <form class="w-fit">
              <select id="countries" class="bg-[#E4F7DF] border border-[#57BA47] text-[#57BA47] text-sm font-bold rounded-lg focus:ring-[#57BA47] focus:border-[#57BA47]  block w-full py-1 px-2">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024" selected>2024</option>
              </select>
            </form>
          </div>
        </div>
      </div>
      <div class="w-full h-full">
        <canvas id="lineChart" height="120"></canvas>
      </div>
    </div>
  </div>

  <div class="mt-6 md:mt-12 grid grid-cols-3 grid-rows-1 gap-4 md:gap-6 2xl:gap-7.5 h-[400px]">
    <div class="col-span-1 bg-white rounded-xl shadow-xl flex flex-col py-4 px-8 h-full gap-4">
      <div class="flex flex-col gap-1 pt-2">
        <p class="font-bold text-lg text-black">Jumlah Penduduk</p>
        <p class="font-normal text-sm text-gray-500">Menunjukkan perbandingan antara jumlah penduduk tetap dan tidak tetap</p>
      </div>
      <div class="flex justify-center gap-8">
        <div class="flex flex-col justify-center items-center gap-1">
          <div class="h-4 w-14 bg-[#57BA47] rounded-2xl shadow-lg"></div>
          <div class="text-[#57BA47] font-bold text-sm flex flex-col justify-center items-center">
            <p>Penduduk</p>
            <p>Tetap</p>
          </div>
        </div>
        <div class="flex flex-col justify-center items-center gap-1">
          <div class="h-4 w-14 bg-[#2D5523] rounded-2xl shadow-lg"></div>
          <div class="text-[#2D5523] font-bold text-sm flex flex-col justify-center items-center">
            <p>Penduduk</p>
            <p>Tidak Tetap</p>
          </div>
        </div>
      </div>
      <div class="w-full h-50 flex items-center justify-center">
        <canvas id="dougnutChart"></canvas>
      </div>
    </div>
    <div class="col-span-2 bg-white rounded-xl shadow-xl flex h-full">
      <div class="w-[65%] h-full border-r-2 border-gray-300 p-8">
        <div class="dark:bg-gray-800 bg-white flex flex-col justify-between gap-8 h-full">
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
      <div class="w-[35%] h-full p-6 flex flex-col gap-4">
        <div class="font-bold text-lg text-black">Kegiatan Mendatang</div>
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
  </div>

  <!-- Initialize Chart js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
  <script>
    let labelsLineChart = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
    let itemLineChart = [0, 90, 0, 110, 0, 80, 0, 100, 0, 120, 0, 130];

    let ctx = document.getElementById("lineChart").getContext("2d");
    let gradient = ctx.createLinearGradient(0, 0, 0, 250);
    gradient.addColorStop(0, 'rgba(87, 186, 71, 0.7)');
    gradient.addColorStop(1, 'rgba(87, 186, 71, 0.1)');

    const lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labelsLineChart,
        datasets: [{
          data: itemLineChart,
          borderColor: "#57BA47",
          label: false,
          fill: true,
          tension: 0.4,
          backgroundColor: gradient,
          // backgroundColor: 'rgba(87, 186, 71, 0.2)'
        }]
      },
      options: {
        scales: {
          x: {
            grid: {
              display: false
            }
          }
        },
        plugins: {
          legend: {
            display: false
          }
        }
      }
    })

    const dougnutChart = new Chart(document.getElementById("dougnutChart"), {
      type: 'doughnut',
      data: {
        labels: ['Penduduk Tetap', 'Penduduk Tidak Tetap'],
        datasets: [{
          label: 'My First Dataset',
          data: [65, 35],
          backgroundColor: [
            '#57BA47',
            '#2D5523'
          ],
          hoverOffset: 4
        }]
      },
      options: {
        plugins: {
          legend: {
            display: false
          }
        }
      }
    });

    const pendudukChart = new Chart(document.getElementById("barPendudukChart"), {
      type: 'bar',
      data: {
        labels: ['> 46 Tahun', '26 - 45 Tahun', '13 - 25 Tahun', '6 - 12 Tahun', '0 - 5 Tahun'],
        datasets: [{
          label: 'Laki-Laki',
          data: [65, 35, 20, 40, 50],
          backgroundColor: [
            '#57BA47'
          ],
          hoverOffset: 4,
          barThickness: 10,
        }, {
          label: 'Perempuan',
          data: [65, 35, 20, 40, 50],
          backgroundColor: [
            '#EAE509'
          ],
          hoverOffset: 4,
          borderRadius: 4,
          barThickness: 10,
        }]
      },
      options: {
        animation: {
          delay: 2000,
        },
        indexAxis: 'y',
        responsive: true,
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero: true
            }
          }],
          x: {
            stacked: true,
          },
          y: {
            stacked: true
          }
        }
      }
    });
  </script>
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