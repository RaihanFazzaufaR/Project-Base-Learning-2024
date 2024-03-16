<html>

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    @include('components.navbar')

    <div class="w-full h-full flex items-center justify-center">
        <h1 class="text-3x1 font-bold underline animate__animated animate__infinite	infinite animate__heartBeat">
            WELCOME BEGADANG V.2
        </h1>
    </div>
</body>

</html>