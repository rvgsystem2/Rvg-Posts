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

        <form action="#" method="POST" class="mt-6 space-y-5">
            <!-- Mobile/Email Input -->
            <label class="block text-sm font-medium text-gray-700">Mobile Number or Email</label>
            <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-red-500">
                <span class="px-4 py-3 bg-gray-200 text-gray-700">+91</span>
                <input type="text" name="contact" 
                       class="w-full p-3 text-lg focus:outline-none focus:ring-0" 
                       placeholder="Enter your mobile number or email" required>
            </div>

            <!-- Submit Button -->
            <button type="button" id="loginButton"
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg shadow-lg transition-all">
                Send OTP
            </button>
        </form>

        <!-- Signup Link -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">New here? <a href="#" class="text-red-600 font-semibold">Create an account</a></p>
        </div>

        <!-- Footer -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">By continuing, you agree to our <a href="#" class="text-red-600 font-semibold">Terms & Privacy Policy</a>.</p>
        </div>

    </div>
</div>

<!-- PIN Setup Modal -->
<div id="pinModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden px-4">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm relative">
        
        <!-- Close Button (X) -->
        <button id="closeModal" class="absolute top-2 right-3 text-gray-600 hover:text-red-600 text-2xl font-bold">&times;</button>
        
        <h3 class="text-lg font-semibold text-center mb-4">Set Your 4-Digit PIN</h3>
        <form id="pinForm">
            <div>
                <label class="block text-sm font-medium text-gray-700">Enter PIN</label>
                <input type="password" id="pin" maxlength="4" class="w-full p-3 border rounded-lg text-center text-xl" required>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">Confirm PIN</label>
                <input type="password" id="confirmPin" maxlength="4" class="w-full p-3 border rounded-lg text-center text-xl" required>
            </div>
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg shadow-lg mt-4">Set PIN</button>
        </form>
    </div>
</div>

<!-- JavaScript for Modal -->
<script>
    const modal = document.getElementById('pinModal');
    const loginButton = document.getElementById('loginButton');
    const closeModal = document.getElementById('closeModal');

    // Show Modal
    loginButton.addEventListener('click', function () {
        modal.classList.remove('hidden');
    });

    // Close Modal When Clicking "X"
    closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    // Close Modal When Clicking Outside
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });

    // Handle PIN Submission
    document.getElementById('pinForm').addEventListener('submit', function (e) {
        e.preventDefault();

        let pin = document.getElementById('pin').value;
        let confirmPin = document.getElementById('confirmPin').value;

        if (pin.length !== 4 || confirmPin.length !== 4) {
            alert("PIN must be exactly 4 digits.");
            return;
        }

        if (pin !== confirmPin) {
            alert("PINs do not match. Please try again.");
            return;
        }

        

        alert("PIN set successfully!");
        modal.classList.add('hidden');
    });
</script>

@endsection
