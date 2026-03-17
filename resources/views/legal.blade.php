@extends('layouts.app')

@section('title', 'Legalitas — Yayasan Warung Amal Haunan')
@section('meta_description', 'Legalitas resmi Yayasan Warung Amal Haunan — akta pendirian, notaris, dan SK Kemenkumham.')

@section('content')

<section class="page-header pt-32 pb-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 border border-white/10 text-white/80 text-sm font-medium mb-6">
            <i class="fas fa-file-contract mr-2 text-gold-400"></i>Resmi & Terpercaya
        </span>
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-white mb-4">Legalitas Yayasan</h1>
        <p class="text-white/60 text-lg max-w-2xl mx-auto">Yayasan yang sah secara hukum dan terdaftar resmi</p>
        <div class="flex items-center justify-center mt-6 space-x-2 text-sm text-white/40">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gold-400">Legalitas</span>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Dokumen Resmi</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">Legalitas <span class="gradient-text">Yayasan</span></h2>
            <div class="section-divider mx-auto mb-6"></div>
            <p class="text-gray-500 max-w-2xl mx-auto">Seluruh kegiatan yayasan berjalan di atas landasan hukum yang sah dan terdaftar secara resmi di pemerintah Republik Indonesia.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Akta Pendirian --}}
            <div class="bg-gradient-to-br from-primary-50 to-white rounded-3xl p-10 border border-primary-100 card-hover" data-aos="fade-up">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-file-contract text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Akta Pendirian</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500 text-sm">Nomor Akta</span>
                        <span class="font-semibold text-gray-900">03</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500 text-sm">Tahun Pendirian</span>
                        <span class="font-semibold text-gray-900">2020</span>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <span class="text-gray-500 text-sm">Tanggal</span>
                        <span class="font-semibold text-gray-900">11 Mei 2020</span>
                    </div>
                </div>
            </div>

            {{-- Notaris --}}
            <div class="bg-gradient-to-br from-gold-50 to-white rounded-3xl p-10 border border-gold-100 card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-500 to-gold-600 flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-user-tie text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Notaris</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500 text-sm">Nama</span>
                        <span class="font-semibold text-gray-900">Lubnah SH., MKn</span>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <span class="text-gray-500 text-sm">Gelar</span>
                        <span class="font-semibold text-gray-900">Sarjana Hukum, Magister Kenotariatan</span>
                    </div>
                </div>
            </div>

            {{-- SK Kemenkumham --}}
            <div class="bg-gradient-to-br from-primary-50 to-white rounded-3xl p-10 border border-primary-100 card-hover md:col-span-2" data-aos="fade-up" data-aos-delay="200">
                <div class="flex flex-col md:flex-row md:items-center md:space-x-8">
                    <div class="flex-shrink-0 mb-6 md:mb-0">
                        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-primary-700 to-primary-900 flex items-center justify-center shadow-lg">
                            <i class="fas fa-landmark text-white text-3xl"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">SK Kemenkumham</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-4 border border-gray-100">
                                <span class="text-gray-500 text-xs uppercase tracking-wider block mb-1">Nomor SK</span>
                                <span class="font-semibold text-gray-900 text-sm">AHU-0007870.AH.01.04 Tahun 2020</span>
                            </div>
                            <div class="bg-white rounded-xl p-4 border border-gray-100">
                                <span class="text-gray-500 text-xs uppercase tracking-wider block mb-1">Kedudukan</span>
                                <span class="font-semibold text-gray-900 text-sm">Kabupaten Bogor, Jawa Barat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Trust Badge --}}
        <div class="mt-16 text-center" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 rounded-full bg-green-50 border border-green-200 text-green-700">
                <i class="fas fa-shield-alt mr-3 text-lg"></i>
                <span class="font-semibold text-sm">Terdaftar resmi di Kementerian Hukum dan HAM Republik Indonesia</span>
            </div>
        </div>
    </div>
</section>

@endsection
