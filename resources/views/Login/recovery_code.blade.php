<x-login>
    <div class="flex flex-col justify-center items-center gap-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
        <p class="font-bold text-2xl text-[#1C4F0F]">FORGOT PASSWORD</p>
    </div>
    <p class="text-[#417833] text-center">an email containing a verification code has just been sent to <span class="font-bold">test@gmail.com</span></p>
    <form method="get" action="{{ route('change-password') }}" class="flex flex-col w-full gap-6">
        <div class="flex flex-col gap-2">
            <label for="recovery_code" class="font-bold text-normal text-[#1C4F0F]">Recovery Code</label>
            <input type="text" name="recovery_code" id="recovery_code" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Recovery Code">
        </div>
        <div class="text-right text-[#417833] font-medium -mt-2 -mb-4">0.50</div>
        <a href="{{ URL('/') }}" class="w-full"><button class="bg-[#81B076]/50 py-3 rounded-lg w-full text-white font-bold hover:bg-[#607f59] hover:shadow-xl">RESEND CODE</button></a>
        <button class="bg-[#81B076] py-3 rounded-lg w-full text-white font-bold hover:bg-[#607f59] hover:shadow-xl">PROCEED</button>
    </form>
</x-login>