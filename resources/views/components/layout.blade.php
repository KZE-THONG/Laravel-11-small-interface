<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        @vite('resources/css/app.css')
</head>

<body class="font-Hanken-Grotesk bg-black text-white" >

    <div class="px-6">

        <nav class="flex justify-between py-6 border-b border-white/20" >
            <div>
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </div>

            <div class="space-x-4 px-4 border border-transparent hover:border-l-red-500 hover:border-r-red-500 transition duration-500" >

                    <a href="#"class=" font-bold hover:text-blue-600 transition duration-200" >Jobs</a>
                    <a href="#"class=" font-bold hover:text-blue-600 transition duration-200">Career</a>
                    <a href="#"class=" font-bold hover:text-blue-600 transition duration-200">Salaries</a>
                    <a href="#"class=" font-bold hover:text-blue-600 transition duration-200">Contact</a>
                    <a href="#"class=" font-bold hover:text-blue-600 transition duration-200">Company</a>
            </div>

            <div>
                <a href="#">Create a Job</a>
            </div>

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>


</body>

</html>
