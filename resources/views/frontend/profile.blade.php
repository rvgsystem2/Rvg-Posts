@extends('components.main')

@section('content')
    <div class="flex flex-col h-screen bg-gray-100">

        <!-- Header -->
        <div class="bg-gradient-to-r from-red-500 to-red-600 text-white py-4 px-5 flex items-center shadow-md">
            <button onclick="goBack()" class="mr-4 hover:opacity-80 transition">
                <span class="material-icons text-white text-2xl">arrow_back</span>
            </button>
            <h1 class="text-xl font-semibold">Profile</h1>
        </div>

        <div class="overflow-y-auto pb-20">
            <!-- Profile Section -->
            <div class="flex flex-col items-center bg-white py-6 shadow-md">
                <img src="{{ asset('assets/img/logo.png') }}"
                    class="w-24 h-24 rounded-full border-4 border-gray-300 shadow-md">
                <h2 class="text-xl font-bold mt-3">Real Victory Groups</h2>
                <p class="text-gray-600 text-sm">Available</p>
            </div>

            <!-- Profile Options -->
            <div class="p-4 space-y-4">

                <!-- About Section -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <p class="text-gray-500 text-sm">About</p>
                    <p class="text-gray-900 font-semibold">Hey there! I'm using RVG Chat</p>
                </div>

                <!-- Phone Number -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <p class="text-gray-500 text-sm">Phone</p>
                    <p class="text-gray-900 font-semibold">+91 98765 43210</p>
                </div>

                <!-- Settings -->
                <div class="bg-white rounded-lg shadow-md divide-y">
                    <button class="flex items-center p-4 w-full hover:bg-gray-100">
                        <span class="material-icons text-gray-600 mr-4">lock</span>
                        <span class="text-gray-900">Privacy</span>
                    </button>
                    <button class="flex items-center p-4 w-full hover:bg-gray-100">
                        <span class="material-icons text-gray-600 mr-4">notifications</span>
                        <span class="text-gray-900">Notifications</span>
                    </button>
                    <button class="flex items-center p-4 w-full hover:bg-gray-100">
                        <span class="material-icons text-gray-600 mr-4">palette</span>
                        <span class="text-gray-900">Theme</span>
                    </button>
                </div>

                <!-- Logout Button -->
                <button
                    class="w-full bg-red-500 text-white p-3 rounded-lg font-semibold shadow-md hover:bg-red-600 transition">
                    Logout
                </button>

            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
