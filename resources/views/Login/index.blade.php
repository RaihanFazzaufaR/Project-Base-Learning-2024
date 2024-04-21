<x-login>
    <div class="flex flex-col justify-center items-center gap-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
        <p class="font-bold text-2xl text-[#1C4F0F]">SIGN IN</p>
    </div>
    <form method="post" action="{{ URL('/') }}" class="flex flex-col w-full gap-6">
        <p class="font-bold text-normal text-[#1C4F0F] text-left">Select Role</p>
        <div class="flex items-center justify-around">
            <label class="cursor-pointer">
                <input type="radio" class="peer sr-only" name="user" value="warga" checked>
                <div class="relative flex flex-col text-black/50 justify-center items-center p-4 bg-white shadow-lg rounded-lg hover:shadow-xl ring-2 ring-slate-400 peer-checked:text-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2 group">
                    <img src="{{ asset('assets/images/warga.jpg') }}" alt="" class="w-16 h-16">
                    <p class="font-bold text-sm">WARGA</p>
                </div>
            </label>
            <label class="cursor-pointer">
                <input type="radio" class="peer sr-only" name="user" value="admin">
                <div class="relative flex flex-col text-black/50 justify-center items-center p-4 bg-white shadow-lg rounded-lg hover:shadow-xl ring-2 ring-slate-400 peer-checked:text-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2 group">
                    <img src="{{ asset('assets/images/admin.jpg') }}" alt="" class="w-16 h-16">
                    <p class="font-bold text-sm">ADMIN</p>
                </div>
            </label>
        </div>
        <div class="flex flex-col gap-2">
            <label for="username" class="font-bold text-normal text-[#1C4F0F]">Username</label>
            <input type="text" name="username" id="username" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Username">
        </div>
        <div class="flex flex-col gap-2">
            <label for="password" class="font-bold text-normal text-[#1C4F0F]">Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Password">
        </div>
        <a href="{{ route('forgot-password') }}" class="-mt-3 text-right text-[#1C4F0F] font-medium">forgot password?</a>
        <button class="bg-[#81B076] py-3 rounded-lg w-full text-white font-bold hover:bg-[#607f59] hover:shadow-xl">LOGIN</button>
    </form>
</x-login>