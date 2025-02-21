@extends('components.main')

@section('content')
    <div class="flex flex-col h-screen bg-gray-100">

        <!-- Header -->
        <div class="bg-gradient-to-r from-red-500 to-red-600 text-white py-4 px-5 flex items-center shadow-md">
            <button onclick="goBack()" class="mr-4 hover:opacity-80 transition">
                <span class="material-icons text-white text-2xl">arrow_back</span>
            </button>
            <h1 class="text-xl font-semibold">Community</h1>
        </div>

        <!-- Create Community Button -->
        <div class="p-4">
            <button
                class="w-full bg-red-500 text-white py-3 rounded-lg font-semibold shadow-md hover:bg-red-600 transition flex items-center justify-center space-x-2">
                <span class="material-icons">add_circle_outline</span>
                <span>Create Community</span>
            </button>
        </div>

        <!-- Community List -->
        <div class="p-4 space-y-6 overflow-y-auto pb-20">

            <!-- Featured Communities -->
            <div>
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">🔥 Featured Communities</h2>
                    <a href="#" class="text-red-500 text-sm font-semibold hover:underline">View More</a>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-3">
                    <!-- Community Card -->
                    @foreach ([['Tech Enthusiasts', '10K Members', 'https://via.placeholder.com/80'], ['Fitness Freaks', '7K Members', 'https://via.placeholder.com/80']] as $community)
                        <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center">
                            <img src="{{ $community[2] }}" class="w-20 h-20 rounded-full mb-2">
                            <h3 class="font-semibold text-gray-900">{{ $community[0] }}</h3>
                            <p class="text-xs text-gray-500">{{ $community[1] }}</p>
                            <button
                                class="mt-2 bg-red-500 text-white px-3 py-1 rounded-md text-sm shadow-md hover:bg-red-600 transition">
                                Join
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Joined Communities -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">👥 My Communities</h2>
                <div class="space-y-3 mt-3">
                    <!-- Joined Community -->
                    @foreach ([['Gaming Zone', '5K Members', 'https://via.placeholder.com/50'], ['Photography Club', '2K Members', 'https://via.placeholder.com/50']] as $joined)
                        <div class="bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="{{ $joined[2] }}" class="w-12 h-12 rounded-full">
                                <div>
                                    <h3 class="font-semibold text-gray-900">{{ $joined[0] }}</h3>
                                    <p class="text-xs text-gray-500">{{ $joined[1] }}</p>
                                </div>
                            </div>
                            <button
                                class="bg-gray-300 text-gray-700 px-3 py-1 rounded-md text-sm shadow-md hover:bg-gray-400 transition">
                                Leave
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
