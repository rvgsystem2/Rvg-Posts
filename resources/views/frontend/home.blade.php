@extends('components.main')

@section('content')
    <div class="flex flex-col h-screen bg-gray-100">

        <!-- Header -->
        <div class="bg-red-500 text-white py-3 px-4 flex items-center shadow-md">
            <button onclick="goBack()" class="mr-4 hover:opacity-80 transition">
                <span class="material-icons text-white text-2xl">arrow_back</span>
            </button>
            <h1 class="text-xl font-semibold">Home</h1>
        </div>

        <!-- Search Bar -->
        <div class="bg-white px-4 py-3 shadow-md">
            <div class="relative">
                <input type="text" placeholder="Search..."
                    class="w-full p-3 pl-10 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-400 focus:outline-none shadow-sm">
                <span class="material-icons absolute left-3 top-3 text-gray-500">search</span>
            </div>
        </div>

        <!-- Chat List -->
        <div class="flex-1 overflow-y-auto pb-20">
            <div class="p-4 space-y-6">

                <!-- Chat Item -->
                <div class="flex items-center bg-white p-4 rounded-lg shadow-md hover:bg-gray-50 transition space-x-4">
                    <img src="{{ asset('assets/img/logo.png') }}"
                        class="w-12 h-12 rounded-full object-cover border border-gray-300">
                    <div class="flex-1">
                        <h2 class="font-semibold text-gray-900">RVG</h2>
                        <p class="text-gray-600 text-sm truncate">Sent an image</p>
                    </div>
                    <button class="text-gray-500 hover:text-gray-600 transition p-2">
                        <span class="material-icons text-xl">call</span>
                    </button>
                    <span class="text-xs text-gray-500">11:39 AM</span>
                </div>

                <!-- Image Message Block -->
                <div class="bg-white p-4 rounded-lg shadow-md transition hover:shadow-lg space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col items-center w-full">
                            <img src="{{ asset('assets/img/logo.png') }}"
                                onerror="this.onerror=null;this.src='https://via.placeholder.com/300?text=No+Image+Available';"
                                class="w-full rounded-lg object-cover shadow-md border border-gray-300">
                            <p class="text-gray-700 font-bold text-md mt-2">Today Post for Logo</p>
                        </div>
                        <button onclick="shareImage('{{ asset('assets/img/sample.jpg') }}')"
                            class="text-gray-600 p-2 rounded-full shadow-md hover:bg-gray-200 transition">
                            <span class="material-icons">share</span>
                        </button>
                    </div>

                    <div class="flex space-x-3 mt-4">
                        <button
                            class="w-1/2 bg-gray-200 text-gray-700 p-3 rounded-lg font-semibold flex items-center justify-center space-x-2 hover:bg-gray-300 transition">
                            <span class="material-icons">cloud_download</span>
                            <span>Download</span>
                        </button>
                        <button
                            class="w-1/2 bg-red-500 text-white p-3 rounded-lg font-semibold flex items-center justify-center space-x-2 hover:bg-red-600 transition">
                            <span class="material-icons">save</span>
                            <span>Save</span>
                        </button>
                    </div>
                    <span class="text-xs text-gray-500 mt-2 block text-right">11:45 AM</span>
                </div>

                <!-- Image Message Block -->
                <div class="bg-white p-4 rounded-lg shadow-md transition hover:shadow-lg space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col items-center w-full">
                            <img src="{{ asset('assets/img/logo.png') }}"
                                onerror="this.onerror=null;this.src='https://via.placeholder.com/300?text=No+Image+Available';"
                                class="w-full rounded-lg object-cover shadow-md border border-gray-300">
                            <p class="text-gray-700 font-bold text-md mt-2">Today Post for Logo</p>
                        </div>
                        <button onclick="shareImage('{{ asset('assets/img/sample.jpg') }}')"
                            class="text-gray-600 p-2 rounded-full shadow-md hover:bg-gray-200 transition">
                            <span class="material-icons">share</span>
                        </button>
                    </div>

                    <div class="flex space-x-3 mt-4">
                        <button
                            class="w-1/2 bg-gray-200 text-gray-700 p-3 rounded-lg font-semibold flex items-center justify-center space-x-2 hover:bg-gray-300 transition">
                            <span class="material-icons">cloud_download</span>
                            <span>Download</span>
                        </button>
                        <button
                            class="w-1/2 bg-red-500 text-white p-3 rounded-lg font-semibold flex items-center justify-center space-x-2 hover:bg-red-600 transition">
                            <span class="material-icons">save</span>
                            <span>Save</span>
                        </button>
                    </div>
                    <span class="text-xs text-gray-500 mt-2 block text-right">11:45 AM</span>
                </div>

                <!-- Text Message with Share -->
                <div class="bg-white p-4 rounded-lg shadow-md transition hover:shadow-lg flex justify-between items-start">
                    <div class="flex-1">
                        <p class="text-gray-800 text-sm mb-2 font-medium">This is a sample chat message sent in the
                            conversation.</p>
                        <span class="text-xs text-gray-500 block text-right">11:45 AM</span>
                    </div>
                    <button onclick="shareMessage('This is a sample chat message')"
                        class="ml-3 text-gray-600 p-2 rounded-full shadow-md hover:bg-gray-200 transition">
                        <span class="material-icons">share</span>
                    </button>
                </div>

                <!-- Chat Conversation -->
                <div class="space-y-4">
                    <div class="flex justify-start">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md max-w-xs">
                            <p class="text-gray-800 text-sm font-medium">Hello! How are you?</p>
                            <span class="text-xs text-gray-500 block text-right">11:45 AM</span>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <div class="bg-red-500 text-white p-4 rounded-lg shadow-md max-w-xs">
                            <p class="text-sm font-medium">I’m good, thank you! What about you?</p>
                            <span class="text-xs text-white block text-right">11:46 AM</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Go Back Function -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <!-- Share Function -->
    <script>
        function shareImage(imageUrl) {
            if (navigator.share) {
                navigator.share({
                    title: 'Shared Image',
                    text: 'Check out this image!',
                    url: imageUrl
                }).catch((error) => console.log('Sharing failed:', error));
            } else {
                alert('Your browser does not support sharing!');
            }
        }
    </script>
@endsection
