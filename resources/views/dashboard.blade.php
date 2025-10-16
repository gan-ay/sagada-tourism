@extends('layouts.dashboard')

@section('content')

{{-- Dashboard Main Section --}}
<section class="bg-gradient-to-b from-blue-50 to-white py-20 min-h-screen">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
            Welcome back, <span class="text-blue-600">{{ Auth::user()->name ?? 'Traveler' }}</span>! 👋
        </h1>
        <p class="text-lg text-gray-600 mb-10">
            You’re now logged in to <span class="font-semibold text-blue-700">Sagada Tourism</span> — your portal to
            adventure, culture, and local experiences.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
             <a href="{{ route('tourist_spot') }}" 
   class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 block text-left hover:bg-blue-50">
    <h3 class="text-xl font-semibold text-blue-700 mb-2">🗺 Explore</h3>
    <p class="text-gray-600 text-sm">Discover Sagada’s top tourist destinations and heritage spots.</p>
</a>
 
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">🏡 Accommodations</h3>
                <p class="text-gray-600 text-sm">Find and book your ideal place to stay — from homestays to inns.</p>
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                <h3 class="text-xl font-semibold text-yellow-700 mb-2">📅 My Trips</h3>
                <p class="text-gray-600 text-sm">View your travel plans, bookings, and recent activity.</p>
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6">
                <h3 class="text-xl font-semibold text-purple-700 mb-2">⚙️ Settings</h3>
                <p class="text-gray-600 text-sm">Manage your profile, privacy preferences, and logout options.</p>
            </div>
        </div>

        <p class="text-sm text-gray-400 mt-12">© 2025 ProyektoBow. All rights reserved.</p>
    </div>
</section>
@endsection
