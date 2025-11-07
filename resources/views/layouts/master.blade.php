<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyektoBow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    {{-- Header/Navbar --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main class="flex-grow flex items-center justify-center">
        {{ $slot ?? '' }}
        @yield('add-button')
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
