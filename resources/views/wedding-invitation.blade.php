<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation - Ahmad & Siti</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'playfair': ['Playfair Display', 'serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    screens: {
                        'xs': '475px',
                        '3xl': '1600px',
                    },
                    spacing: {
                        '18': '4.5rem',
                        '88': '22rem',
                        '128': '32rem',
                    }
                }
            }
        }
    </script>
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-poppins { font-family: 'Poppins', sans-serif; }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .heartbeat {
            animation: heartbeat 2s ease-in-out infinite;
        }
        
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        /* Responsive Music Control */
        .music-control {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        @media (max-width: 768px) {
            .music-control {
                top: 15px;
                right: 15px;
                width: 50px;
                height: 50px;
            }
        }
        
        @media (max-width: 480px) {
            .music-control {
                top: 10px;
                right: 10px;
                width: 45px;
                height: 45px;
            }
        }
        
        .music-control:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        
        .music-control.playing {
            animation: rotate 3s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /* Responsive Typography */
        @media (max-width: 640px) {
            .text-responsive-xl {
                font-size: 1.5rem;
                line-height: 2rem;
            }
            .text-responsive-2xl {
                font-size: 1.875rem;
                line-height: 2.25rem;
            }
            .text-responsive-3xl {
                font-size: 2.25rem;
                line-height: 2.5rem;
            }
            .text-responsive-4xl {
                font-size: 2.5rem;
                line-height: 3rem;
            }
        }
        
        @media (max-width: 480px) {
            .text-responsive-xl {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            .text-responsive-2xl {
                font-size: 1.5rem;
                line-height: 2rem;
            }
            .text-responsive-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem;
            }
            .text-responsive-4xl {
                font-size: 2rem;
                line-height: 2.5rem;
            }
        }
        
        /* Mobile Navigation */
        .mobile-nav {
            display: none;
        }
        
        @media (max-width: 768px) {
            .mobile-nav {
                display: block;
            }
            .desktop-nav {
                display: none;
            }
        }
        
        /* Responsive Grid */
        .responsive-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        @media (max-width: 640px) {
            .responsive-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }
        
        /* Touch-friendly buttons */
        @media (max-width: 768px) {
            .touch-button {
                min-height: 44px;
                padding: 12px 20px;
            }
        }
        
        /* Responsive spacing */
        @media (max-width: 640px) {
            .mobile-px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .mobile-py-8 {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
            .mobile-mb-6 {
                margin-bottom: 1.5rem;
            }
        }
        
        /* Envelope Section Styles */
        .envelope-section {
            transition: opacity 1s ease-out, visibility 1s ease-out;
        }
        
        .envelope-section.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .main-content {
            opacity: 0;
            visibility: hidden;
            transition: opacity 1s ease-in, visibility 1s ease-in;
        }
        
        .main-content.visible {
            opacity: 1;
            visibility: visible;
        }
        
        /* Envelope Animation */
        .envelope-animation {
            animation: envelopeOpen 2s ease-in-out forwards;
        }
        
        @keyframes envelopeOpen {
            0% { transform: scale(1) rotate(3deg); }
            50% { transform: scale(1.1) rotate(0deg); }
            100% { transform: scale(0) rotate(-10deg); }
        }
    </style>
</head>
<body class="font-poppins bg-gradient-to-br from-pink-50 via-white to-purple-50 overflow-x-hidden">
    <!-- Floating Animations - Always Active -->
    @include('components.floating-animations')
    
    <!-- Envelope Section -->
    @include('components.envelope-section')
    
    <!-- Main Content (Hidden by default) -->
    <div id="mainContent" class="main-content">
        <!-- Music Control -->
        <div id="musicControl" class="music-control" onclick="toggleMusic()">
            <svg id="musicIcon" class="w-6 h-6 text-gray-700 md:w-7 md:h-7" fill="currentColor" viewBox="0 0 20 20">
                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.369 4.369 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
            </svg>
        </div>
        
        <!-- Audio Element -->
        <audio id="bgMusic" loop>
            <source src="/audio/cintanyaaku.mp3" type="audio/mpeg">
        </audio>
        
        <!-- Hero Section -->
        @include('components.hero-section')
        
        <!-- Couple Section -->
        @include('components.couple-section')
        
        <!-- Event Details -->
        @include('components.event-details')
        
        <!-- Timeline -->
        @include('components.timeline')
        
        <!-- Gallery -->
        @include('components.gallery')
        
        <!-- RSVP Form -->
        @include('components.rsvp-form')
        
        <!-- Location -->
        @include('components.location')
        
        <!-- Footer -->
        @include('components.footer')
    </div>
    
    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS with responsive settings
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: 'mobile' // Disable on mobile for better performance
        });
        
        // Re-enable AOS on larger screens
        function checkScreenSize() {
            if (window.innerWidth > 768) {
                AOS.refresh();
            }
        }
        
        window.addEventListener('resize', checkScreenSize);
        
        // Envelope Section Logic
        let isInvitationOpened = false;
        const envelopeSection = document.getElementById('envelope');
        const mainContent = document.getElementById('mainContent');
        const openInvitationBtn = document.getElementById('openInvitationBtn');
        const loadingAnimation = document.getElementById('loadingAnimation');
        const bgMusic = document.getElementById('bgMusic');
        
        // Open Invitation Function
        function openInvitation() {
            if (isInvitationOpened) return;
            
            isInvitationOpened = true;
            
            // Show loading animation
            loadingAnimation.classList.remove('hidden');
            openInvitationBtn.disabled = true;
            
            // Play music once and let it continue
            bgMusic.currentTime = 0;
            bgMusic.play().then(() => {
                // After 3 seconds, show main content (music continues playing)
                setTimeout(() => {
                    // Hide envelope section with animation
                    envelopeSection.classList.add('hidden');
                    
                    // Show main content
                    setTimeout(() => {
                        mainContent.classList.add('visible');
                        
                        // Initialize AOS for main content
                        AOS.refresh();
                        
                        // Music is already playing, no need to restart
                    }, 500);
                }, 3000); // Wait 3 seconds before showing main content
            }).catch(e => {
                console.log('Music play failed:', e);
                // If music play fails, proceed directly
                setTimeout(() => {
                    envelopeSection.classList.add('hidden');
                    mainContent.classList.add('visible');
                    AOS.refresh();
                    
                    // Try to start music
                    bgMusic.play().catch(e => console.log('Main music play failed:', e));
                }, 500);
            });
        }
        
        // Event Listeners
        openInvitationBtn.addEventListener('click', openInvitation);
        
        // Music Control
        let isPlaying = false;
        const musicControl = document.getElementById('musicControl');
        const musicIcon = document.getElementById('musicIcon');
        
        function toggleMusic() {
            if (isPlaying) {
                bgMusic.pause();
                musicControl.classList.remove('playing');
                musicIcon.innerHTML = '<path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.369 4.369 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>';
            } else {
                bgMusic.play().catch(e => console.log('Audio play failed:', e));
                musicControl.classList.add('playing');
                musicIcon.innerHTML = '<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>';
            }
            isPlaying = !isPlaying;
        }
        
        // Smooth scrolling for navigation with mobile optimization
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = window.innerWidth <= 768 ? 80 : 100;
                    const targetPosition = target.offsetTop - offset;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Countdown Timer
        function updateCountdown() {
            const weddingDate = new Date('2024-12-25T10:00:00').getTime();
            const now = new Date().getTime();
            const distance = weddingDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            const countdownElements = ['countdown-days', 'countdown-hours', 'countdown-minutes', 'countdown-seconds'];
            const values = [days, hours, minutes, seconds];
            
            countdownElements.forEach((id, index) => {
                const element = document.getElementById(id);
                if (element) {
                    element.textContent = values[index];
                }
            });
        }
        
        setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // RSVP Form Handler with mobile optimization
        const rsvpForm = document.getElementById('rsvpForm');
        if (rsvpForm) {
            rsvpForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                const name = formData.get('name');
                const email = formData.get('email');
                const attendance = formData.get('attendance');
                const guests = formData.get('guests');
                const message = formData.get('message');
                
                // Show mobile-friendly notification
                const notification = document.createElement('div');
                notification.className = 'fixed top-4 left-4 right-4 bg-green-500 text-white p-4 rounded-lg shadow-lg z-50 transform transition-all duration-300';
                notification.innerHTML = `
                    <div class="flex items-center justify-between">
                        <span>✅ Terima kasih ${name}! RSVP Anda telah diterima.</span>
                        <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-white hover:text-gray-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                `;
                document.body.appendChild(notification);
                
                // Auto remove notification after 5 seconds
                setTimeout(() => {
                    if (notification.parentElement) {
                        notification.remove();
                    }
                }, 5000);
                
                this.reset();
            });
        }
        
        // Mobile menu toggle (if needed)
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
        }
        
        // Touch gesture support for mobile
        let touchStartY = 0;
        let touchEndY = 0;
        
        document.addEventListener('touchstart', e => {
            touchStartY = e.changedTouches[0].screenY;
        });
        
        document.addEventListener('touchend', e => {
            touchEndY = e.changedTouches[0].screenY;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartY - touchEndY;
            
            if (Math.abs(diff) > swipeThreshold) {
                // Swipe detected - could be used for navigation
                console.log('Swipe detected:', diff > 0 ? 'up' : 'down');
            }
        }
        
        // Optimize performance on mobile
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').catch(console.log);
            });
        }
    </script>
</body>
</html> 