e@extends('layouts.master')
e
@section('content')
<section class="text-center py-24 px-6 bg-gradient-to-b from-yellow-50 to-white rounded-2xl shadow-md">
    <h1 class="text-3xl font-bold text-yellow-600 mb-4">Contact Us</h1>
    <p class="text-gray-600 mb-8">
        Have questions about your Sagada trip? We’d love to help you plan your adventure.
    </p>

    <form class="max-w-md mx-auto bg-white rounded-xl shadow p-6">
        <div class="mb-4 text-left">
            <label class="block text-gray-700 text-sm font-medium mb-2">Name</label>
            <input type="text" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="mb-4 text-left">
            <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
            <input type="email" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="mb-4 text-left">
            <label class="block text-gray-700 text-sm font-medium mb-2">Message</label>
            <textarea class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
        </div>
        <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition">
            Send Message
        </button>
    </form>
</section>
@endsection
