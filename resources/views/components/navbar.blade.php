<nav class="sticky top-0 z-[99] bg-white border-gray-200 dark:bg-gray-900 border-b-2 lg:h-[10vh]" id="navbar">
<!-- <nav class="sticky top-0 z-[99] bg-white/50 border-gray-200 dark:bg-gray-900 lg:h-[10vh]" id="navbar"> -->
  <div class="max-w-full flex flex-wrap items-center justify-between lg:mx-12 mx-8 py-4">
    <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('assets/images/logo.png') }}" class="h-8" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Barokah Project</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse md:gap-5">
      <!-- dark mode -->
      <div class="h-9 w-9 flex justify-center items-center cursor-pointer rounded-full p-2" id="darkMode">
      </div>

      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="{{ asset('assets/images/userProfile.png') }}" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900">Tes</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">Tes</span>
        
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
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

  // const navbar = document.getElementById('navbar');
  // let navbarOpacity;
  // document.addEventListener('scroll', () => {
  //   clearTimeout(navbarOpacity);
  //   if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
  //     navbar.classList.add('transition-all');
  //     navbar.classList.add('duration-1000');
  //     navbar.classList.add('ease-in-out');

  //     navbar.style.opacity = 1;

  //     setTimeout(() => {
  //       navbar.classList.remove('transition-all');
  //       navbar.classList.remove('duration-1000');
  //       navbar.classList.remove('ease-in-out');
  //     }, 1000);

  //     navbarOpacity = setTimeout(() => {
  //       navbar.classList.add('transition-all');
  //       navbar.classList.add('duration-1000');
  //       navbar.classList.add('ease-in-out');
  //       navbar.style.opacity = 0;

  //       setTimeout(() => {
  //         navbar.classList.remove('transition-all');
  //         navbar.classList.remove('duration-1000');
  //         navbar.classList.remove('ease-in-out');
  //       }, 1000);

  //     }, 3500);
  //   }
  // })
</script>
<script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>