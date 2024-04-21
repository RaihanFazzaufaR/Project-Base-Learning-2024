<x-login>
    <div class="flex flex-col justify-center items-center gap-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
        <p class="font-bold text-2xl text-[#1C4F0F]">FORGOT PASSWORD</p>
    </div>
    <form method="get" action="{{ URL('/login') }}" class="flex flex-col w-full gap-6">
        <div class="flex flex-col gap-2">
            <label for="new_password" class="font-bold text-normal text-[#1C4F0F]">New Password</label>
            <input type="password" name="new_password" id="new_password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="New Password">
        </div>
        <div class="flex flex-col gap-2">
            <label for="confirm_password" class="font-bold text-normal text-[#1C4F0F]">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Confirm Password">
        </div>
        <button class="bg-[#81B076] py-3 rounded-lg w-full text-white font-bold hover:bg-[#607f59] hover:shadow-xl">PROCEED</button>
    </form>
</x-login>