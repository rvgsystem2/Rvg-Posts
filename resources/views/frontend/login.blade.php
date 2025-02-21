@extends('components.main')

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gradient-to-b from-red-500 to-red-300 px-4">
    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-6">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-14">
        </div>

        <h2 class="text-3xl font-bold text-center text-gray-900">Login with OTP</h2>
        <p class="text-gray-600 text-center mt-2">Enter your mobile number or email to receive an OTP</p>

        <form action="" method="POST" class="mt-6 space-y-5">
            @csrf

            <!-- Mobile/Email Input -->
            <label class="block text-sm font-medium text-gray-700">Mobile Number or Email</label>
            <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-red-500">
                <span class="px-4 py-3 bg-gray-200 text-gray-700">+91</span>
                <input type="text" name="contact" 
                       class="w-full p-3 text-lg focus:outline-none focus:ring-0" 
                       placeholder="Enter your mobile number or email" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg shadow-lg transition-all">
                Send OTP
            </button>
        </form>

        <!-- Signup Link -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">New here? <a href="{{route('signup')}}" class="text-red-600 font-semibold">Create an account</a></p>
        </div>

        <!-- Footer -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">By continuing, you agree to our <a href="#" class="text-red-600 font-semibold">Terms & Privacy Policy</a>.</p>
        </div>

    </div>
</div>

@endsection
