@extends('layouts.app')

@section('title', 'Yayasan Warung Amal Haunan — Bersama Berbagi Kebaikan')
@section('meta_description', 'Yayasan Warung Amal Haunan — Lembaga sosial, kemanusiaan, dan keagamaan yang berkomitmen memberikan manfaat bagi masyarakat melalui kegiatan amal, pendidikan, kesehatan, dan pemberdayaan sosial.')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-primary-950 via-primary-900 to-primary-800"></div>
    <div class="absolute inset-0 hero-pattern"></div>
    <div class="absolute inset-0 hero-gradient"></div>

    {{-- Decorative elements --}}
    <div class="absolute top-20 right-10 w-72 h-72 bg-gold-500/10 rounded-full blur-3xl animate-gentle-pulse"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-primary-400/10 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-white/5 rounded-full"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-white/[0.03] rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/10 mb-8">
                    <span class="w-2 h-2 rounded-full bg-gold-400 mr-3 animate-pulse"></span>
                    <span class="text-white/80 text-sm font-medium">Lembaga Sosial & Kemanusiaan</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-white leading-tight mb-6">
                    Bersama Berbagi
                    <span class="block text-gold-400">Kebaikan untuk</span>
                    <span class="block">Sesama</span>
                </h1>

                <p class="text-lg text-white/70 leading-relaxed mb-10 max-w-lg">
                    Yayasan Warung Amal Haunan hadir sebagai wadah kebaikan — menghimpun amal, menyalurkan manfaat, dan menebar kasih sayang bagi masyarakat.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('about') }}"
                       class="inline-flex items-center px-8 py-4 rounded-full bg-white text-primary-900 font-semibold hover:bg-gray-100 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                        <span>Tentang Yayasan</span>
                        <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center px-8 py-4 rounded-full border-2 border-white/30 text-white font-semibold hover:bg-white/10 transition-all duration-300 hover:border-gold-400">
                        <span>Kolaborasi Sekarang</span>
                        <i class="fas fa-handshake ml-3"></i>
                    </a>
                </div>
            </div>

            <div class="hidden lg:flex justify-center" data-aos="fade-left" data-aos-delay="200">
                <div class="relative">
                    <div class="w-80 h-80 rounded-3xl bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/10 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-hand-holding-heart text-7xl text-gold-400 mb-4"></i>
                            <p class="text-white/80 font-serif text-xl font-semibold">Warung Amal</p>
                            <p class="text-white/50 text-sm">Haunan</p>
                        </div>
                    </div>
                    {{-- Floating badges --}}
                    <div class="absolute -top-4 -right-4 px-5 py-3 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 text-white">
                        <i class="fas fa-mosque text-gold-400 mr-2"></i>
                        <span class="text-sm font-semibold">Keagamaan</span>
                    </div>
                    <div class="absolute -bottom-4 -left-4 px-5 py-3 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 text-white">
                        <i class="fas fa-users text-gold-400 mr-2"></i>
                        <span class="text-sm font-semibold">Sosial</span>
                    </div>
                    <div class="absolute top-1/2 -right-8 px-5 py-3 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 text-white">
                        <i class="fas fa-heart text-gold-400 mr-2"></i>
                        <span class="text-sm font-semibold">Kemanusiaan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 text-white/40 animate-bounce-down">
        <i class="fas fa-chevron-down text-lg"></i>
    </div>
</section>

