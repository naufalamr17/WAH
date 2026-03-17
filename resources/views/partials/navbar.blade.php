{{-- Navbar --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-primary-700 to-primary-900 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-primary-700/50 transition-all duration-300">
                    <i class="fas fa-hand-holding-heart text-white text-lg"></i>
                </div>
                <div>
                    <span class="text-lg font-bold nav-brand-text text-white transition-colors duration-300">WAH</span>
                    <span class="block text-xs nav-brand-sub text-white/70 -mt-1 transition-colors duration-300">Warung Amal Haunan</span>
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{ route('vision-mission') }}" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('vision-mission') ? 'active' : '' }}">Visi & Misi</a>
                <a href="{{ route('programs') }}" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('programs') ? 'active' : '' }}">Program</a>
                <a href="{{ route('legal') }}" class="nav-link px-4 py-2 rounded-lg text-sm font-medium text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 {{ request()->routeIs('legal') ? 'active' : '' }}">Legalitas</a>
                <a href="{{ route('contact') }}" class="nav-link ml-2 px-6 py-2.5 rounded-full text-sm font-semibold bg-gradient-to-r from-gold-500 to-gold-600 text-white hover:from-gold-600 hover:to-gold-700 shadow-lg hover:shadow-gold-500/30 transition-all duration-300">Kontak</a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="lg:hidden relative z-50 w-10 h-10 flex items-center justify-center rounded-lg text-white hover:bg-white/10 transition-all duration-300" aria-label="Menu">
                <div class="hamburger-lines">
                    <span class="line line1 block w-6 h-0.5 bg-current transition-all duration-300"></span>
                    <span class="line line2 block w-6 h-0.5 bg-current mt-1.5 transition-all duration-300"></span>
                    <span class="line line3 block w-4 h-0.5 bg-current mt-1.5 transition-all duration-300"></span>
                </div>
            </button>
        </div>
    </div>

    </div>
</nav>

{{-- Mobile Menu --}}
<div id="mobile-menu" class="lg:hidden fixed inset-0 z-[60] bg-primary-900/98 backdrop-blur-xl transform translate-x-full transition-transform duration-500 ease-in-out">
    {{-- Close Button inside menu for better UX --}}
    <div class="absolute top-6 right-6">
        <button id="mobile-menu-close" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-all">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
    <div class="flex flex-col items-center justify-center h-full space-y-6">
        <a href="{{ route('home') }}" class="mobile-nav-link text-2xl font-semibold text-white/90 hover:text-gold-400 transition-all duration-300">Beranda</a>
        <a href="{{ route('about') }}" class="mobile-nav-link text-2xl font-semibold text-white/90 hover:text-gold-400 transition-all duration-300">Tentang</a>
        <a href="{{ route('vision-mission') }}" class="mobile-nav-link text-2xl font-semibold text-white/90 hover:text-gold-400 transition-all duration-300">Visi & Misi</a>
        <a href="{{ route('programs') }}" class="mobile-nav-link text-2xl font-semibold text-white/90 hover:text-gold-400 transition-all duration-300">Program</a>
        <a href="{{ route('legal') }}" class="mobile-nav-link text-2xl font-semibold text-white/90 hover:text-gold-400 transition-all duration-300">Legalitas</a>
        <a href="{{ route('contact') }}" class="mobile-nav-link mt-4 px-8 py-3 rounded-full text-lg font-semibold bg-gradient-to-r from-gold-500 to-gold-600 text-white shadow-lg">Kontak</a>
    </div>
</div>
