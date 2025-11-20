@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center min-h-screen bg-gray-50">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">Login</h2>

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <input name="email" type="email" placeholder="Email" required />
            <input name="password" type="password" placeholder="Password" required />
            <label>
              <input type="checkbox" name="remember"> Remember me
            </label>
            <button type="submit">Login as Admin</button>
        </form>


        <p class="text-center mt-4 text-sm text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
        </p>
    </div>
</section>
@endsection
