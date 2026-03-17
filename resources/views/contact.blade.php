@extends('layouts.app')

@section('title', 'Kontak & Kolaborasi — Yayasan Warung Amal Haunan')
@section('meta_description', 'Hubungi Yayasan Warung Amal Haunan untuk kerja sama, donasi, atau informasi lebih lanjut.')

@section('content')

<section class="page-header pt-32 pb-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="fade-up">
        <span class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 border border-white/10 text-white/80 text-sm font-medium mb-6">
            <i class="fas fa-paper-plane mr-2 text-gold-400"></i>Hubungi Kami
        </span>
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-white mb-4">Kontak & Kolaborasi</h1>
        <p class="text-white/60 text-lg max-w-2xl mx-auto">Kami terbuka untuk kerja sama dan kolaborasi dari berbagai pihak</p>
        <div class="flex items-center justify-center mt-6 space-x-2 text-sm text-white/40">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gold-400">Kontak</span>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">
            {{-- Contact Info --}}
            <div class="lg:col-span-2" data-aos="fade-right">
                <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Informasi Kontak</span>
                <h2 class="text-3xl font-serif font-bold text-gray-900 mt-3 mb-6">Hubungi <span class="gradient-text">Kami</span></h2>
                <div class="section-divider mb-8"></div>
                <p class="text-gray-600 leading-relaxed mb-8">Yayasan membuka kesempatan kerja sama dengan donatur, komunitas, perusahaan, dan lembaga sosial untuk bersama-sama memberikan manfaat bagi masyarakat.</p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-primary-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-primary-700"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Alamat</h4>
                            <p class="text-gray-500 text-sm mt-1">Kabupaten Bogor, Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-gold-100 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-gold-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Email</h4>
                            <p class="text-gray-500 text-sm mt-1">info@warungamalhaunan.or.id</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                            <i class="fab fa-whatsapp text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">WhatsApp</h4>
                            <p class="text-gray-500 text-sm mt-1">+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>

                {{-- Social Media --}}
                <div class="mt-10">
                    <h4 class="font-semibold text-gray-900 mb-4">Media Sosial</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-11 h-11 rounded-xl bg-gray-100 hover:bg-primary-700 flex items-center justify-center text-gray-500 hover:text-white transition-all duration-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-11 h-11 rounded-xl bg-gray-100 hover:bg-primary-700 flex items-center justify-center text-gray-500 hover:text-white transition-all duration-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-11 h-11 rounded-xl bg-gray-100 hover:bg-primary-700 flex items-center justify-center text-gray-500 hover:text-white transition-all duration-300"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-11 h-11 rounded-xl bg-gray-100 hover:bg-primary-700 flex items-center justify-center text-gray-500 hover:text-white transition-all duration-300"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3" data-aos="fade-left">
                <div class="bg-gray-50 rounded-3xl p-8 md:p-10 border border-gray-100">
                    <h3 class="text-2xl font-serif font-bold text-gray-900 mb-2">Kirim Pesan</h3>
                    <p class="text-gray-500 text-sm mb-8">Isi formulir di bawah ini dan kami akan segera merespons</p>

                    <form id="contactForm" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="text-sm font-medium text-gray-700 mb-2 block">Nama Lengkap</label>
                                <input type="text" required placeholder="Masukkan nama Anda" class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white text-gray-900 placeholder-gray-400 text-sm transition-all duration-300">
                            </div>
                            <div>
                                <label class="text-sm font-medium text-gray-700 mb-2 block">Email</label>
                                <input type="email" required placeholder="email@contoh.com" class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white text-gray-900 placeholder-gray-400 text-sm transition-all duration-300">
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Subjek</label>
                            <select class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white text-gray-900 text-sm transition-all duration-300">
                                <option value="">Pilih Subjek</option>
                                <option>Informasi Umum</option>
                                <option>Kerja Sama / Kolaborasi</option>
                                <option>Donasi</option>
                                <option>Volunter / Relawan</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-gray-700 mb-2 block">Pesan</label>
                            <textarea rows="5" required placeholder="Tulis pesan Anda di sini..." class="form-input w-full px-5 py-3.5 rounded-xl border border-gray-200 bg-white text-gray-900 placeholder-gray-400 text-sm transition-all duration-300 resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full md:w-auto inline-flex items-center justify-center px-8 py-4 rounded-full bg-gradient-to-r from-primary-700 to-primary-900 text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <i class="fas fa-paper-plane mr-3"></i>
                            <span>Kirim Pesan</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Map placeholder --}}
<section class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="rounded-3xl overflow-hidden h-80 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center" data-aos="fade-up">
            <div class="text-center text-gray-400">
                <i class="fas fa-map-marked-alt text-6xl mb-4"></i>
                <p class="font-semibold text-lg">Kabupaten Bogor, Jawa Barat</p>
                <p class="text-sm mt-1">Peta lokasi yayasan</p>
            </div>
        </div>
    </div>
</section>

{{-- Kolaborasi CTA --}}
<section class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-gold-600 font-semibold text-sm uppercase tracking-widest">Kolaborasi</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-gray-900 mt-3 mb-4">Kesempatan <span class="gradient-text">Kerja Sama</span></h2>
            <div class="section-divider mx-auto mb-6"></div>
        </div>
        <div class="grid md:grid-cols-4 gap-6" data-aos="fade-up">
            <div class="bg-gray-50 rounded-2xl p-6 text-center card-hover border border-gray-100">
                <div class="w-14 h-14 rounded-2xl bg-primary-100 flex items-center justify-center mx-auto mb-4"><i class="fas fa-hand-holding-usd text-primary-700 text-xl"></i></div>
                <h4 class="font-bold text-gray-900">Donatur</h4>
                <p class="text-gray-500 text-xs mt-2">Menyalurkan donasi untuk program kebaikan</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 text-center card-hover border border-gray-100">
                <div class="w-14 h-14 rounded-2xl bg-gold-100 flex items-center justify-center mx-auto mb-4"><i class="fas fa-users text-gold-600 text-xl"></i></div>
                <h4 class="font-bold text-gray-900">Komunitas</h4>
                <p class="text-gray-500 text-xs mt-2">Bersinergi dalam aksi sosial bersama</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 text-center card-hover border border-gray-100">
                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center mx-auto mb-4"><i class="fas fa-building text-blue-600 text-xl"></i></div>
                <h4 class="font-bold text-gray-900">Perusahaan</h4>
                <p class="text-gray-500 text-xs mt-2">Program CSR dan kemitraan strategis</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 text-center card-hover border border-gray-100">
                <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center mx-auto mb-4"><i class="fas fa-handshake text-red-600 text-xl"></i></div>
                <h4 class="font-bold text-gray-900">Lembaga Sosial</h4>
                <p class="text-gray-500 text-xs mt-2">Kolaborasi antar lembaga kebaikan</p>
            </div>
        </div>
    </div>
</section>

@endsection
