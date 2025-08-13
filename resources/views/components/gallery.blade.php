<section id="gallery" class="py-20 bg-gradient-to-br from-pink-50 to-purple-50">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Galeri Foto
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto"></div>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
                Kenangan indah kami yang ingin kami bagikan dengan Anda
            </p>
        </div>
        
        <!-- Gallery Filter -->
        <div class="flex justify-center mb-12" data-aos="fade-up">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn active bg-pink-500 text-white px-6 py-2 rounded-full font-medium transition-all duration-300" data-filter="all">
                    Semua
                </button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-pink-500 hover:text-white transition-all duration-300" data-filter="prewedding">
                    Prewedding
                </button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-pink-500 hover:text-white transition-all duration-300" data-filter="engagement">
                    Tunangan
                </button>
                <button class="filter-btn bg-white text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-pink-500 hover:text-white transition-all duration-300" data-filter="daily">
                    Keseharian
                </button>
            </div>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto" data-aos="fade-up">
            <!-- Gallery Item 1 -->
            <div class="gallery-item prewedding group cursor-pointer" onclick="openLightbox(0)">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         alt="Prewedding 1" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-semibold">Prewedding Session</h4>
                            <p class="text-sm opacity-90">Taman Bunga Nusantara</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 2 -->
            <div class="gallery-item engagement group cursor-pointer" onclick="openLightbox(1)">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" 
                         alt="Engagement 1" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-semibold">Engagement Party</h4>
                            <p class="text-sm opacity-90">Restoran Romantis</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 3 -->
            <div class="gallery-item daily group cursor-pointer" onclick="openLightbox(2)">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                         alt="Daily 1" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-semibold">Coffee Date</h4>
                            <p class="text-sm opacity-90">Kedai Kopi Favorit</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 4 -->
            <div class="gallery-item prewedding group cursor-pointer" onclick="openLightbox(3)">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1606216794074-735e91aa2c92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                         alt="Prewedding 2" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-semibold">Beach Session</h4>
                            <p class="text-sm opacity-90">Pantai Indah</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 5 -->
            <div class="gallery-item engagement group cursor-pointer" onclick="openLightbox(4)">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         alt="Engagement 2" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-semibold">Ring Exchange</h4>
                            <p class="text-sm opacity-90">Taman Kota</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 6 -->
            <div class="gallery-item daily group cursor-pointer" onclick="openLightbox(5)">
                <div class="relative overflow-hidden rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                         alt="Daily 2" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-semibold">Weekend Trip</h4>
                            <p class="text-sm opacity-90">Gunung Bromo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- View More Button -->
        <div class="text-center mt-12" data-aos="fade-up">
            <button class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-3 rounded-full font-medium hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Lihat Semua Foto
            </button>
        </div>
    </div>
    
    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center">
        <div class="relative max-w-4xl max-h-full mx-4">
            <button onclick="closeLightbox()" class="absolute top-4 right-4 text-white hover:text-gray-300 z-10">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
            <img id="lightbox-img" src="" alt="Gallery Image" class="max-w-full max-h-full object-contain">
        </div>
    </div>
    
    <script>
        // Gallery Filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active', 'bg-pink-500', 'text-white'));
                filterBtns.forEach(b => b.classList.add('bg-white', 'text-gray-700'));
                
                // Add active class to clicked button
                btn.classList.add('active', 'bg-pink-500', 'text-white');
                btn.classList.remove('bg-white', 'text-gray-700');
                
                const filter = btn.getAttribute('data-filter');
                
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeIn 0.5s ease-in';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // Lightbox
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const galleryImages = [
            'https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80',
            'https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
            'https://images.unsplash.com/photo-1606216794074-735e91aa2c92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
            'https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'
        ];
        
        function openLightbox(index) {
            lightboxImg.src = galleryImages[index];
            lightbox.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeLightbox() {
            lightbox.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close lightbox when clicking outside
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
        
        // Close lightbox with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    </script>
</section> 