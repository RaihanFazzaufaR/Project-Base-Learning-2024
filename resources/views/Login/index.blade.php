<x-login>
    <div class="flex flex-col justify-center items-center gap-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
        <p class="font-bold text-2xl text-[#1C4F0F]">SIGN IN</p>
    </div>

    @if (session()->has('success'))
    <div class="bg-[#81B076] p-3 rounded-lg w-full text-white font-bold" role="alert">
        {{ session('success') }}
        <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('loginError'))
    <div class="bg-red-500 p-3 rounded-lg w-full text-white text-center font-bold" role="alert">
        {{ session('loginError') }}
        <button type="button" class="" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($errors->any())
    <div class="bg-red-500 p-3 w-full text-white text-center rounded-lg font-bold">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
    @endif
    @if (session()->has('status'))
    <div class="bg-[#81B076] p-3 w-full text-white text-center rounded-lg font-bold">
        {{ session('status') }}
    </div>
    @endif

    <form method="post" action="{{ route('authenticate') }}" class="flex flex-col w-full gap-6">
        @csrf
        <!-- <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="absolute top-2 left-2 text-xl inline-flex w-fit items-center p-2 font-medium text-center text-gray-900 bg-gray-200 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
            <i class="fa-solid fa-user-gear"></i>
        </button>
        <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 overflow-hidden">
            <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center w-full">
                        <input id="list-radio-license" type="radio" value="" checked name="list-radio" class="peer sr-only w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="list-radio-license" class="w-full py-3 text-left px-4 text-sm font-medium text-white dark:text-gray-300 peer-checked:bg-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2">Warga </label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="list-radio-id" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 ">
                        <label for="list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Admin</label>
                    </div>
                </li>
            </ul>
        </div> -->
        <p class="font-bold text-normal text-[#1C4F0F] text-left">Select Role</p>
        <div class="flex items-center justify-around">
            <label class="cursor-pointer">
                <input type="radio" class="peer sr-only" name="level_id" value=2 checked>
                <div class="relative flex flex-col text-black/50 justify-center items-center p-4 bg-white shadow-lg rounded-lg hover:shadow-xl ring-2 ring-slate-400 peer-checked:text-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2 group">
                    <img src="{{ asset('assets/images/warga.jpg') }}" alt="" class="w-16 h-16">
                    <p class="font-bold text-sm">WARGA</p>
                </div>
            </label>
            <label class="cursor-pointer">
                <input type="radio" class="peer sr-only" name="level_id" value=1>
                <div class="relative flex flex-col text-black/50 justify-center items-center p-4 bg-white shadow-lg rounded-lg hover:shadow-xl ring-2 ring-slate-400 peer-checked:text-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2 group">
                    <img src="{{ asset('assets/images/admin.jpg') }}" alt="" class="w-16 h-16">
                    <p class="font-bold text-sm">ADMIN</p>
                </div>
            </label>
        </div>
        <div class="flex flex-col gap-2">
            <label for="username" class="font-bold text-normal text-[#1C4F0F]">Username</label>
            <input type="text" name="username" id="username" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
            @error('username')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col gap-2 relative">
            <label for="password" class="font-bold text-normal text-[#1C4F0F]">Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('username') }}" required>
            @error('password')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
            <button type="button" id="showPw" class="absolute right-3 bottom-2"">
                    <i class=" fa-solid fa-eye-slash text-lg"></i>
            </button>
        </div>
        <div class="flex -mt-3 w-full justify-end">
            <a href="{{ route('password.forgot') }}" class="text-[#1C4F0F] font-medium">forgot password?</a>
        </div>
        <button class="bg-[#81B076] py-3 rounded-lg w-full text-white font-bold hover:bg-[#607f59] hover:shadow-xl">LOGIN</button>
    </form>

    <script>
        const showPw = document.getElementById('showPw');
        const password = document.getElementById('password');
        let isShow = false;

        showPw.addEventListener('click', () => {
            if (isShow) {
                password.type = 'password';
                showPw.innerHTML = '<i class="fa-solid fa-eye-slash text-lg"></i>';
            } else {
                password.type = 'text';
                showPw.innerHTML = '<i class="fa-solid fa-eye text-lg"></i>';
            }
            isShow = !isShow;
        });
    </script>
</x-login>