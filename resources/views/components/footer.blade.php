</div>
<!-- footer -->
<div class="relative -z-10 w-full h-[40vh] bottom-0 flex flex-col">
    <div class="absolute z-0 w-full -top-[15vh] h-[50vh] flex bg-[#C1EFBD] justify-between items-center text-[#1C4F0F] px-[8vw] pt-[13vh]">
        <img src="{{ asset('assets/images/footer.png') }}" alt="" class="h-[110px]">
        <div class="h-full w-[400px] font-bold text-2xl pt-[70px]">
            <i>“Mewujudkan RW 3 sebagai RW yang Modern, Kreatif, Inovatif dan Sejahtera”</i>
        </div>
    </div>
    <div class="absolute bottom-0 w-full h-[8vh] flex bg-[#1C4F0F] justify-center items-center text-[#C1EFBD]">
        &copy; 2024 SIRAWA. All Rights Reserved.
    </div>
</div>
{{ $slot }}
<script defer src="{{ asset('assets/js/bundle.js') }}"></script>

</body>

</html>