{{-- Footer --}}
<footer class="bg-gradient-to-b from-primary-950 to-black text-white relative overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gold-500/50 to-transparent"></div>
    <div class="absolute top-20 right-10 w-64 h-64 bg-primary-800/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-10 w-48 h-48 bg-gold-500/5 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Main Footer Content --}}
        <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            {{-- About Column --}}
            <div class="lg:col-span-1" data-aos="fade-up">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary-600 to-primary-800 rounded-xl flex items-center justify-center">
                        <i class="fas fa-hand-holding-heart text-white"></i>
                    </div>
                    <div>
                        <span class="text-lg font-bold text-white">WAH</span>
                        <span class="block text-xs text-white/50 -mt-1">Warung Amal Haunan</span>
                    </div>
                </div>
                <p class="text-white/60 text-sm leading-relaxed mb-6">
                    Lembaga sosial, kemanusiaan, dan keagamaan yang berkomitmen memberikan manfaat bagi masyarakat melalui kegiatan amal, pendidikan, kesehatan, dan pemberdayaan sosial.
                </p>
                <div class="flex space-x-3">
                    <a href="#" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary-600 flex items-center justify-center text-white/60 hover:text-white transition-all duration-300">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary-600 flex items-center justify-center text-white/60 hover:text-white transition-all duration-300">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary-600 flex items-center justify-center text-white/60 hover:text-white transition-all duration-300">
                        <i class="fab fa-youtube text-sm"></i>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary-600 flex items-center justify-center text-white/60 hover:text-white transition-all duration-300">
                        <i class="fab fa-tiktok text-sm"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gold-400 mb-6">Navigasi</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-white/60 hover:text-white hover:pl-2 transition-all duration-300 text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="text-white/60 hover:text-white hover:pl-2 transition-all duration-300 text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>Tentang Kami</a></li>
                    <li><a href="{{ route('vision-mission') }}" class="text-white/60 hover:text-white hover:pl-2 transition-all duration-300 text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>Visi & Misi</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white hover:pl-2 transition-all duration-300 text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>Program</a></li>
                    <li><a href="{{ route('legal') }}" class="text-white/60 hover:text-white hover:pl-2 transition-all duration-300 text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>Legalitas</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white/60 hover:text-white hover:pl-2 transition-all duration-300 text-sm flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-primary-500"></i>Kontak</a></li>
                </ul>
            </div>

            {{-- Programs --}}
            <div data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gold-400 mb-6">Program</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white transition-all duration-300 text-sm flex items-center"><i class="fas fa-circle text-[4px] mr-3 text-primary-500"></i>Pendidikan</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white transition-all duration-300 text-sm flex items-center"><i class="fas fa-circle text-[4px] mr-3 text-primary-500"></i>Kesehatan</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white transition-all duration-300 text-sm flex items-center"><i class="fas fa-circle text-[4px] mr-3 text-primary-500"></i>Bantuan Bencana</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white transition-all duration-300 text-sm flex items-center"><i class="fas fa-circle text-[4px] mr-3 text-primary-500"></i>Santunan Yatim</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white transition-all duration-300 text-sm flex items-center"><i class="fas fa-circle text-[4px] mr-3 text-primary-500"></i>Majelis Taklim</a></li>
                    <li><a href="{{ route('programs') }}" class="text-white/60 hover:text-white transition-all duration-300 text-sm flex items-center"><i class="fas fa-circle text-[4px] mr-3 text-primary-500"></i>Pengelolaan ZIS</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gold-400 mb-6">Kontak</h4>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i class="fas fa-map-marker-alt text-primary-400 text-sm"></i>
                        </div>
                        <span class="text-white/60 text-sm leading-relaxed">Jl. Kayu Manis, Cirimekar, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16917</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-primary-400 text-sm"></i>
                        </div>
                        <span class="text-white/60 text-sm">info@warungamalhaunan.or.id</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-primary-400 text-sm"></i>
                        </div>
                        <span class="text-white/60 text-sm">+62 852 1172 6656</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/10 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-white/40 text-sm">
                &copy; {{ date('Y') }} Yayasan Warung Amal Haunan. Seluruh hak cipta dilindungi.
            </p>
            <p class="text-white/30 text-xs">
                Berlandaskan Pancasila dengan menjalankan ajaran Islam Ahlus Sunnah wal Jamaah
            </p>
        </div>
    </div>
</footer>