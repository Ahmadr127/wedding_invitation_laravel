# Wedding Invitation Website

Website undangan pernikahan yang modern, profesional, dan responsif dengan fitur-fitur lengkap.

## 🎯 Fitur Utama

### ✨ Desain & UI/UX
- **Responsive Design** - Optimal di semua perangkat (desktop, tablet, mobile)
- **Modern UI** - Menggunakan Tailwind CSS dengan gradien dan animasi yang menarik
- **Typography** - Font Playfair Display untuk judul dan Poppins untuk body text
- **Color Scheme** - Kombinasi pink dan purple yang elegan

### 🎵 Audio & Animasi
- **Background Music** - Kontrol musik yang dapat di-toggle
- **AOS Animations** - Animasi scroll yang smooth dan menarik
- **Custom Animations** - Floating elements, heartbeat, dan hover effects
- **Interactive Elements** - Hover effects dan micro-interactions

### 📱 Komponen Utama

#### 1. Hero Section
- Countdown timer real-time
- Floating background elements
- Call-to-action buttons
- Smooth scroll navigation

#### 2. Couple Section
- Informasi lengkap kedua mempelai
- Foto profil dengan border yang menarik
- Kisah cinta pasangan
- Informasi keluarga

#### 3. Event Details
- Detail akad nikah dan resepsi
- Informasi waktu, tempat, dan dress code
- Fasilitas yang tersedia
- Link ke Google Maps

#### 4. Timeline
- Timeline acara yang detail
- Visual timeline dengan gradient
- Informasi waktu yang jelas
- Catatan penting untuk tamu

#### 5. Gallery
- Galeri foto dengan filter kategori
- Lightbox untuk melihat foto
- Hover effects yang menarik
- Kategori: Prewedding, Engagement, Daily

#### 6. RSVP Form
- Form yang interaktif dan user-friendly
- Validasi input
- Pilihan kehadiran (Ya/Tidak)
- Jumlah tamu dengan counter
- Pilihan acara yang akan dihadiri
- Statistik RSVP real-time

#### 7. Location
- Informasi lokasi akad dan resepsi
- Google Maps integration
- Informasi transportasi
- Kontak venue
- Tab untuk switch antara lokasi

#### 8. Footer
- Informasi kontak
- Social media links
- Quick navigation
- Countdown timer
- Back to top button

## 🛠️ Teknologi yang Digunakan

- **HTML5** - Struktur markup yang semantik
- **Tailwind CSS** - Framework CSS utility-first
- **JavaScript (Vanilla)** - Interaktivitas dan animasi
- **AOS (Animate On Scroll)** - Library animasi scroll
- **Google Fonts** - Typography yang menarik
- **Google Maps API** - Integrasi peta

## 📁 Struktur File

```
resources/views/
├── wedding-invitation.blade.php    # Halaman utama
└── components/
    ├── hero-section.blade.php      # Hero section
    ├── couple-section.blade.php    # Informasi mempelai
    ├── event-details.blade.php     # Detail acara
    ├── timeline.blade.php          # Timeline acara
    ├── gallery.blade.php           # Galeri foto
    ├── rsvp-form.blade.php         # Form RSVP
    ├── location.blade.php          # Informasi lokasi
    └── footer.blade.php            # Footer
```

## 🚀 Cara Menjalankan

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd weddinginvitation
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan server**
   ```bash
   php artisan serve
   ```

5. **Akses website**
   - Buka browser dan kunjungi: `http://localhost:8000/wedding`

## 🎨 Kustomisasi

### Mengubah Informasi Mempelai
Edit file `resources/views/components/couple-section.blade.php`:
```php
<h3 class="font-playfair text-3xl font-bold text-gray-800 mb-2">
    [Nama Mempelai Pria]
</h3>
```

### Mengubah Tanggal Acara
Edit file `resources/views/wedding-invitation.blade.php`:
```javascript
const weddingDate = new Date('2024-12-25T10:00:00').getTime();
```

### Mengubah Lokasi
Edit file `resources/views/components/location.blade.php`:
```php
<h4 class="font-semibold text-gray-800">[Nama Venue]</h4>
<p class="text-gray-600">[Alamat Lengkap]</p>
```

### Mengubah Background Music
Edit file `resources/views/wedding-invitation.blade.php`:
```html
<audio id="bgMusic" loop>
    <source src="[URL_MUSIK_ANDA]" type="audio/mp3">
</audio>
```

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🎯 Fitur Interaktif

### Music Control
- Toggle play/pause background music
- Visual feedback dengan animasi rotate
- Icon yang berubah sesuai status

### Gallery Filter
- Filter berdasarkan kategori
- Smooth transitions
- Lightbox untuk melihat foto

### RSVP Form
- Dynamic form fields
- Real-time validation
- Success notifications
- Guest counter

### Smooth Scrolling
- Navigation yang smooth
- Back to top button
- Anchor links

## 🔧 Optimasi

### Performance
- Lazy loading untuk gambar
- Minified CSS dan JS
- Optimized images
- CDN untuk external resources

### SEO
- Semantic HTML structure
- Meta tags
- Open Graph tags
- Schema markup

### Accessibility
- ARIA labels
- Keyboard navigation
- Screen reader friendly
- High contrast colors

## 📞 Support

Untuk pertanyaan atau bantuan teknis, silakan hubungi:
- Email: support@weddinginvitation.com
- Phone: +62 812-3456-7890

## 📄 License

Proyek ini dilisensikan di bawah MIT License - lihat file [LICENSE](LICENSE) untuk detail.

---

**Dibuat dengan ❤️ untuk hari bahagia Anda** 