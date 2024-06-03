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
        <div class="flex flex-col gap-2">
            <label for="username" class="font-bold text-normal text-[#1C4F0F]">Username</label>
            <input type="text" name="username" id="username" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
        </div>
        <div class="flex flex-col gap-2 relative">
            <label for="password" class="font-bold text-normal text-[#1C4F0F]">Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('username') }}" required>
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