{{-- ===== ABOUT PREVIEW SECTION ===== --}}
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary-50 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-gold-50 rounded-full translate-y-1/2 -translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="relative">
                    <div class="w-full aspect-square max-w-md mx-auto rounded-3xl bg-gradient-to-br from-primary-100 to-primary-50 flex items-center justify-center overflow-hidden">
                        <div class="text-center p-10">
                            <i class="fas fa-hand-holding-heart text-8xl text-primary-700 mb-6"></i>
                            <h3 class="text-2xl font-serif font-bold text-primary-900">Sejak 2020</h3>
                            <p class="text-primary-600 mt-2">Melayani dengan Ikhlas</p>
                        </div>
                    </div>
                    <div class="relative mt-6 md:mt-0 md:absolute md:-bottom-6 md:-right-6 w-32 h-32 mx-auto md:mx-0 rounded-2xl bg-gradient-to-br from-gold-400 to-gold-500 flex items-center justify-center shadow-xl">
                        <div class="text-center text-white">
                            <span class="text-3xl font-bold">5+</span>
                            <p class="text-xs mt-1">Tahun</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Tentang Kami</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-6">
                    Menebar Kebaikan<br>
                    <span class="gradient-text">untuk Sesama</span>
                </h2>
                <div class="section-divider mb-8"></div>

                <p class="text-gray-600 leading-relaxed mb-6">
                    <strong class="text-gray-800">Yayasan Warung Amal Haunan</strong> merupakan lembaga sosial, kemanusiaan, dan keagamaan yang berkomitmen memberikan manfaat bagi masyarakat melalui berbagai kegiatan amal, pendidikan, kesehatan, dan pemberdayaan sosial.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Didirikan pada <strong class="text-gray-800">11 Mei 2020</strong> di Kabupaten Bogor, Jawa Barat, yayasan ini hadir sebagai wadah bagi masyarakat untuk bersama-sama berkontribusi dalam kegiatan kebaikan.
                </p>

                {{-- Filosofi nama --}}
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-primary-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-store text-primary-700 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Warung</h4>
                            <p class="text-sm text-gray-500">Tempat yang melayani dan menawarkan kebaikan kepada masyarakat</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-gold-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hand-holding-heart text-gold-600 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Amal</h4>
                            <p class="text-sm text-gray-500">Aktivitas kebaikan yang memberikan manfaat bagi umat</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl bg-primary-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-praying-hands text-primary-700 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Haunan</h4>
                            <p class="text-sm text-gray-500">Karakter manusia yang rendah hati dalam mengemban amanah kehidupan</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="inline-flex items-center text-primary-700 font-semibold hover:text-primary-900 transition-colors group">
                    <span>Selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===== VISI MISI SECTION ===== --}}
<section class="py-24 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Visi & Misi</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">
                Arah & Tujuan <span class="gradient-text">Kami</span>
            </h2>
            <div class="section-divider mx-auto mb-6"></div>
            <p class="text-gray-500 max-w-2xl mx-auto">Panduan dan arah gerak yayasan dalam menjalankan misi kebaikan</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            {{-- Visi --}}
            <div class="bg-white rounded-3xl p-10 shadow-sm hover:shadow-xl transition-all duration-500 card-hover border border-gray-100" data-aos="fade-right">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mb-6 card-icon-hover">
                    <i class="fas fa-eye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">Visi</h3>
                <p class="text-gray-600 leading-relaxed">
                    Menjadikan Yayasan Warung Amal Haunan sebagai wadah kecintaan dalam beramal secara kreatif dan ikhlas untuk melahirkan insan-insan yang beramal lillah.
                </p>
            </div>

            {{-- Misi --}}
            <div class="bg-white rounded-3xl p-10 shadow-sm hover:shadow-xl transition-all duration-500 card-hover border border-gray-100" data-aos="fade-left">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500 to-gold-600 flex items-center justify-center mb-6 card-icon-hover">
                    <i class="fas fa-bullseye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">Misi</h3>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3 text-gray-600">
                        <i class="fas fa-check-circle text-primary-600 mt-1 flex-shrink-0"></i>
                        <span>Membangun organisasi yang kuat, efektif, dan efisien</span>
                    </li>
                    <li class="flex items-start space-x-3 text-gray-600">
                        <i class="fas fa-check-circle text-primary-600 mt-1 flex-shrink-0"></i>
                        <span>Menghimpun berbagai kegiatan sosial ke dalam wadah yayasan</span>
                    </li>
                    <li class="flex items-start space-x-3 text-gray-600">
                        <i class="fas fa-check-circle text-primary-600 mt-1 flex-shrink-0"></i>
                        <span>Menyediakan sarana dan prasarana kegiatan sosial</span>
                    </li>
                    <li class="flex items-start space-x-3 text-gray-600">
                        <i class="fas fa-check-circle text-primary-600 mt-1 flex-shrink-0"></i>
                        <span>Menggalang dan mengelola pendanaan kegiatan</span>
                    </li>
                    <li class="flex items-start space-x-3 text-gray-600">
                        <i class="fas fa-check-circle text-primary-600 mt-1 flex-shrink-0"></i>
                        <span>Membangun kerja sama dengan masyarakat</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ===== PROGRAMS SECTION ===== --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Program Kami</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">
                Bidang <span class="gradient-text">Program Kegiatan</span>
            </h2>
            <div class="section-divider mx-auto mb-6"></div>
            <p class="text-gray-500 max-w-2xl mx-auto">Kami bergerak dalam tiga bidang utama untuk memberikan dampak positif bagi masyarakat</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Bidang Sosial --}}
            <div class="bg-gradient-to-b from-white to-primary-50/50 rounded-3xl p-8 border border-gray-100 card-hover group" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-6 card-icon-hover shadow-lg shadow-blue-500/20">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bidang Sosial</h3>
                <p class="text-gray-500 text-sm mb-6">Pemberdayaan masyarakat melalui pendidikan dan pelatihan</p>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                        <span>Pendidikan formal dan nonformal</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                        <span>Kursus dan pelatihan</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                        <span>Layanan kesehatan masyarakat</span>
                    </li>
                </ul>
            </div>

            {{-- Bidang Kemanusiaan --}}
            <div class="bg-gradient-to-b from-white to-red-50/50 rounded-3xl p-8 border border-gray-100 card-hover group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center mb-6 card-icon-hover shadow-lg shadow-red-500/20">
                    <i class="fas fa-hands-helping text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bidang Kemanusiaan</h3>
                <p class="text-gray-500 text-sm mb-6">Kepedulian terhadap sesama yang membutuhkan bantuan</p>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-red-500"></div>
                        <span>Bantuan korban bencana</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-red-500"></div>
                        <span>Santunan yatim dan dhuafa</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-red-500"></div>
                        <span>Rumah singgah</span>
                    </li>
                </ul>
            </div>

            {{-- Bidang Keagamaan --}}
            <div class="bg-gradient-to-b from-white to-gold-50/50 rounded-3xl p-8 border border-gray-100 card-hover group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500 to-gold-600 flex items-center justify-center mb-6 card-icon-hover shadow-lg shadow-gold-500/20">
                    <i class="fas fa-mosque text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bidang Keagamaan</h3>
                <p class="text-gray-500 text-sm mb-6">Penguatan nilai-nilai keagamaan dan spiritualitas</p>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-gold-500"></div>
                        <span>Majelis taklim</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-gold-500"></div>
                        <span>Pondok pesantren</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-600 text-sm">
                        <div class="w-1.5 h-1.5 rounded-full bg-gold-500"></div>
                        <span>Pengelolaan zakat, infaq, sedekah</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('programs') }}" class="inline-flex items-center px-8 py-4 rounded-full bg-primary-800 text-white font-semibold hover:bg-primary-900 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                <span>Lihat Semua Program</span>
                <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>
