@extends('layouts.app')

@section('content')
    <main>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl md:text-4xl font-bold text-center text-gray-800 mb-6">Get in Touch</h1>
            <p class="text-gray-600 text-center mb-8">
                Feel free to reach out to us through our social media channels or leave us a message. We're here to help!
            </p>

            <div class="flex flex-wrap justify-center gap-8 mb-8">
                <!-- Facebook -->
                <a href="https://facebook.com" target="_blank" class="group">
                    <img class="w-16 h-16 cursor-pointer transition transform group-hover:scale-110"
                        src="{{ asset('images/facebook.png') }}" alt="Facebook">
                    <p class="text-center text-sm text-gray-500 mt-2 group-hover:text-gray-800">Facebook</p>
                </a>
                <!-- Instagram -->
                <a href="https://instagram.com" target="_blank" class="group">
                    <img class="w-16 h-16 cursor-pointer transition transform group-hover:scale-110"
                        src="{{ asset('images/instagram.png') }}" alt="Instagram">
                    <p class="text-center text-sm text-gray-500 mt-2 group-hover:text-gray-800">Instagram</p>
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/" target="_blank" class="group">
                    <img class="w-16 h-16 cursor-pointer transition transform group-hover:scale-110"
                        src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp">
                    <p class="text-center text-sm text-gray-500 mt-2 group-hover:text-gray-800">WhatsApp</p>
                </a>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-lg p-6 shadow-lg">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Send Us a Message</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection

