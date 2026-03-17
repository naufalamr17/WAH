@extends('layouts.app')

@section('title', 'Tentang Kami — Yayasan Warung Amal Haunan')
@section('meta_description', 'Mengenal lebih dekat Yayasan Warung Amal Haunan — lembaga sosial yang berdiri sejak 2020 di Kabupaten Bogor.')

@section('content')

{{-- Page Header --}}
<section class="page-header pt-32 pb-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 border border-white/10 text-white/80 text-sm font-medium mb-6">
            <i class="fas fa-info-circle mr-2 text-gold-400"></i>Mengenal Kami
        </span>
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-white mb-4">Tentang Yayasan</h1>
        <p class="text-white/60 text-lg max-w-2xl mx-auto">Yayasan Warung Amal Haunan — wadah kebaikan untuk sesama</p>
        <div class="flex items-center justify-center mt-6 space-x-2 text-sm text-white/40">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gold-400">Tentang Kami</span>
        </div>
    </div>
</section>

{{-- About Content --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="relative">
                    <div class="w-full aspect-[4/3] rounded-3xl bg-gradient-to-br from-primary-100 to-primary-50 flex items-center justify-center">
                        <div class="text-center p-10">
                            <i class="fas fa-hand-holding-heart text-8xl text-primary-700 mb-4"></i>
                            <h3 class="text-2xl font-serif font-bold text-primary-900">Warung Amal Haunan</h3>
                            <p class="text-primary-600 mt-2">Berdiri sejak 11 Mei 2020</p>
                        </div>
                    </div>
                    <div class="relative mt-6 md:mt-0 md:absolute md:-bottom-8 md:-right-8 bg-white rounded-2xl shadow-xl p-6 max-w-xs mx-auto md:mx-0 border border-gray-100">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 rounded-xl bg-gold-100 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-gold-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 text-sm">Yayasan Warung Amal Haunan</p>
                                <p class="text-gray-500 text-xs mt-1">Jl. Kayu Manis, Cirimekar, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16917</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Sejarah Kami</span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-6">Tentang Yayasan <span class="gradient-text">Warung Amal Haunan</span></h2>
                <div class="section-divider mb-8"></div>
                <p class="text-gray-600 leading-relaxed mb-6"><strong class="text-gray-800">Yayasan Warung Amal Haunan</strong> merupakan lembaga sosial, kemanusiaan, dan keagamaan yang berkomitmen memberikan manfaat bagi masyarakat melalui berbagai kegiatan amal, pendidikan, kesehatan, dan pemberdayaan sosial.</p>
                <p class="text-gray-600 leading-relaxed mb-6">Didirikan pada <strong class="text-gray-800">11 Mei 2020</strong> di Kabupaten Bogor, Jawa Barat, yayasan ini hadir sebagai wadah bagi masyarakat untuk bersama-sama berkontribusi dalam kegiatan kebaikan yang memberikan dampak positif.</p>
                <div class="bg-primary-50/50 rounded-2xl p-6 border border-primary-100">
                    <h4 class="font-semibold text-primary-900 mb-2 flex items-center"><i class="fas fa-book-quran text-primary-700 mr-2"></i>Asas Yayasan</h4>
                    <p class="text-gray-600 text-sm">Berlandaskan Pancasila dengan menjalankan ajaran Islam Ahlus Sunnah wal Jamaah</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Filosofi Nama --}}
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Filosofi</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">Makna Nama <span class="gradient-text">Yayasan</span></h2>
            <div class="section-divider mx-auto mb-6"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white rounded-3xl p-10 text-center card-hover border border-gray-100" data-aos="fade-up">
                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mx-auto mb-6 card-icon-hover shadow-lg"><i class="fas fa-store text-white text-3xl"></i></div>
                <h3 class="text-2xl font-serif font-bold text-gray-900 mb-3">Warung</h3>
                <p class="text-gray-500 leading-relaxed">Tempat yang melayani dan menawarkan kebaikan kepada masyarakat — sebuah "warung" kebaikan yang terbuka bagi siapa saja.</p>
            </div>
            <div class="bg-white rounded-3xl p-10 text-center card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-gold-500 to-gold-600 flex items-center justify-center mx-auto mb-6 card-icon-hover shadow-lg"><i class="fas fa-hand-holding-heart text-white text-3xl"></i></div>
                <h3 class="text-2xl font-serif font-bold text-gray-900 mb-3">Amal</h3>
                <p class="text-gray-500 leading-relaxed">Aktivitas kebaikan yang memberikan manfaat bagi umat — inti dari setiap langkah dan program yang dijalankan.</p>
            </div>
            <div class="bg-white rounded-3xl p-10 text-center card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mx-auto mb-6 card-icon-hover shadow-lg"><i class="fas fa-praying-hands text-white text-3xl"></i></div>
                <h3 class="text-2xl font-serif font-bold text-gray-900 mb-3">Haunan</h3>
                <p class="text-gray-500 leading-relaxed">Karakter manusia yang rendah hati dalam mengemban amanah kehidupan — landasan sikap dalam beramal.</p>
            </div>
        </div>
    </div>
</section>

{{-- Struktur Organisasi --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Organisasi</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">Struktur <span class="gradient-text">Organisasi</span></h2>
            <div class="section-divider mx-auto mb-6"></div>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-3xl mx-auto">
            <div class="text-center" data-aos="fade-up">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mx-auto mb-4 shadow-lg"><i class="fas fa-user-shield text-white text-3xl"></i></div>
                <h4 class="font-bold text-gray-900 text-lg">Pembina</h4>
                <p class="text-gray-500 text-sm mt-2">Arahan & pengawasan strategis</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-gold-500 to-gold-600 flex items-center justify-center mx-auto mb-4 shadow-lg"><i class="fas fa-users-cog text-white text-3xl"></i></div>
                <h4 class="font-bold text-gray-900 text-lg">Pengurus</h4>
                <p class="text-gray-500 text-sm mt-2">Ketua, Sekretaris, Bendahara</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mx-auto mb-4 shadow-lg"><i class="fas fa-search text-white text-3xl"></i></div>
                <h4 class="font-bold text-gray-900 text-lg">Pengawas</h4>
                <p class="text-gray-500 text-sm mt-2">Mengawasi jalannya kegiatan</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-to-br from-primary-900 to-primary-800 relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-30"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
        <h2 class="text-3xl font-serif font-bold text-white mb-6">Ingin Mengenal Kami Lebih Dekat?</h2>
        <p class="text-white/70 mb-8 max-w-xl mx-auto">Jangan ragu untuk menghubungi kami atau berkunjung langsung ke kantor yayasan.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-full bg-gradient-to-r from-gold-500 to-gold-600 text-white font-semibold hover:from-gold-600 hover:to-gold-700 shadow-xl transition-all duration-300 hover:scale-105"><i class="fas fa-envelope mr-3"></i>Hubungi Kami</a>
    </div>
</section>

@endsection