</section>

{{-- ===== COUNTER SECTION ===== --}}
<section class="py-20 bg-gradient-to-r from-primary-900 via-primary-800 to-primary-900 relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-50"></div>
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gold-500/30 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gold-500/30 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="counter-item text-center" data-aos="fade-up">
                <div class="text-4xl sm:text-5xl font-bold text-white mb-2">
                    <span data-counter="2020">0</span>
                </div>
                <p class="text-white/60 text-sm font-medium uppercase tracking-wider">Tahun Berdiri</p>
            </div>
            <div class="counter-item text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl sm:text-5xl font-bold text-gold-400 mb-2">
                    <span data-counter="3">0</span>
                </div>
                <p class="text-white/60 text-sm font-medium uppercase tracking-wider">Bidang Program</p>
            </div>
            <div class="counter-item text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl sm:text-5xl font-bold text-white mb-2">
                    <span data-counter="9">0</span><span class="text-gold-400">+</span>
                </div>
                <p class="text-white/60 text-sm font-medium uppercase tracking-wider">Kegiatan Sosial</p>
            </div>
            <div class="counter-item text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl sm:text-5xl font-bold text-gold-400 mb-2">
                    <span data-counter="100">0</span><span class="text-gold-400">+</span>
                </div>
                <p class="text-white/60 text-sm font-medium uppercase tracking-wider">Peluang Kolaborasi</p>
            </div>
        </div>
    </div>
</section>

{{-- ===== QUOTE SECTION ===== --}}
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-10 left-10 text-primary-100 text-9xl font-serif leading-none opacity-50">"</div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
        <i class="fas fa-quote-left text-3xl text-gold-400 mb-8 block"></i>
        <blockquote class="text-2xl sm:text-3xl font-serif text-gray-800 leading-relaxed mb-8 italic">
            "Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lainnya."
        </blockquote>
        <p class="text-gold-600 font-semibold">HR. Ahmad, Thabrani, Daruqutni</p>
    </div>
</section>

