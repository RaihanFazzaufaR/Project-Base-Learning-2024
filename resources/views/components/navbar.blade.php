<nav class="sticky top-0 z-[99] bg-white border-gray-200 dark:bg-gray-900 border-b-2 h-fit" id="navbar">
  <!-- <nav class="sticky top-0 z-[99] bg-white/50 border-gray-200 dark:bg-gray-900 lg:h-[10vh]" id="navbar"> -->
  <div class="max-w-full flex flex-wrap items-center justify-between lg:mx-12 mx-8 py-4">
    <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('assets/images/logo.png') }}" class="h-9" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Barokah Project</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse md:gap-5">
      <!-- dark mode -->
      <div class="h-9 w-9 flex justify-center items-center cursor-pointer rounded-full p-2" id="darkMode">
      </div>

      @if (Auth::check())
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-9 h-9 rounded-full" src="{{ asset('assets/images/userProfile.png') }}" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden !my-3 !-ml-5 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900">{{ Auth::user()->penduduk->nama }}</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->penduduk->statusDiRw }}</span>

        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="{{ route('umkmku') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">UMKM-KU</a>
          </li>
          <li>
            <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">ADUAN-KU</a>
          </li>
          <li>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</a>
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
      <ul class="flex flex-col font-bold p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{ url('/') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Home') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Home
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Home') ? '':'md:scale-x-0' }}"></div>
          </a>
        </li>
        <li>
          <button id="dropdownUmkmLink" data-dropdown-toggle="dropdownUmkm" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'UMKM') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            UMKM
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F] -bottom-1 group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'UMKM') ? '':'md:scale-x-0' }}"></div>
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownUmkm" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
              <li>
                <a href="{{ route('umkm') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UMKM Di RW 3</a>
              </li>
              <li>
                <a href="{{ route('umkmku') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UMKM-KU</a>
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
          <a href="{{ route('surat') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Surat') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
            Surat
            <div class="md:absolute md:h-[2.5px] md:w-full md:bg-[#1C4F0F]  group-hover:scale-x-100 md:transition md:ease-in-out md:duration-500 {{ ($menu === 'Surat') ? '':'md:scale-x-0' }}"></div>
          </a>
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
          <a href="{{ route('umkm') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#1C4F0F] md:p-0 md:relative group {{ ($menu === 'Profil') ? 'md:text-[#1C4F0F]':'md:text-gray-500' }}">
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
<script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>