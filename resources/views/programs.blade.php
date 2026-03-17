@extends('layouts.app')

@section('title', 'Program Kegiatan — Yayasan Warung Amal Haunan')
@section('meta_description', 'Program kegiatan Yayasan Warung Amal Haunan meliputi bidang sosial, kemanusiaan, dan keagamaan.')

@section('content')

<section class="page-header pt-32 pb-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 border border-white/10 text-white/80 text-sm font-medium mb-6">
            <i class="fas fa-project-diagram mr-2 text-gold-400"></i>Program Kami
        </span>
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-white mb-4">Program Kegiatan</h1>
        <p class="text-white/60 text-lg max-w-2xl mx-auto">Tiga bidang utama dalam memberikan manfaat bagi masyarakat</p>
        <div class="flex items-center justify-center mt-6 space-x-2 text-sm text-white/40">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gold-400">Program</span>
        </div>
    </div>
</section>

{{-- Bidang Sosial --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold uppercase tracking-wider mb-4">Bidang Sosial</div>
                <h2 class="text-3xl font-serif font-bold text-gray-900 mb-6">Pemberdayaan <span class="gradient-text">Masyarakat</span></h2>
                <div class="section-divider mb-8"></div>
                <p class="text-gray-600 leading-relaxed mb-8">Kami bergerak dalam bidang sosial melalui pendidikan dan pelatihan untuk memberdayakan masyarakat agar mandiri dan berdaya saing.</p>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 bg-blue-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-blue-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-graduation-cap text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Pendidikan Formal & Nonformal</h4><p class="text-gray-500 text-sm mt-1">Penyelenggaraan kegiatan belajar-mengajar untuk semua kalangan</p></div>
                    </div>
                    <div class="flex items-start space-x-4 bg-blue-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-blue-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-chalkboard-teacher text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Kursus & Pelatihan</h4><p class="text-gray-500 text-sm mt-1">Peningkatan keterampilan dan kompetensi masyarakat</p></div>
                    </div>
                    <div class="flex items-start space-x-4 bg-blue-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-blue-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-heartbeat text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Layanan Kesehatan Masyarakat</h4><p class="text-gray-500 text-sm mt-1">Pemeriksaan dan layanan kesehatan bagi masyarakat</p></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center" data-aos="fade-left">
                <div class="w-full max-w-md aspect-square rounded-3xl bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-9xl text-blue-300"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Bidang Kemanusiaan --}}
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="flex justify-center order-2 lg:order-1" data-aos="fade-right">
                <div class="w-full max-w-md aspect-square rounded-3xl bg-gradient-to-br from-red-100 to-red-50 flex items-center justify-center">
                    <i class="fas fa-hands-helping text-9xl text-red-300"></i>
                </div>
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-red-100 text-red-700 text-xs font-semibold uppercase tracking-wider mb-4">Bidang Kemanusiaan</div>
                <h2 class="text-3xl font-serif font-bold text-gray-900 mb-6">Kepedulian <span class="gradient-text">Sesama</span></h2>
                <div class="section-divider mb-8"></div>
                <p class="text-gray-600 leading-relaxed mb-8">Memberikan bantuan dan kepedulian kepada mereka yang membutuhkan, dari korban bencana hingga anak yatim dan dhuafa.</p>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 bg-red-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-house-damage text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Bantuan Korban Bencana</h4><p class="text-gray-500 text-sm mt-1">Tanggap darurat dan rehabilitasi pasca bencana</p></div>
                    </div>
                    <div class="flex items-start space-x-4 bg-red-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-child text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Santunan Yatim & Dhuafa</h4><p class="text-gray-500 text-sm mt-1">Perhatian dan bantuan untuk anak yatim dan kaum dhuafa</p></div>
                    </div>
                    <div class="flex items-start space-x-4 bg-red-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-red-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-home text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Rumah Singgah</h4><p class="text-gray-500 text-sm mt-1">Tempat perlindungan sementara bagi yang membutuhkan</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Bidang Keagamaan --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-gold-100 text-gold-700 text-xs font-semibold uppercase tracking-wider mb-4">Bidang Keagamaan</div>
                <h2 class="text-3xl font-serif font-bold text-gray-900 mb-6">Penguatan <span class="gradient-text">Spiritualitas</span></h2>
                <div class="section-divider mb-8"></div>
                <p class="text-gray-600 leading-relaxed mb-8">Menguatkan nilai-nilai keagamaan dan spiritualitas masyarakat melalui berbagai kegiatan dakwah dan pengajian.</p>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 bg-gold-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-gold-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-book-open text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Majelis Taklim</h4><p class="text-gray-500 text-sm mt-1">Pengajian rutin dan kajian keislaman</p></div>
                    </div>
                    <div class="flex items-start space-x-4 bg-gold-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-gold-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-mosque text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Pondok Pesantren</h4><p class="text-gray-500 text-sm mt-1">Pendidikan agama yang komprehensif</p></div>
                    </div>
                    <div class="flex items-start space-x-4 bg-gold-50 rounded-2xl p-5">
                        <div class="w-12 h-12 rounded-xl bg-gold-500 flex items-center justify-center flex-shrink-0"><i class="fas fa-hand-holding-usd text-white"></i></div>
                        <div><h4 class="font-bold text-gray-900">Pengelolaan ZIS</h4><p class="text-gray-500 text-sm mt-1">Zakat, infaq, dan sedekah yang amanah</p></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center" data-aos="fade-left">
                <div class="w-full max-w-md aspect-square rounded-3xl bg-gradient-to-br from-gold-100 to-gold-50 flex items-center justify-center">
                    <i class="fas fa-mosque text-9xl text-gold-300"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-to-br from-primary-900 to-primary-800 relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-30"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
        <h2 class="text-3xl font-serif font-bold text-white mb-6">Ingin Berkontribusi?</h2>
        <p class="text-white/70 mb-8 max-w-xl mx-auto">Bergabunglah bersama kami dalam program-program kebaikan untuk masyarakat.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-full bg-gradient-to-r from-gold-500 to-gold-600 text-white font-semibold shadow-xl transition-all duration-300 hover:scale-105"><i class="fas fa-handshake mr-3"></i>Kolaborasi Sekarang</a>
    </div>
</section>

@endsection
