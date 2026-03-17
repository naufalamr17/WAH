<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Yayasan Warung Amal Haunan — Lembaga sosial, kemanusiaan, dan keagamaan yang berkomitmen memberikan manfaat bagi masyarakat.')">
    <title>@yield('title', 'Yayasan Warung Amal Haunan')</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Tailwind CSS via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                            950: '#052e16',
                        },
                        gold: {
                            50: '#fefce8',
                            100: '#fef9c3',
                            200: '#fef08a',
                            300: '#fde047',
                            400: '#facc15',
                            500: '#d4a843',
                            600: '#b8860b',
                            700: '#a16207',
                            800: '#854d0e',
                            900: '#713f12',
                        },
                        dark: '#1a1a2e',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                },
            },
        }
    </script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- AOS Animation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @yield('styles')
</head>

<body class="font-sans text-gray-700 bg-white antialiased">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- WhatsApp Floating Button --}}
    <a href="https://wa.me/6285211726656" target="_blank" rel="noopener noreferrer"
        class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group"
        aria-label="Chat WhatsApp">
        <i class="fab fa-whatsapp text-2xl group-hover:animate-bounce"></i>
    </a>

    {{-- AOS JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield('scripts')
</body>

</html>