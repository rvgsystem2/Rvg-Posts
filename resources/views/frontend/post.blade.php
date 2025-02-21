@extends('components.main')

@section('content')

<div class="flex flex-col h-screen bg-gray-100">

    <!-- Header -->
    <div class="bg-gradient-to-r from-red-500 to-red-600 text-white py-4 px-5 flex items-center shadow-md">
        <h1 class="text-xl font-semibold">🏆 Real Victory Posts</h1>
    </div>

    <!-- Posts Container -->
    <div class="p-5 space-y-6 overflow-y-auto pb-20">

        <!-- Real Victory Post 1 with Image -->
        <div class="bg-white p-5 rounded-lg shadow-md">
            <div class="flex items-center space-x-3 mb-3">
                <div>
                    <h2 class="font-semibold text-gray-900">Real Victory Posts</h2>
                    <span class="text-xs text-gray-500">1 hour ago</span>
                </div>
            </div>
            
            <img src="{{asset('assets/img/logo.png')}}" class="w-full h-60 object-cover rounded-lg mb-3" alt="Victory Image">
            
            <p class="text-gray-800 text-sm mb-3">"Finally completed my first marathon! Real victory moment!"</p>

            <!-- Actions (Like & Share) -->
            <div class="flex justify-between">
                <button class="text-gray-500 hover:text-red-500 flex items-center space-x-1">
                    <span class="material-icons">favorite_border</span>
                    <span>Like</span>
                </button>
                
                <button onclick="sharePost('Finally completed my first marathon! Real victory moment!')" class="text-gray-500 hover:text-gray-700 flex items-center space-x-1">
                    <span class="material-icons">share</span>
                    <span>Share</span>
                </button>
            </div>
        </div>

        <!-- Real Victory Post 2 with Image -->
        <div class="bg-white p-5 rounded-lg shadow-md">
            <div class="flex items-center space-x-3 mb-3">
                <div>
                    <h2 class="font-semibold text-gray-900">Real Victory Posts</h2>
                    <span class="text-xs text-gray-500">3 hours ago</span>
                </div>
            </div>
            
            <img src="https://via.placeholder.com/300" class="w-full h-60 object-cover rounded-lg mb-3" alt="Dream Job Image">
            
            <p class="text-gray-800 text-sm mb-3">"Landed my dream job after years of hard work! #RealVictory"</p>

            <div class="flex justify-between">
                <button class="text-gray-500 hover:text-red-500 flex items-center space-x-1">
                    <span class="material-icons">favorite_border</span>
                    <span>Like</span>
                </button>
                
                <button onclick="sharePost('Landed my dream job after years of hard work! #RealVictory')" class="text-gray-500 hover:text-gray-700 flex items-center space-x-1">
                    <span class="material-icons">share</span>
                    <span>Share</span>
                </button>
            </div>
        </div>

    </div>
</div>

<script>
    function sharePost(message) {
        if (navigator.share) {
            navigator.share({
                title: 'Real Victory Post',
                text: message
            }).catch((error) => console.log('Sharing failed:', error));
        } else {
            alert('Your browser does not support sharing!');
        }
    }
</script>

@endsection
