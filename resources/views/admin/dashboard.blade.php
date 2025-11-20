@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gray-50 p-6">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-center text-gray-800">{{ $totalTourists ?? 0 }}</h2>
                <p class="text-center text-gray-500 mt-2">Total Tourists</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-center text-gray-800">{{ $totalGuides ?? 0 }}</h2>
                <p class="text-center text-gray-500 mt-2">Registered Guides</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-center text-gray-800">{{ $totalReservations ?? 0 }}</h2>
                <p class="text-center text-gray-500 mt-2">Total Reservations</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h2 class="text-2xl font-bold text-center text-gray-800">{{ $totalPackages ?? 0 }}</h2>
                <p class="text-center text-gray-500 mt-2">Tour Packages</p>
            </div>
        </div>

        <!-- Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('admin.guides.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <h3 class="text-xl font-semibold text-gray-800">Manage Guides</h3>
                <p class="text-gray-500 mt-1">View, add, and edit guides</p>
            </a>
            <a href="{{ route('admin.tourists.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <h3 class="text-xl font-semibold text-gray-800">Manage Tourists</h3>
                <p class="text-gray-500 mt-1">View and track tourist accounts</p>
            </a>
            <a href="{{ route('admin.reservations.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <h3 class="text-xl font-semibold text-gray-800">Manage Reservations</h3>
                <p class="text-gray-500 mt-1">Monitor booked tours</p>
            </a>
            <a href="{{ route('admin.packages.index') }}" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <h3 class="text-xl font-semibold text-gray-800">Manage Packages</h3>
                <p class="text-gray-500 mt-1">Add and edit tour packages</p>
            </a>
        </div>

        <!-- Logout Button -->
        <div class="mt-8 text-right">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition">
                    Logout
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
