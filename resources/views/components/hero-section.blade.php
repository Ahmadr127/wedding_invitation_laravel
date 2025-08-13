<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-pink-100 via-white to-purple-100">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Floating Hearts -->
        <div class="absolute top-20 left-10 floating opacity-20">
            <svg class="w-8 h-8 text-pink-300 md:w-12 md:h-12" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
        </div>
        <div class="absolute top-32 right-16 floating opacity-15" style="animation-delay: 1s;">
            <svg class="w-6 h-6 text-purple-300 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
        </div>
        <div class="absolute bottom-32 left-20 floating opacity-10" style="animation-delay: 2s;">
            <svg class="w-10 h-10 text-pink-200 md:w-16 md:h-16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
        </div>
        
        <!-- Decorative Circles -->
        <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-gradient-to-r from-pink-200 to-purple-200 rounded-full opacity-20 blur-xl md:w-48 md:h-48"></div>
        <div class="absolute bottom-1/4 left-1/4 w-24 h-24 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full opacity-15 blur-xl md:w-40 md:h-40"></div>
    </div>
    
    <!-- Main Content -->
    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <!-- Wedding Icon -->
        <div class="mb-6 md:mb-8" data-aos="fade-down" data-aos-delay="200">
            <div class="inline-flex items-center justify-center w-16 h-16 md:w-20 md:h-20 bg-gradient-to-r from-pink-400 to-purple-500 rounded-full shadow-lg">
                <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1H5C3.89 1 3 1.89 3 3V21C3 22.11 3.89 23 5 23H19C20.11 23 21 22.11 21 21V9M19 9H14V4H5V21H19V9Z"/>
                </svg>
            </div>
        </div>
        
        <!-- Main Title -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-playfair font-bold text-gray-800 mb-4 md:mb-6" data-aos="fade-up" data-aos-delay="300">
            Wedding Invitation
        </h1>
        
        <!-- Couple Names -->
        <div class="mb-6 md:mb-8" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-playfair font-semibold text-gray-700 mb-2">
                Ahmad & Siti
            </h2>
            <p class="text-sm sm:text-base md:text-lg text-gray-600">
                Memohon kehadiran Bapak/Ibu/Saudara/i
            </p>
        </div>
        
        <!-- Event Date -->
        <div class="mb-8 md:mb-12" data-aos="fade-up" data-aos-delay="500">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-xl border border-white/20">
                <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-2">Akan diselenggarakan pada:</p>
                <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-playfair font-bold text-gray-800">
                    Rabu, 25 Desember 2024
                </p>
                <p class="text-base sm:text-lg md:text-xl text-gray-600 mt-1">
                    Pukul 10:00 WIB
                </p>
            </div>
        </div>
        
        <!-- Countdown Timer -->
        <div class="mb-8 md:mb-12" data-aos="fade-up" data-aos-delay="600">
            <h3 class="text-lg sm:text-xl md:text-2xl font-playfair font-semibold text-gray-700 mb-4 md:mb-6">
                Menghitung Hari
            </h3>
            <div class="grid grid-cols-4 gap-3 sm:gap-4 md:gap-6 max-w-md mx-auto">
                <!-- Days -->
                <div class="bg-gradient-to-br from-pink-400 to-purple-500 rounded-xl p-3 md:p-4 text-center shadow-lg">
                    <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white" id="countdown-days">00</div>
                    <div class="text-xs sm:text-sm md:text-base text-pink-100 font-medium">Hari</div>
                </div>
                <!-- Hours -->
                <div class="bg-gradient-to-br from-purple-400 to-pink-500 rounded-xl p-3 md:p-4 text-center shadow-lg">
                    <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white" id="countdown-hours">00</div>
                    <div class="text-xs sm:text-sm md:text-base text-purple-100 font-medium">Jam</div>
                </div>
                <!-- Minutes -->
                <div class="bg-gradient-to-br from-pink-400 to-purple-500 rounded-xl p-3 md:p-4 text-center shadow-lg">
                    <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white" id="countdown-minutes">00</div>
                    <div class="text-xs sm:text-sm md:text-base text-pink-100 font-medium">Menit</div>
                </div>
                <!-- Seconds -->
                <div class="bg-gradient-to-br from-purple-400 to-pink-500 rounded-xl p-3 md:p-4 text-center shadow-lg">
                    <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white" id="countdown-seconds">00</div>
                    <div class="text-xs sm:text-sm md:text-base text-purple-100 font-medium">Detik</div>
                </div>
            </div>
        </div>
        
        <!-- Call to Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="700">
            <a href="#couple" class="touch-button bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-3 md:px-10 md:py-4 rounded-full font-semibold text-base md:text-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                </svg>
                Lihat Undangan
            </a>
            <a href="#rsvp" class="touch-button bg-white text-gray-800 px-8 py-3 md:px-10 md:py-4 rounded-full font-semibold text-base md:text-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 border-2 border-pink-200 hover:border-pink-300 flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                RSVP Sekarang
            </a>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce" data-aos="fade-up" data-aos-delay="800">
            <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-gray-400 rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </div>
</section> 