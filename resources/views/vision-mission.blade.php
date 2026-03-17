@extends('layouts.app')

@section('title', 'Visi & Misi — Yayasan Warung Amal Haunan')
@section('meta_description', 'Visi dan Misi Yayasan Warung Amal Haunan — melahirkan insan yang beramal lillah secara kreatif dan ikhlas.')

@section('content')

<section class="page-header pt-32 pb-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 border border-white/10 text-white/80 text-sm font-medium mb-6">
            <i class="fas fa-compass mr-2 text-gold-400"></i>Arah Kami
        </span>
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-white mb-4">Visi & Misi</h1>
        <p class="text-white/60 text-lg max-w-2xl mx-auto">Panduan langkah kami dalam berkarya dan beramal</p>
        <div class="flex items-center justify-center mt-6 space-x-2 text-sm text-white/40">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gold-400">Visi & Misi</span>
        </div>
    </div>
</section>

{{-- Visi --}}
<section class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-primary-800 to-primary-950 rounded-3xl p-12 md:p-16 text-center relative overflow-hidden" data-aos="fade-up">
            <div class="absolute inset-0 hero-pattern opacity-30"></div>
            <div class="absolute top-5 right-5 w-40 h-40 bg-gold-500/10 rounded-full blur-3xl"></div>
            <div class="relative z-10">
                <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center mx-auto mb-8 shadow-lg">
                    <i class="fas fa-eye text-white text-3xl"></i>
                </div>
                <h2 class="text-sm font-semibold uppercase tracking-widest text-gold-400 mb-4">Visi Kami</h2>
                <p class="text-2xl sm:text-3xl font-serif text-white leading-relaxed">
                    Menjadikan Yayasan Warung Amal Haunan sebagai <span class="text-gold-400">wadah kecintaan</span> dalam beramal secara kreatif dan ikhlas untuk melahirkan <span class="text-gold-400">insan-insan yang beramal lillah</span>.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Misi --}}
<section class="py-24 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Misi Kami</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">Langkah <span class="gradient-text">Strategis</span></h2>
            <div class="section-divider mx-auto mb-6"></div>
        </div>
        <div class="space-y-6">
            @php
                $missions = [
                    ['icon' => 'fa-building', 'title' => 'Organisasi Kuat', 'desc' => 'Membangun organisasi yang kuat, efektif, dan efisien'],
                    ['icon' => 'fa-object-group', 'title' => 'Menghimpun Kegiatan', 'desc' => 'Menghimpun berbagai kegiatan sosial ke dalam wadah yayasan'],
                    ['icon' => 'fa-tools', 'title' => 'Sarana & Prasarana', 'desc' => 'Menyediakan sarana dan prasarana kegiatan sosial'],
                    ['icon' => 'fa-coins', 'title' => 'Pendanaan', 'desc' => 'Menggalang dan mengelola pendanaan kegiatan'],
                    ['icon' => 'fa-handshake', 'title' => 'Kerja Sama', 'desc' => 'Membangun kerja sama dengan masyarakat dalam kegiatan sosial'],
                ];
            @endphp

            @foreach($missions as $index => $mission)
            <div class="bg-white rounded-2xl p-8 flex items-start space-x-6 card-hover border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center flex-shrink-0 card-icon-hover shadow-lg">
                    <i class="fas {{ $mission['icon'] }} text-white text-xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $mission['title'] }}</h3>
                    <p class="text-gray-500">{{ $mission['desc'] }}</p>
                </div>
                <span class="text-5xl font-bold text-gray-100 ml-auto hidden md:block">0{{ $index + 1 }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Asas --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <div class="bg-gradient-to-r from-primary-50 to-gold-50 rounded-3xl p-12 border border-primary-100">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-book-quran text-white text-2xl"></i>
            </div>
            <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">Asas Yayasan</h3>
            <p class="text-lg text-gray-600 leading-relaxed">Berlandaskan <strong class="text-primary-800">Pancasila</strong> dengan menjalankan ajaran <strong class="text-primary-800">Islam Ahlus Sunnah wal Jamaah</strong></p>
        </div>
    </div>
</section>

@endsection
