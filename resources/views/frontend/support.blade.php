@extends('components.main')

@section('content')
    <div class="flex flex-col h-screen bg-gray-100">

        <!-- Header -->
        <div class="bg-gradient-to-r from-red-500 to-red-600 text-white py-4 px-5 flex items-center shadow-md">
            <button onclick="goBack()" class="mr-4 hover:opacity-80 transition">
                <span class="material-icons text-white text-2xl">arrow_back</span>
            </button>
            <h1 class="text-xl font-semibold">Help & Support</h1>
        </div>

        <!-- Support Content -->
        <div class="p-5 space-y-6 flex-1 overflow-y-auto">

            <!-- FAQ Section -->
            <div class="bg-white p-5 rounded-xl shadow-md">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">❓ Frequently Asked Questions</h2>

                @foreach ([['How do I reset my password?', 'Go to Settings > Account > Reset Password.'], ['How do I delete my account?', 'Go to Settings > Account > Delete Account.'], ['How to contact customer support?', 'You can reach us at support@rvgchat.com.']] as $index => $faq)
                    <div class="border-b py-3">
                        <button class="flex justify-between w-full text-left font-medium text-gray-900"
                            onclick="toggleFAQ({{ $index }})">
                            <span>{{ $faq[0] }}</span>
                            <span class="faq-icon transition-transform transform duration-300"
                                id="icon{{ $index }}">+</span>
                        </button>
                        <p id="faq{{ $index }}" class="hidden text-gray-600 mt-2 text-sm">{{ $faq[1] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Contact Support -->
            <div class="bg-white p-5 rounded-xl shadow-md">
                <h2 class="text-lg font-semibold mb-3 text-gray-800">📩 Need More Help?</h2>

                <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg hover:bg-gray-200 transition">
                    <span class="material-icons text-red-500">email</span>
                    <a href="mailto:support@rvgchat.com" class="text-gray-900 font-medium">support@rvgchat.com</a>
                </div>

                <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded-lg mt-3 hover:bg-gray-200 transition">
                    <span class="material-icons text-red-500">phone</span>
                    <a href="tel:+919876543210" class="text-gray-900 font-medium">+91 98765 43210</a>
                </div>
            </div>

        </div>

    </div>

    <script>
        function goBack() {
            window.history.back();
        }

        function toggleFAQ(id) {
            let answer = document.getElementById("faq" + id);
            let icon = document.getElementById("icon" + id);
            answer.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
            icon.textContent = icon.textContent === "+" ? "−" : "+";
        }
    </script>
    
@endsection