{{-- ===== LEGALITAS PREVIEW ===== --}}
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Legalitas</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">
                Yayasan <span class="gradient-text">Terpercaya & Legal</span>
            </h2>
            <div class="section-divider mx-auto mb-6"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl p-8 text-center card-hover border border-gray-100" data-aos="fade-up">
                <div class="w-14 h-14 rounded-2xl bg-primary-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-contract text-primary-700 text-xl"></i>
                </div>
                <h4 class="font-bold text-gray-900 mb-2">Akta Pendirian</h4>
                <p class="text-gray-500 text-sm">Nomor: 03</p>
            </div>
            <div class="bg-white rounded-2xl p-8 text-center card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-2xl bg-gold-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-gold-600 text-xl"></i>
                </div>
                <h4 class="font-bold text-gray-900 mb-2">Notaris</h4>
                <p class="text-gray-500 text-sm">Lubnah SH., MKn</p>
            </div>
            <div class="bg-white rounded-2xl p-8 text-center card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-2xl bg-primary-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-landmark text-primary-700 text-xl"></i>
                </div>
                <h4 class="font-bold text-gray-900 mb-2">SK Kemenkumham</h4>
                <p class="text-gray-500 text-sm">AHU-0007870.AH.01.04<br>Tahun 2020</p>
            </div>
        </div>

        <div class="text-center mt-10" data-aos="fade-up">
            <a href="{{ route('legal') }}" class="inline-flex items-center text-primary-700 font-semibold hover:text-primary-900 transition-colors group">
                <span>Lihat Detail Legalitas</span>
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

{{-- ===== GALLERY SECTION ===== --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Galeri</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">
                Dokumentasi <span class="gradient-text">Kegiatan</span>
            </h2>
            <div class="section-divider mx-auto mb-6"></div>
            <p class="text-gray-500 max-w-2xl mx-auto">Berbagai momen kegiatan sosial, kemanusiaan, dan keagamaan kami</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4" data-aos="fade-up">
            @php
                $galleryItems = [
                    ['icon' => 'fa-graduation-cap', 'title' => 'Pendidikan', 'color' => 'from-blue-600/80 to-blue-900/80'],
                    ['icon' => 'fa-hands-helping', 'title' => 'Bakti Sosial', 'color' => 'from-red-600/80 to-red-900/80'],
                    ['icon' => 'fa-mosque', 'title' => 'Kajian Rutin', 'color' => 'from-primary-600/80 to-primary-900/80'],
                    ['icon' => 'fa-child', 'title' => 'Santunan Yatim', 'color' => 'from-gold-600/80 to-gold-900/80'],
                    ['icon' => 'fa-heartbeat', 'title' => 'Layanan Kesehatan', 'color' => 'from-pink-600/80 to-pink-900/80'],
                    ['icon' => 'fa-users', 'title' => 'Kebersamaan', 'color' => 'from-primary-600/80 to-primary-900/80'],
                ];
            @endphp

            @foreach($galleryItems as $item)
            <div class="gallery-item relative rounded-2xl overflow-hidden aspect-square bg-gradient-to-br from-gray-200 to-gray-300 cursor-pointer group">
                <div class="absolute inset-0 flex items-center justify-center">
                    <i class="fas {{ $item['icon'] }} text-5xl text-gray-400 group-hover:scale-110 transition-transform duration-500"></i>
                </div>
                <div class="gallery-overlay absolute inset-0 bg-gradient-to-t {{ $item['color'] }} flex items-end p-6">
                    <div>
                        <h4 class="text-white font-semibold text-lg">{{ $item['title'] }}</h4>
                        <p class="text-white/70 text-sm mt-1">Dokumentasi kegiatan</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CTA SECTION ===== --}}
<section class="py-24 bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-30"></div>
    <div class="absolute top-10 right-10 w-72 h-72 bg-gold-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-primary-400/10 rounded-full blur-3xl"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/10 mb-8">
            <i class="fas fa-handshake text-gold-400 mr-2"></i>
            <span class="text-white/80 text-sm font-medium">Ajakan Kolaborasi</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-white leading-tight mb-6">
            Mari Bersama<br>
            <span class="text-gold-400">Berbagi Kebaikan</span>
        </h2>

        <p class="text-lg text-white/70 leading-relaxed mb-10 max-w-2xl mx-auto">
            Yayasan membuka kesempatan kerja sama dengan berbagai pihak — donatur, komunitas, perusahaan, dan lembaga sosial — untuk bersama-sama memberikan manfaat bagi masyarakat.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center px-8 py-4 rounded-full bg-gradient-to-r from-gold-500 to-gold-600 text-white font-semibold hover:from-gold-600 hover:to-gold-700 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                <i class="fas fa-envelope mr-3"></i>
                <span>Hubungi Kami</span>
            </a>
            <a href="https://wa.me/6281234567890" target="_blank"
               class="inline-flex items-center px-8 py-4 rounded-full border-2 border-white/30 text-white font-semibold hover:bg-white/10 transition-all duration-300 hover:border-gold-400">
                <i class="fab fa-whatsapp mr-3"></i>
                <span>Chat WhatsApp</span>
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.body.classList.add('page-home');
</script>
@endsection
