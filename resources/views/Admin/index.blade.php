<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
  <div class="grid gap-5 grid-cols-2 sm:gap-6 xl:grid-cols-4 2xl:gap-7.5 relative">
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border dark:border-[#2F363E] dark:text-white bg-white dark:bg-[#2F363E] py-7 lg:py-5 2xl:py-7 shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#19A8EF] to-[#1072A3] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold sm:text-5xl text-4xl group-hover:text-white">{{ $dataJumlah['jumlahKK'] }}</div>
          <div class="font-semibold text-[15px] text-gray-500 dark:text-gray-400 group-hover:text-gray-200 text-center">KK</div>
        </div>
        <div class="sm:text-5xl text-4xl text-transparent bg-gradient-to-r from-[#19A8EF] to-[#1072A3] bg-clip-text group-hover:text-white">
          <i class="fa-solid fa-address-card"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border dark:border-[#2F363E] dark:bg-[#2F363E] dark:text-white bg-white py-7 lg:py-5 2xl:py-7  shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#F6A831] to-[#B37924] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class=" relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold sm:text-5xl text-4xl group-hover:text-white">{{ $dataJumlah['jumlahPenduduk'] }}</div>
          <div class="font-semibold text-[15px] text-gray-500 dark:text-gray-400 group-hover:text-gray-200 text-center">Penduduk</div>
        </div>
        <div class="sm:text-5xl text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#F6A831] to-[#B37924] group-hover:text-white">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border dark:border-[#2F363E] dark:bg-[#2F363E] dark:text-white bg-white py-7 lg:py-5 2xl:py-7  shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#9119EF] to-[#6410A3] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class=" relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold sm:text-5xl text-4xl group-hover:text-white">{{ $dataJumlah['jumlahUmkm'] }}</div>
          <div class="font-semibold text-[15px] text-gray-500 dark:text-gray-400 group-hover:text-gray-200 text-center">UMKM</div>
        </div>
        <div class="sm:text-5xl text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#9119EF] to-[#6410A3] group-hover:text-white">
          <i class="fa-solid fa-shop"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
    <!-- Card Item Start -->
    <div class="relative rounded-t-md rounded-b-3xl border dark:border-[#2F363E] dark:bg-[#2F363E] dark:text-white bg-white py-7 lg:py-5 2xl:py-7  shadow-xl group overflow-hidden">
      <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#19EF88] to-[#10A35C] left-0 group-hover: transition ease-in-out duration-500 -translate-y-[93%] group-hover:translate-y-0"></div>
      <div class=" relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
        <div class="flex flex-col justify-center items-center gap-2">
          <div class="font-bold sm:text-5xl text-4xl group-hover:text-white">{{ $dataJumlah['jumlahAduan'] }}</div>
          <div class="font-semibold text-[15px] text-gray-500 dark:text-gray-400 group-hover:text-gray-200 text-center">Aduan</div>
        </div>
        <div class="sm:text-5xl text-4xl text-transparent bg-clip-text bg-gradient-to-r from-[#19EF88] to-[#10A35C] group-hover:text-white">
          <i class="fa-solid fa-comments"></i>
        </div>
      </div>
    </div>
    <!-- Card Item End -->
  </div>

  <div class="mt-6 md:mt-12 grid grid-cols-12 lg:grid-rows-5 gap-4 md:gap-6 2xl:gap-7.5 h-full lg:max-h-[570px] 2xl:max-h-[690px] relative">

    <div class="2xl:col-span-8 lg:col-span-7 col-span-12 lg:row-span-3 bg-white dark:bg-[#2F363E] rounded-xl shadow-xl flex flex-col py-4 px-8 h-full">
      <div class="flex w-full py-2">
        <div class="flex w-[55%] flex-col gap-1 text-left">
          <p class="font-bold text-lg text-black dark:text-white">Jumlah Penerima Bansos</p>
          <p class="font-normal text-sm text-gray-500 dark:text-gray-200 sm:block hidden">Menunjukkan jumlah penerima bansos per tahunnya</p>
        </div>
        <div class="flex w-[45%] flex-col gap-1">
          <div class="font-bold text-2xl text-black text-right sm:pr-4 w-full dark:text-white">175 Orang</div>
          <div class="flex w-full gap-1 items-center justify-end">
            <span class="font-normal text-sm text-gray-500 dark:text-gray-200 sm:block hidden">Rata-rata pada tahun</span>
            <form class="w-fit">
              <select id="countries" class="bg-[#E4F7DF] dark:bg-[#2F363E] border border-[#57BA47] text-[#57BA47] text-sm font-bold rounded-lg focus:ring-[#57BA47] focus:border-[#57BA47]  block w-full py-1 px-2">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024" selected>2024</option>
              </select>
            </form>
          </div>
        </div>
      </div>
      <div class="w-full h-full flex justify-center items-center">
        <canvas id="lineChart" style="height:100%; width:100%"></canvas>
      </div>
    </div>


    <div class="2xl:col-span-4 lg:col-span-5 col-span-12 lg:row-span-5 bg-white dark:bg-[#2F363E] rounded-xl shadow-xl flex flex-col py-4 px-8 gap-1 ">
      <div class="h-fit w-full text-left font-bold text-lg text-black dark:text-white">Daftar UMKM Terbaru</div>
      <div class="flex flex-col h-[91%] overflow-y-auto pt-2 scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
        @foreach ($newestUmkm as $dt)
        <div class="flex py-4 border-b-2 border-gray-500 dark:border-gray-400 gap-5 dark:text-white">
          <img src="{{ asset('assets/images/' . $dt->foto) }}" alt="" class="h-20 w-20 rounded-lg">
          <div class="w-full flex flex-col justify-between items-start">
            <p class="font-bold text-lg"> {{ Str::limit($dt->nama, 20) }}</p>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-regular fa-clock text-sm text-gray-500 dark:text-gray-400 pt-1"></i>
              <p class="text-sm">{{ $dt->buka_waktu }} - {{ $dt->tutup_waktu }}</p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <i class="fa-solid fa-user text-sm text-gray-500 dark:text-gray-400 pt-1"></i>
              <p class="text-sm">{{ Str::limit($dt->penduduk->nama, 24) }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="flex justify-end items-center pt-3">
        <a href="{{ route('umkm') }}" class="py-1 px-4 bg-[#57BA47] dark:bg-[#2F363E] border border-transparent dark:border-[#57BA47] dark:text-[#57BA47] font-medium text-sm text-white rounded-lg shadow-md hover:bg-[#234C1D] transition ease-in-out duration-300 hover:scale-105">Lainnya</a>
      </div>
    </div>
    <div class="2xl:col-span-8 lg:col-span-7 col-span-12 lg:row-span-2 bg-white dark:bg-[#2F363E] rounded-xl shadow-xl flex flex-col py-4 px-8 h-[245px]">
      <div class="h-fit w-full text-left font-bold text-lg text-black dark:text-white">Demografi Penduduk</div>
      <div class="h-full w-full flex items-center">
        <canvas id="barPendudukChart" style="height:100%; width:100%"></canvas>
      </div>
    </div>
  </div>

  <div class="mt-6 md:mt-12 grid grid-cols-3 lg:grid-rows-1 gap-4 md:gap-6 2xl:gap-7.5 h-[400px] lg:h-full">
    <div class="lg:col-span-1 col-span-3 bg-white dark:bg-[#2F363E] rounded-xl shadow-xl flex flex-col py-4 px-8 h-full gap-4">
      <div class="flex flex-col gap-1 pt-2">
        <p class="font-bold text-lg text-black dark:text-white">Jumlah Penduduk</p>
        <p class="font-normal text-sm text-gray-500 dark:text-gray-400">Menunjukkan perbandingan antara jumlah penduduk tetap dan tidak tetap</p>
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
          <div class="h-4 w-14 bg-[#EAE509] rounded-2xl shadow-lg"></div>
          <div class="text-[#EAE509] font-bold text-sm flex flex-col justify-center items-center">
            <p>Penduduk</p>
            <p>Tidak Tetap</p>
          </div>
        </div>
      </div>
      <div class="w-full h-50 flex items-center justify-center">
        <canvas id="dougnutChart" style="height:100%; width:100%"></canvas>
      </div>
    </div>
    <div class="lg:col-span-2 col-span-3 bg-white dark:bg-[#2F363E] rounded-xl shadow-xl flex md:flex-row flex-col">
      <div class="w-full md:w-[45%] h-full md:border-r-2 border-b-2 md:border-b-0 border-gray-300 dark:border-gray-400 py-8 px-6">
        <div class=" flex flex-col justify-around gap-8 h-full">
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
      <div class="col-span-2 lg:row-span-1 h-full md:w-[55%] w-full flex flex-col gap-2 px-2 py-4">
        <div class="font-bold text-lg text-center text-black dark:text-white">Kegiatan Mendatang</div>
        <div class="flex flex-col lg:h-[337px] h-[320px] overflow-y-auto pb-2 pt-1 px-4 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin gap-3">
          @foreach ($dataKegiatanMendatang as $dt)
          <div class="flex w-full h-fit border-2 border-green-900 dark:border-[#57BA47] rounded-lg shadow-md">
            <div class="w-fit h-full flex flex-col bg-green-900 dark:bg-[#57BA47] px-4 text-white items-center justify-center rounded-l-md">
              <p class="font-bold text-3xl">{{ substr($dt->mulai_tanggal, 0, 2) }}</p>
              <p class="font-medium text-lg">{{ substr($dt->mulai_tanggal, 3, 6) }}</p>
            </div>
            <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative">
              <div class="text-lg font-medium text-green-900 dark:text-[#57BA47] text-left w-full">{{ Str::limit($dt->judul, 27) }}</div>
              <div class="flex items-center gap-3 w-full justify-between">
                <div class="flex gap-2 items-center text-sm font-normal text-gray-500 dark:text-gray-400 text-left w-fit">
                  <i class="fa-regular fa-clock"></i>
                  <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                </div>
                <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white 2xl:flex hidden">{{ $dt->aktivitas_tipe }}</div>
              </div>
              <div class="flex items-center gap-2 text-sm font-normal text-gray-500 dark:text-gray-400 text-left w-full">
                <i class="fa-solid fa-location-dot"></i>
                <p>{{ $dt->lokasi }}</p>
              </div>
            </div>
          </div>
          @endforeach
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

    let textColor = (localStorage.getItem('theme') == 'light') ? 'black' : 'white';
    let borderColor = (localStorage.getItem('theme') == 'light') ? 'white' : '#2F363E';

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
            },
            ticks: {
              color: textColor,
            },
          },
          y: {
            ticks: {
              color: textColor,
            },
          },
        },
        plugins: {
          legend: {
            display: false
          }
        }
      }
    })

    let pendudukTetap = @json($dataStatusPenduduk['tetap']);
    let pendudukTidakTetap = @json($dataStatusPenduduk['tidak tetap']);

    const dougnutChart = new Chart(document.getElementById("dougnutChart"), {
      type: 'doughnut',
      data: {
        labels: ['Penduduk Tetap', 'Penduduk Tidak Tetap'],
        datasets: [{
          data: [pendudukTetap, pendudukTidakTetap],
          backgroundColor: [
            '#57BA47',
            '#EAE509'
          ],
          hoverBorderWidth: 2,
          borderColor: borderColor,
          borderWidth: 10

        }]
      },
      options: {
        cutout: '40%',
        plugins: {
          legend: {
            display: false
          }
        },
      }
    });

    const pendudukChart = new Chart(document.getElementById("barPendudukChart"), {
      type: 'bar',
      data: {
        labels: ['> 46 Tahun', '26 - 45 Tahun', '13 - 25 Tahun', '6 - 12 Tahun', '0 - 5 Tahun'],
        datasets: [{
          label: 'Laki-Laki',
          data: [@json($dataDemografiPenduduk['kategori5L']), @json($dataDemografiPenduduk['kategori4L']), @json($dataDemografiPenduduk['kategori3L']), @json($dataDemografiPenduduk['kategori2L']), @json($dataDemografiPenduduk['kategori1L'])],
          backgroundColor: [
            '#57BA47'
          ],
          hoverOffset: 4,
          barThickness: 10,
        }, {
          label: 'Perempuan',
          data: [@json($dataDemografiPenduduk['kategori5P']), @json($dataDemografiPenduduk['kategori4P']), @json($dataDemografiPenduduk['kategori3P']), @json($dataDemografiPenduduk['kategori2P']), @json($dataDemografiPenduduk['kategori1P'])],
          backgroundColor: [
            '#EAE509'
          ],
          hoverOffset: 4,
          borderRadius: 4,
          barThickness: 10,
        }]
      },
      options: {
        plugins: {
          legend: {
            labels: {
              color: textColor
            }
          }
        },
        animation: {
          delay: 2000,
        },
        indexAxis: 'y',
        responsive: true,
        scales: {
          x: {
            stacked: true,
            ticks: {
              color: textColor,
            },
            beginAtZero: true
          },
          y: {
            stacked: true,
            ticks: {
              color: textColor,
            },
          }
        }
      }
    });

    darkMode.addEventListener('click', (e) => {
      textColor = (localStorage.getItem('theme') == 'light') ? 'black' : 'white';
      borderColor = (localStorage.getItem('theme') == 'light') ? 'white' : '#2F363E';

      lineChart.options.scales.x.ticks.color = textColor;
      lineChart.options.scales.y.ticks.color = textColor;

      pendudukChart.options.scales.x.ticks.color = textColor;
      pendudukChart.options.scales.y.ticks.color = textColor;
      pendudukChart.options.plugins.legend.labels.color = textColor;

      dougnutChart.data.datasets.forEach((dataset) => {
        dataset.borderColor = borderColor;
      })

      lineChart.update();
      pendudukChart.update();
      dougnutChart.update();
    })
  </script>
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
    let currMonth = dateParam ? parseInt(dateParam.split("-")[1]) - 1 : date.getMonth();

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
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
        } else if (i === parseInt(dateParam?.split("-")[2]) && currMonth === (parseInt(dateParam?.split("-")[1]) - 1) && currYear === (parseInt(dateParam?.split("-")[0]))) {
          daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium dark:text-gray-100 rounded-full text-white bg-[#4D4DFF]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
        } else if (dateKegiatan.some(dt =>
            (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
            (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 1)
          )) {
          daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
        } else if (dateKegiatan.some(dt =>
            (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
            (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 0)
          )) {
          daysDate += `   <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>`
        } else if (dateKegiatan.some(dt =>
            (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
            (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i))))
          )) {
          daysDate += `  <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
        } else if (counter % 7 == 1) {
          daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
        } else if (counter % 7 == 0) {
          daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
        } else {
          daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
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
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
        } else if (counter % 7 == 0) {
          daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
        } else {
          daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
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