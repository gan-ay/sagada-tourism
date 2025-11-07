@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Edit Tourist Spot</h1>

        <form method="POST" action="/touristspot/{{ $touristspot->spot_id }}" class="">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="spot_name" class="block text-sm font-medium text-gray-700 mb-2">Spot Name</label>
                <input type="text" name="spot_name" id="spot_name" value="{{ $touristspot->spot_name }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                <input type="text" name="location" id="location" value="{{ $touristspot->location }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $touristspot->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="opening_hours" class="block text-sm font-medium text-gray-700 mb-2">Opening Hours</label>
                <input type="text" name="opening_hours" id="opening_hours" value="{{ $touristspot->opening_hours }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="contact_info" class="block text-sm font-medium text-gray-700 mb-2">Contact Info</label>
                <input type="text" name="contact_info" id="contact_info" value="{{ $touristspot->contact_info }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="image_url" class="block text-sm font-medium text-gray-700 mb-2">Image URL</label>
                <input type="url" name="image_url" id="image_url" value="{{ $touristspot->image_url }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-end space-x-4">
                <a href="/touristspot/{{ $touristspot->spot_id }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition duration-200">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">Update Tourist Spot</button>
            </div>
        </form>
    </div>
</div>
@endsection
