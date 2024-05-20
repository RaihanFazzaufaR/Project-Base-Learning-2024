<nav class="sticky top-0 z-[99] print:hidden bg-white border-gray-200 dark:bg-gray-900 border-b-2 h-fit" id="navbar" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true" style="transition: all 0.5s">
  <!-- <nav class="sticky top-0 z-[99] bg-white/50 border-gray-200 dark:bg-gray-900 lg:h-[10vh]" id="navbar"> -->
  <div class="max-w-full flex flex-wrap items-center justify-between lg:mx-12 mx-8 py-4">
    <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('assets/images/logo.png') }}" class="h-9" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Barokah Project</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse md:gap-5">
      <!-- notification -->
      <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
          <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
        </svg>

        <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900"></div>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownNotification" class="z-20 hidden w-full !absolute !-left-10 !top-5 max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
        <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
          Notifications
        </div>
        <div class="divide-y divide-gray-100 dark:divide-gray-700" x-data="{selected: 'normal'}">
          <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
            <div class="flex-shrink-0">
              <img class="rounded-full w-11 h-11" src="{{ asset('assets/images/userProfile.png') }}" alt="">
              <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-[#22C55E] border border-white rounded-full dark:border-gray-800">
                <i class="fa-solid fa-check text-xs text-white"></i>
              </div>
            </div>
            <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Selamat, UMKM yang Anda ajukan telah disetujui oleh <span class="font-semibold text-gray-900 dark:text-white">Ketua RW</span> </div>
              <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
            </div>
          </a>
          <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700" @click.prevent="selected = (selected === 'tolak{{1}}' ? '':'tolak{{1}}')">
            <div class="flex-shrink-0">
              <img class="rounded-full w-11 h-11" src="{{ asset('assets/images/userProfile.png') }}" alt="">
              <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-[#EF4444] border border-white rounded-full dark:border-gray-800">
                <i class="fa-solid fa-xmark text-xs text-white"></i>
              </div>
            </div>
            <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Maaf, UMKM yang Anda ajukan telah ditolak oleh <span class="font-semibold text-gray-900 dark:text-white">Ketua RW</span> </div>
              <div class="w-full border-y-2 border-gray-300 text-sm py-2" :class="(selected === 'tolak{{1}}') ? 'block' :'hidden'">
                <p class="text-black font-bold">Alasan Penolakan :</p>
                <p class="text-gray-500 dark:text-gray-400">"Data yang Anda masukkan tidak sesuai dengan data yang ada"</p>
              </div>
              <div class="flex justify-between items-center">
                <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                <i class="fa-solid" :class="(selected === 'tolak{{1}}') ? 'fa-angle-up' :'fa-angle-down'"></i>
              </div>
            </div>
          </a>
        </div>
        <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
          <div class="inline-flex items-center ">
            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
              <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
            </svg>
            View all
          </div>
        </a>
      </div>


      <!-- dark mode -->
      <div class="h-9 w-9 flex justify-center items-center cursor-pointer rounded-full p-2" id="darkMode"></div>

      @if (Auth::check())
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-9 h-9 rounded-full" src="{{ asset('assets/images/userProfile.png') }}" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden !my-3 !-ml-5 text-base list-none bg-white divide-y divide-gray-100 rounded-lg overflow-hidden shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm font-semibold text-gray-900">{{ Auth::user()->penduduk->nama }}</span>
          <span class="block text-sm font-medium  text-gray-500 truncate dark:text-gray-400">
            {{ Auth::user()->penduduk->jabatan !== 'Tidak ada' ? Auth::user()->penduduk->jabatan : 'Penduduk' }}
            {{ Auth::user()->penduduk->jabatan !== 'Tidak Ada' ? Auth::user()->penduduk->kartuKeluarga->rt : 'RT ' . Auth::user()->penduduk->kartuKeluarga->rt }}
          </span>

        </div>
        <ul class="font-semibold" aria-labelledby="user-menu-button">
          <li>
            @if (Auth::user()->penduduk->id_penduduk)
            <a href="{{ route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]) }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">UMKM-Ku</a>
            @endif
          </li>
          <li>
            <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Aduan-Ku</a>
          </li>
          <li>
            <a href="{{ route('suratku') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Surat-Ku</a>
          </li>
          <li>
            <a href="{{ route('admin') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Admin</a>
          </li>
          <li>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</a>
          </li>
        </ul>
      </div>
      @else
      <a href="{{ route('login') }}" class="py-1 px-5 bg-[#34662C] shadow-md rounded-2xl text-lg font-semibold text-white hover:bg-white hover:text-[#34662C] border-2 border-transparent hover:border-[#34662C] transition ease-in-out duration-200">Masuk</a>
      @endif


      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-bold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="{{ url('/') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Home') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Home
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Home') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
        <li>
          <button id="dropdownUmkmLink" data-dropdown-toggle="dropdownUmkm" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'UMKM' || $menu === 'UMKMKU') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            UMKM
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F] -bottom-1 group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'UMKM' || $menu === 'UMKMKU') ? '':'md:scale-x-0' }}"></div>
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownUmkm" class="z-10 hidden font-normal overflow-hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="text-sm font-semibold text-gray-700 dark:text-gray-400 " aria-labelledby="dropdownLargeButton">
              <li>
                <a href="{{ route('umkm') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">UMKM Di RW 3</a>
              </li>
              <li>
                @if (Auth::check())
                <a href="{{ route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]) }}) }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">UMKM-Ku</a>
                @else
                <a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">UMKM-Ku</a>
                @endif
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="{{ route('jadwal') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Kegiatan') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Kegiatan
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Kegiatan') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
        <li>
          <a href="{{ route('penduduk') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Penduduk') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Penduduk
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Penduduk') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
        <li>
          <button id="dropdownSuratLink" data-dropdown-toggle="dropdownSurat" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Surat' || $menu === 'Suratku') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Surat
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F] -bottom-1 group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Surat' || $menu === 'Suratku') ? '':'md:scale-x-0' }}"></div>
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownSurat" class="z-10 hidden font-normal overflow-hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="text-sm font-semibold text-gray-700 dark:text-gray-400 " aria-labelledby="dropdownLargeButton">
              <li>
                <a href="{{ route('surat') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Surat</a>
              </li>
              <li>
                @if (Auth::check())
                <a href="{{ route('suratku') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Surat-Ku</a>
                @else
                <a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Surat-Ku</a>
                @endif
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="{{ route('bansos') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Bansos') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Bansos
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Bansos') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
        <li>
          <a href="{{ route('aduan') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Aduan') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Aduan
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Aduan') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
        <li>
          <a href="{{ route('profil') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Profil') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Profil
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Profil') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
  // fitur button dark mode

  const darkMode = document.getElementById('darkMode');
  const userTheme = localStorage.getItem("theme");
  const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

  const darkIcon = `<i class="text-2xl text-gray-500 fa-solid fa-moon"></i>`
  const lightIcon = `<i class="text-2xl text-yellow-400 fa-regular fa-sun"></i>`


  const setIcon = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
      darkMode.innerHTML = lightIcon;
      darkMode.classList.add('hover:bg-gray-600');
    } else {
      darkMode.innerHTML = darkIcon;
      darkMode.classList.add('hover:bg-slate-200');
    }
  }

  setIcon();

  const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
      document.documentElement.classList.add("dark");
    }
  };

  const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme", "light");
      iconToggle(darkIcon);
      return;
    }

    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconToggle(lightIcon);
  }

  darkMode.addEventListener("click", () => {
    themeSwitch();
  })

  const iconToggle = (icon) => {
    darkMode.innerHTML = icon
    darkMode.classList.toggle('hover:bg-slate-200');
    darkMode.classList.toggle('hover:bg-gray-600');
  }

  themeCheck();
</script>

<script>
  let prevScrollpos = window.pageYOffset;

  window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-80px";
    }

    prevScrollpos = currentScrollPos;
  }
</script>
<!-- <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script> -->