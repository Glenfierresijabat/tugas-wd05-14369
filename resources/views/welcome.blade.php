<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik Sehat Sentosa</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-pattern {
            background-color: #f0f9ff;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zM16.686 0L10.2 6.485 11.616 7.9l7.9-7.9h-2.83zm20.97 0l9.315 9.314-1.414 1.414L34.828 0h2.83zM22.344 0L13.03 9.314l1.414 1.414L25.172 0h-2.83zM32 0l12.142 12.142-1.414 1.414L30 .828 17.272 13.556l-1.414-1.414L28 0h4zM.284 0l28 28-1.414 1.414L0 2.544v2.83L25.456 30l-1.414 1.414-28-28L0 0h.284zM0 5.373l25.456 25.455-1.414 1.415L0 8.2v2.83l21.627 21.628-1.414 1.414L0 13.657v2.828l17.8 17.8-1.414 1.414L0 19.1v2.83l14.142 14.14-1.414 1.415L0 24.544V30h5.457L30 5.456 28.586 4.04 0 32.626v-2.83L26.544 2.543 25.13 1.13 0 26.272v-2.83L22.717 0H0v5.373z' fill='%239fb4cc' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        .form-container {
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-blue-600 text-2xl font-bold flex items-center">
                        <i class="fas fa-hospital-user mr-2"></i>
                        <span>PoliSehat</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#beranda" class="px-3 py-2 text-blue-600 font-medium hover:text-blue-800">Beranda</a>
                    <a href="#layanan" class="px-3 py-2 text-gray-600 font-medium hover:text-blue-600">Layanan</a>
                    <a href="#dokter" class="px-3 py-2 text-gray-600 font-medium hover:text-blue-600">Dokter</a>
                    <a href="#testimoni" class="px-3 py-2 text-gray-600 font-medium hover:text-blue-600">Testimoni</a>
                    <a href="#kontak" class="px-3 py-2 text-gray-600 font-medium hover:text-blue-600">Kontak</a>
                    <a href="/login" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">Masuk</a>
                    <a href="/register" class="px-4 py-2 border border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 transition duration-300">Daftar</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobileMenuBtn" class="text-gray-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
            <div class="container mx-auto px-4 py-2">
                <a href="#beranda" class="block py-2 text-gray-600 hover:text-blue-600">Beranda</a>
                <a href="#layanan" class="block py-2 text-gray-600 hover:text-blue-600">Layanan</a>
                <a href="#dokter" class="block py-2 text-gray-600 hover:text-blue-600">Dokter</a>
                <a href="#testimoni" class="block py-2 text-gray-600 hover:text-blue-600">Testimoni</a>
                <a href="#kontak" class="block py-2 text-gray-600 hover:text-blue-600">Kontak</a>
                <div class="flex space-x-2 mt-3 mb-2">
                    @if (Route::has('login'))
            @auth
              <a href="{{ url('/home') }}" class="btn btn-primary-custom">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 text-center">Masuk</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="flex-1 px-4 py-2 border border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 transition duration-300 text-center">Daftar</a>
              @endif
            @endauth
          @endif
                  </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="hero-pattern pt-24 pb-12 md:pt-32 md:pb-20">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 mb-10 lg:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-blue-800 mb-4">Kesehatan Anda <br>Prioritas Kami</h1>
                    <p class="text-lg text-gray-600 mb-8">Poliklinik dengan layanan terbaik dan dokter berkualitas untuk menjaga kesehatan Anda dan keluarga.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/register" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300 text-lg font-medium inline-block">Daftar Sekarang</a>
                        <button class="px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 transition duration-300 text-lg font-medium">Jadwalkan Konsultasi</button>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <img src="/api/placeholder/600/400" alt="Pelayanan kesehatan terbaik" class="rounded-lg shadow-xl mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Mengapa Memilih Kami?</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Poliklinik kami memberikan pelayanan kesehatan terbaik dengan fasilitas modern dan dokter berpengalaman.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-6 rounded-lg transition duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-user-md text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Dokter Ahli</h3>
                    <p class="text-gray-600 text-center">Tim dokter kami terdiri dari spesialis berpengalaman di berbagai bidang kesehatan.</p>
                </div>
                
                <div class="bg-blue-50 p-6 rounded-lg transition duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-microscope text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Peralatan Modern</h3>
                    <p class="text-gray-600 text-center">Kami menggunakan peralatan medis terkini untuk diagnosa dan perawatan yang akurat.</p>
                </div>
                
                <div class="bg-blue-50 p-6 rounded-lg transition duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Pelayanan 24 Jam</h3>
                    <p class="text-gray-600 text-center">Poliklinik kami siap melayani kebutuhan medis Anda selama 24 jam setiap hari.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Layanan Kami</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan berbagai layanan kesehatan untuk kebutuhan Anda dan keluarga</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Poli Umum</h3>
                    <p class="text-gray-600 mb-4">Pemeriksaan kesehatan umum dan konsultasi untuk berbagai keluhan.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Poli Gigi</h3>
                    <p class="text-gray-600 mb-4">Perawatan gigi dan mulut oleh dokter gigi profesional.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Poli Anak</h3>
                    <p class="text-gray-600 mb-4">Perawatan kesehatan untuk bayi dan anak oleh dokter spesialis anak.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <div class="text-blue-600 text-4xl mb-4">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Laboratorium</h3>
                    <p class="text-gray-600 mb-4">Layanan tes laboratorium lengkap dengan hasil yang cepat dan akurat.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dokter Section -->
    <section id="dokter" class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Dokter Kami</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Tim dokter berpengalaman dan profesional siap memberikan pelayanan terbaik</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <img src="/api/placeholder/400/300" alt="Dr. Andi Setiawan" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Dr. Andi Setiawan</h3>
                        <p class="text-blue-600 mb-3">Dokter Umum</p>
                        <p class="text-gray-600 mb-4">Spesialis dalam penanganan penyakit umum dengan pengalaman lebih dari 10 tahun.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <img src="/api/placeholder/400/300" alt="Dr. Siti Rahayu" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Dr. Siti Rahayu</h3>
                        <p class="text-blue-600 mb-3">Dokter Gigi</p>
                        <p class="text-gray-600 mb-4">Spesialis perawatan gigi dan mulut dengan keahlian dalam perawatan estetika gigi.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                    <img src="/api/placeholder/400/300" alt="Dr. Budi Santoso" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">Dr. Budi Santoso</h3>
                        <p class="text-blue-600 mb-3">Dokter Anak</p>
                        <p class="text-gray-600 mb-4">Spesialis anak dengan pendekatan ramah anak dan pengalaman lebih dari 15 tahun.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-blue-600 hover:text-blue-800"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimoni" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Apa Kata Pasien Kami</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Pengalaman pasien yang telah mendapatkan perawatan di poliklinik kami</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-yellow-400 flex mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Pelayanan yang sangat baik dan dokter yang sangat profesional. Saya merasa nyaman dan tenang saat berobat di sini."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-800 font-bold">RD</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Rudi Darmawan</h4>
                            <p class="text-gray-500 text-sm">Pasien Poli Umum</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-yellow-400 flex mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Anak saya sangat senang setiap kali berkunjung ke poli anak. Dokter ramah dan fasilitas bermain untuk anak membuat anak tidak takut."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-800 font-bold">LS</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Lina Suryani</h4>
                            <p class="text-gray-500 text-sm">Pasien Poli Anak</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-yellow-400 flex mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Perawatan gigi saya berjalan lancar dan tidak terasa sakit. Dokter gigi sangat teliti dan hasilnya memuaskan. Terima kasih!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-800 font-bold">HW</span>
                        </div>
                        <div>
                            <h4 class="font-semibold">Hendra Wijaya</h4>
                            <p class="text-gray-500 text-sm">Pasien Poli Gigi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Hubungi Kami</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Untuk informasi lebih lanjut atau membuat janji, silakan hubungi kami</p>
            </div>
            
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <div class="bg-blue-50 p-6 rounded-lg h-full">
                        <h3 class="text-2xl font-semibold mb-6">Informasi Kontak</h3>
                        
                        <div class="flex items-start mb-6">
                            <div class="text-blue-600 mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Alamat</h4>
                                <p class="text-gray-600">Jl. Kesehatan No. 123, Kota Jakarta, 12345</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start mb-6">
                            <div class="text-blue-600 mr-4 mt-1">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Telepon</h4>
                                <p class="text-gray-600">+62 21 1234 5678</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start mb-6">
                            <div class="text-blue-600 mr-4 mt-1">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Email</h4>
                                <p class="text-gray-600">info@polisehat.co.id</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-blue-600 mr-4 mt-1">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Sabtu: 08.00 - 20.00</p>
                                <p class="text-gray-600">Minggu: 08.00 - 14.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 px-4">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold mb-6">Kirim Pesan</h3>
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="name" class="block text-gray-700 mb-2">Nama</label>
                                    <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                                    <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block text-gray-700 mb-2">Subjek</label>
                                <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white pt-12 pb-6">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="text-2xl font-bold mb-6 flex items-center">
                        <i class="fas fa-hospital-user mr-2"></i>
                        <span>PoliSehat</span>
                    </div>
                    <p class="mb-6">Poliklinik terpercaya dengan fasilitas modern dan dokter ahli untuk kesehatan Anda dan keluarga.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center hover:bg-blue-100 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center hover:bg-blue-100 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center hover:bg-blue-100 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-white text-blue-600 w-8 h-8 rounded-full flex items-center justify-center hover:bg-blue-100 transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <h3 class="text-xl font-semibold mb-6">Tautan Cepat</h3>
                    <ul>
                        <li class="mb-3"><a href="#beranda" class="hover:text-blue-300 transition duration-300">Beranda</a></li>
                        <li class="mb-3"><a href="#layanan" class="hover:text-blue-300 transition duration-300">Layanan</a></li>
                        <li class="mb-3"><a href="#dokter" class="hover:text-blue-300 transition duration-300">Dokter</a></li>
                        <li class="mb-3"><a href="#testimoni" class="hover:text-blue-300 transition duration-300">Testimoni</a></li>
                        <li><a href="#kontak" class="hover:text-blue-300 transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <h3 class="text-xl font-semibold mb-6">Layanan</h3>
                    <ul>
                        <li class="mb-3"><a href="#" class="hover:text-blue-300 transition duration-300">Poli Umum</a></li>
                        <li class="mb-3"><a href="#" class="hover:text-blue-300 transition duration-300">Poli Gigi</a></li>
                        <li class="mb-3"><a href="#" class="hover:text-blue-300 transition duration-300">Poli Anak</a></li>
                        <li class="mb-3"><a href="#" class="hover:text-blue-300 transition duration-300">Laboratorium</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition duration-300">Apotek</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <h3 class="text-xl font-semibold mb-6">Jam Operasional</h3>
                    <ul>
                        <li class="mb-3 flex justify-between"><span>Senin - Jumat:</span> <span>08.00 - 20.00</span></li>
                        <li class="mb-3 flex justify-between"><span>Sabtu:</span> <span>08.00 - 18.00</span></li>
                        <li class="mb-3 flex justify-between"><span>Minggu:</span> <span>08.00 - 14.00</span></li>
                        <li class="mt-6 font-semibold">Layanan Darurat: 24 Jam</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-700 mt-8 pt-8 text-center">
                <p>&copy; 2025 PoliSehat. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>



    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>