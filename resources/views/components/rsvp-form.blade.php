<section id="rsvp" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                RSVP
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto"></div>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
                Konfirmasi kehadiran Anda untuk acara pernikahan kami
            </p>
        </div>
        
        <!-- RSVP Form -->
        <div class="max-w-2xl mx-auto" data-aos="fade-up">
            <form id="rsvpForm" class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-3xl shadow-xl p-8 md:p-12">
                <!-- Personal Information -->
                <div class="mb-8">
                    <h3 class="font-playfair text-2xl font-bold text-gray-800 mb-6 text-center">
                        Informasi Pribadi
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Lengkap *
                            </label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                                   placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email *
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                                   placeholder="contoh@email.com">
                        </div>
                    </div>
                    <div class="mt-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Nomor Telepon
                        </label>
                        <input type="tel" id="phone" name="phone"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300"
                               placeholder="+62 812-3456-7890">
                    </div>
                </div>
                
                <!-- Attendance -->
                <div class="mb-8">
                    <h3 class="font-playfair text-2xl font-bold text-gray-800 mb-6 text-center">
                        Konfirmasi Kehadiran
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <input type="radio" id="attendance-yes" name="attendance" value="yes" required
                                   class="w-5 h-5 text-pink-600 focus:ring-pink-500">
                            <label for="attendance-yes" class="flex items-center space-x-3 cursor-pointer">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-gray-800">Ya, saya akan hadir</span>
                            </label>
                        </div>
                        <div class="flex items-center space-x-4">
                            <input type="radio" id="attendance-no" name="attendance" value="no" required
                                   class="w-5 h-5 text-pink-600 focus:ring-pink-500">
                            <label for="attendance-no" class="flex items-center space-x-3 cursor-pointer">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-gray-800">Maaf, saya tidak bisa hadir</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Number of Guests -->
                <div class="mb-8" id="guestsSection" style="display: none;">
                    <h3 class="font-playfair text-2xl font-bold text-gray-800 mb-6 text-center">
                        Jumlah Tamu
                    </h3>
                    <div class="text-center">
                        <label for="guests" class="block text-sm font-medium text-gray-700 mb-4">
                            Berapa orang yang akan hadir?
                        </label>
                        <div class="flex items-center justify-center space-x-4">
                            <button type="button" onclick="decreaseGuests()" 
                                    class="w-12 h-12 bg-pink-500 text-white rounded-full flex items-center justify-center hover:bg-pink-600 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                            <input type="number" id="guests" name="guests" value="1" min="1" max="5"
                                   class="w-20 text-center text-2xl font-bold text-gray-800 border-2 border-pink-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <button type="button" onclick="increaseGuests()"
                                    class="w-12 h-12 bg-pink-500 text-white rounded-full flex items-center justify-center hover:bg-pink-600 transition-colors duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Maksimal 5 orang per undangan</p>
                    </div>
                </div>
                
                <!-- Event Preference -->
                <div class="mb-8" id="eventPreference" style="display: none;">
                    <h3 class="font-playfair text-2xl font-bold text-gray-800 mb-6 text-center">
                        Acara yang Akan Dihadiri
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="event-akad" name="events[]" value="akad"
                                   class="w-5 h-5 text-pink-600 focus:ring-pink-500 rounded">
                            <label for="event-akad" class="text-lg text-gray-800 cursor-pointer">
                                Akad Nikah (08:00 - 10:00 WIB)
                            </label>
                        </div>
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="event-resepsi" name="events[]" value="resepsi"
                                   class="w-5 h-5 text-pink-600 focus:ring-pink-500 rounded">
                            <label for="event-resepsi" class="text-lg text-gray-800 cursor-pointer">
                                Resepsi (11:00 - 15:00 WIB)
                            </label>
                        </div>
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" id="event-both" name="events[]" value="both"
                                   class="w-5 h-5 text-pink-600 focus:ring-pink-500 rounded">
                            <label for="event-both" class="text-lg text-gray-800 cursor-pointer">
                                Kedua Acara
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Message -->
                <div class="mb-8">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        Pesan & Doa (Opsional)
                    </label>
                    <textarea id="message" name="message" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-300 resize-none"
                              placeholder="Tulis pesan dan doa untuk kedua mempelai..."></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                            class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-12 py-4 rounded-full font-semibold text-lg hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Kirim RSVP
                    </button>
                </div>
            </form>
        </div>
        
        <!-- RSVP Stats -->
        <div class="mt-16 text-center" data-aos="fade-up">
            <h3 class="font-playfair text-2xl font-bold text-gray-800 mb-8">
                Statistik RSVP
            </h3>
            <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <div class="text-4xl font-bold text-pink-600 mb-2">150</div>
                    <div class="text-gray-600">Total Undangan</div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">120</div>
                    <div class="text-gray-600">Akan Hadir</div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <div class="text-4xl font-bold text-purple-600 mb-2">30</div>
                    <div class="text-gray-600">Belum Konfirmasi</div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Attendance radio button handler
        const attendanceRadios = document.querySelectorAll('input[name="attendance"]');
        const guestsSection = document.getElementById('guestsSection');
        const eventPreference = document.getElementById('eventPreference');
        
        attendanceRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    guestsSection.style.display = 'block';
                    eventPreference.style.display = 'block';
                    guestsSection.style.animation = 'fadeIn 0.5s ease-in';
                    eventPreference.style.animation = 'fadeIn 0.5s ease-in';
                } else {
                    guestsSection.style.display = 'none';
                    eventPreference.style.display = 'none';
                }
            });
        });
        
        // Guest counter functions
        function increaseGuests() {
            const guestsInput = document.getElementById('guests');
            const currentValue = parseInt(guestsInput.value);
            if (currentValue < 5) {
                guestsInput.value = currentValue + 1;
            }
        }
        
        function decreaseGuests() {
            const guestsInput = document.getElementById('guests');
            const currentValue = parseInt(guestsInput.value);
            if (currentValue > 1) {
                guestsInput.value = currentValue - 1;
            }
        }
        
        // Form validation
        document.getElementById('rsvpForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const attendance = formData.get('attendance');
            const guests = formData.get('guests');
            const message = formData.get('message');
            
            // Show success message
            showNotification('Terima kasih! RSVP Anda telah berhasil dikirim.', 'success');
            
            // Reset form
            this.reset();
            guestsSection.style.display = 'none';
            eventPreference.style.display = 'none';
        });
        
        // Notification function
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
    </script>
</section> 