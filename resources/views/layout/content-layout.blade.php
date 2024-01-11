<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=VT323&display=swap');
    </style>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body style="font-family: 'VT323', monospace; margin-bottom: 80px;" class="bg-">
    <nav class="w-full flex justify-center py-10 fixed min-w-full px-20" >
        <ul class="flex gap-10 bg-black text-white px-4  py-1 text-2xl">
            <li>Home</li>
            <li>Kategori</li>
            <li>Extras</li>
            <li><a class="dropdown-item" href="{{ url('/sambutan') }}">Profile</a></li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>
