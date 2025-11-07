@extends('layouts.master')
    @section('add-button')
    <div class="mb-4 text-center">
        <a href="/touristspot/{{ $touristspot->spot_id }}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">EDIT Tourist Spot</a>
        <form action="/touristspot/{{ $touristspot->spot_id }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="return confirm('Are you sure you want to delete this tourist spot?')">DELETE TOURIST SPOT</button>
        </form>
    </div>
    @endsection
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $touristspot->spot_name }}</h1>
        <p class="text-gray-600 mb-6">{{ $touristspot->location }}</p>

        <div class="bg-white border border-gray-200 rounded-lg p-6">
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Description</h2>
                <p class="text-gray-700">{{ $touristspot->description }}</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <h3 class="text-sm font-medium text-gray-900 mb-1">Opening Hours</h3>
                    <p class="text-gray-600">{{ $touristspot->opening_hours ?? 'Not specified' }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-900 mb-1">Contact</h3>
                    <p class="text-gray-600">{{ $touristspot->contact_info ?? 'Not available' }}</p>
                </div>
            </div>

            <div class="mt-6 flex space-x-4">
                <a href="/touristspot" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition duration-200">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
