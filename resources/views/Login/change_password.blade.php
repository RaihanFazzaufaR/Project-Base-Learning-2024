<x-login>
    <div class="flex flex-col justify-center items-center gap-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
        <p class="font-bold text-2xl text-[#1C4F0F]">FORGOT PASSWORD</p>
    </div>
    @if($errors->any())
    <div class="bg-red-500 p-3 text-white text-center rounded-lg">
        @foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
    @endif
    @if(session()->has('status'))
    <div class="bg-[#81B076] p-3 text-white text-center rounded-lg">
        {{ session('status') }}
    </div>
    @endif
    <form method="post" action="{{ route('password.update') }}" class="flex flex-col w-full gap-6">
        @csrf
        <input type="hidden" name="token" value="{{ request()->token }}">
        <input type="hidden" name="email" value="{{ request()->email }}">
        <div class="flex flex-col gap-2 relative">
            <label for="password" class="font-bold text-normal text-[#1C4F0F]">New Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="New Password">
            <button type="button" id="showPw1" class="absolute right-3 bottom-2">
                <i class="fa-solid fa-eye-slash"></i>
            </button>
        </div>
        <div class="flex flex-col gap-2 relative">
            <label for="password_confirmation" class="font-bold text-normal text-[#1C4F0F]">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Confirm Password">
            <button type="button" id="showPw2" class="absolute right-3 bottom-2">
                <i class="fa-solid fa-eye-slash"></i>
            </button>
        </div>
        <button class="bg-[#57BA47] py-3 rounded-lg w-full text-white font-bold hover:bg-[#336E2A] hover:shadow-xl transition-all duration-300 ease-in-out">PROCEED</button>
    </form>

    <script>
        const showPw1 = document.getElementById('showPw1');
        const showPw2 = document.getElementById('showPw2');
        const passwordConfirmation = document.getElementById('password_confirmation');
        const password = document.getElementById('password');
        let isShow1 = false;
        let isShow2 = false;

        showPw1.addEventListener('click', () => {
            if (isShow1) {
                password.type = 'password';
                showPw1.innerHTML = '<i class="fa-solid fa-eye-slash text-lg"></i>';
            } else {
                password.type = 'text';
                showPw1.innerHTML = '<i class="fa-solid fa-eye text-lg"></i>';
            }
            isShow1 = !isShow1;
        });

        showPw2.addEventListener('click', () => {
            if (isShow2) {
                passwordConfirmation.type = 'password';
                showPw2.innerHTML = '<i class="fa-solid fa-eye-slash text-lg"></i>';
            } else {
                passwordConfirmation.type = 'text';
                showPw2.innerHTML = '<i class="fa-solid fa-eye text-lg"></i>';
            }
            isShow2 = !isShow2;
        });
    </script>
</x-login>