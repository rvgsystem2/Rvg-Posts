<div class="fixed bottom-0 left-0 w-full bg-white shadow-md border-t">
    <div class="flex justify-around items-center py-3 text-gray-700">

        <!-- Posts -->
        <a href="{{ route('posts') }}"
            class="flex flex-col items-center {{ Request::routeIs('posts') ? 'text-red-500' : 'text-gray-700' }}">
            <span class="material-icons text-2xl">article</span>
            <span class="text-xs">Posts</span>
        </a>

        <!-- Support -->
        <a href="{{ route('support') }}"
            class="flex flex-col items-center {{ Request::routeIs('support') ? 'text-red-500' : 'text-gray-700' }}">
            <span class="material-icons text-2xl">support_agent</span>
            <span class="text-xs">Support</span>
        </a>

        <!-- Home (Middle Icon) -->
        <a href="{{ route('home') }}"
            class="flex flex-col items-center bg-red-500 text-white px-4 py-2 rounded-full shadow-lg">
            <span class="material-icons text-3xl">home</span>
        </a>

        <!-- Profile -->
        <a href="{{ route('profile') }}"
            class="flex flex-col items-center {{ Request::routeIs('profile') ? 'text-red-500' : 'text-gray-700' }}">
            <span class="material-icons text-2xl">person</span>
            <span class="text-xs">Profile</span>
        </a>

        <!-- Community -->
        <a href="{{ route('community') }}"
            class="flex flex-col items-center {{ Request::routeIs('community') ? 'text-red-500' : 'text-gray-700' }}">
            <span class="material-icons text-2xl">groups</span>
            <span class="text-xs">Community</span>
        </a>


    </div>
</div>
