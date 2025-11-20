@extends('layouts.app')

@section('content')
    <section class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-blue-50 to-white px-6 py-16">
        <div class="bg-white rounded-2xl shadow-xl p-10 max-w-3xl w-full text-center">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
                Welcome to <span class="text-blue-600">Sagada Tourism</span>
            </h1>

            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Explore the serene beauty of Sagada — from the mysterious hanging coffins to the breathtaking Bomod-ok Falls.
            </p>

            <div class="flex justify-center gap-4 mb-6">
                <a href="{{ route('login') }}" 
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow transition">
                    Login
                </a>
                <a href="{{ route('register') }}" 
                    class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-2 rounded-lg shadow transition">
                    Register
                </a>
            </div>

            <a href="/login"
               class="inline-block bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium px-6 py-3 rounded-full shadow hover:opacity-90 transition">
                Get Started
            </a>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mt-16">
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-xl font-semibold text-blue-600 mb-2">Hanging Coffins</h2>
                <p class="text-gray-600 text-sm">
                    A glimpse into Sagada’s ancient burial tradition — a must-see cultural wonder.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-xl font-semibold text-blue-600 mb-2">Bomod-ok Falls</h2>
                <p class="text-gray-600 text-sm">
                    Hike through rice terraces and enjoy the majestic falls of Northern Luzon.
                </p>
            </div>
        </div>
    </section>
@endsection
