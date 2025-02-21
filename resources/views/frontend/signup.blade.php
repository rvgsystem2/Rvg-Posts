@extends('components.main')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-b from-red-500 to-red-300 px-4">
        <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-6">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-gray-900">Create an Account</h2>
            <p class="text-sm text-gray-600 text-center mt-1">Sign up to continue</p>

            <form action="" method="POST" class="mt-5 space-y-3">
                @csrf

                <!-- Full Name -->
                <input type="text" name="name"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none"
                    placeholder="Full Name" required>

                <!-- Email -->
                <input type="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none"
                    placeholder="Email Address" required>

                <!-- Mobile Number -->
                <div
                    class="flex items-center border border-gray-300 rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-red-500">
                    <span class="px-3 py-2 bg-gray-200 text-gray-700">+91</span>
                    <input type="text" name="mobile" class="w-full p-2 text-sm focus:outline-none focus:ring-0"
                        placeholder="Mobile Number" required>
                </div>

                <!-- Signup Button -->
                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-lg shadow-md transition-all">
                    Send Details
                </button>
            </form>

            <!-- Back to Login -->
            <div class="mt-4 text-center">
                <a href="{{ route('Login') }}" class="text-red-600 font-semibold hover:underline">
                    ← Back to Login
                </a>
            </div>
        </div>
    </div>
@endsection
