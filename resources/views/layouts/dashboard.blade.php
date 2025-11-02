<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyektoBow Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    {{-- Dashboard-specific header --}}
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-xl font-semibold text-blue-700">ProyektoBow</a>
            <div class="flex items-center space-x-6">
                <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a>
                <a href="#" class="hover:text-blue-600">Profile</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>
</body>
</html>
