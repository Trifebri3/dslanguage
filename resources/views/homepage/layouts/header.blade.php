<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out bg-white shadow-sm border-b border-gray-100">
    <!-- Remove gradient overlay to keep it clean -->
    <div class="absolute inset-0 w-full h-full pointer-events-none hidden lg:block transition-opacity duration-300" id="header-gradient"></div>

    <div class="flex items-center justify-between px-6 lg:px-12 py-3 lg:py-4 relative z-10">
        <!-- Logo area -->
        <div class="flex items-center pl-2 lg:pl-4 opacity-0 animate-fade-in-up" style="animation-delay: 0.1s; animation-fill-mode: forwards;">
            <a href="/" class="block transform hover:scale-[1.03] transition-all duration-500">
                <img src="{{ asset('images/logo.png') }}" alt="DS Language Logo" class="h-8 lg:h-11 w-auto object-contain drop-shadow-sm hover:drop-shadow-md transition-all duration-500">
            </a>
        </div>
        
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden text-[#324338] hover:text-[#C0A062] p-2 rounded-full focus:outline-none opacity-0 animate-fade-in-up transition-colors" style="animation-delay: 0.3s; animation-fill-mode: forwards;">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>

        <!-- Navigation area (Desktop) -->
        <div class="hidden lg:flex items-center justify-end gap-3 xl:gap-5 text-[0.65rem] xl:text-[0.7rem] font-bold tracking-widest text-[#324338] opacity-0 animate-fade-in-up transition-all duration-300" style="animation-delay: 0.3s; animation-fill-mode: forwards;">
            
            <nav class="flex items-center gap-3 xl:gap-5 uppercase">
                <a href="/" class="relative hover:text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap {{ request()->is('/') ? 'text-[#C0A062]' : '' }}">
                    {{ __('HOME') }}
                    <span class="absolute -bottom-1 left-1/2 w-0 h-px bg-[#C0A062] transition-all duration-300 ease-out hover:w-full hover:left-0 opacity-0 hover:opacity-100"></span>
                </a>
                
                <a href="/about" class="relative hover:text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap {{ request()->is('about') ? 'text-[#C0A062]' : '' }}">
                    {{ __('ABOUT') }}
                    <span class="absolute -bottom-1 left-1/2 w-0 h-px bg-[#C0A062] transition-all duration-300 ease-out hover:w-full hover:left-0 opacity-0 hover:opacity-100"></span>
                </a>
                
                <!-- Employer Readiness Dropdown -->
                <div class="relative group py-4 cursor-pointer">
                    <a href="/employer-readiness" class="relative py-1 transition-colors duration-300 whitespace-nowrap flex items-center gap-1 {{ request()->is('employer-readiness*') ? 'text-[#C0A062]' : 'hover:text-[#C0A062]' }}">
                        <span class="relative z-10">{{ __('EMPLOYER READINESS') }}</span>
                        <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#C0A062] transition-all duration-500 ease-out group-hover:w-full"></span>
                    </a>
                    <!-- Dropdown Content -->
                    <div class="absolute top-full right-0 lg:left-1/2 lg:-translate-x-1/2 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 w-64 z-50">
                        <div class="bg-white shadow-2xl border border-gray-100 p-6 flex flex-col gap-4 rounded-sm">
                            @foreach([
                                'Employer Readiness' => '/employer-readiness',
                                'Candidate Readiness' => '/employer-readiness/candidate-readiness',
                                'Language Readiness' => '/employer-readiness/language-readiness',
                                'Cultural & Workplace' => '/employer-readiness/cultural-readiness',
                                'International Talent' => '/employer-readiness/international-talent',
                                'Hospitality Talent' => '/employer-readiness/hospitality-talent',
                                'Employer Solutions' => '/employer-readiness/employer-solutions',
                                'Document & Req' => '/employer-readiness/document-readiness'
                            ] as $label => $link)
                                <a href="{{ $link }}" class="text-[0.65rem] tracking-widest uppercase font-bold transition-colors border-b border-gray-50 pb-2 last:border-0 last:pb-0 {{ request()->is(ltrim($link, '/')) || (request()->is('employer-readiness') && $link == '/employer-readiness') ? 'text-[#C0A062]' : 'text-gray-400 hover:text-[#324338]' }}">
                                    {{ __($label) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Germany Program Dropdown -->
                <div class="relative group py-4 cursor-pointer">
                    <a href="/programs" class="relative py-1 transition-colors duration-300 flex items-center gap-1 whitespace-nowrap {{ request()->is('programs*') ? 'text-[#C0A062]' : 'hover:text-[#C0A062]' }}">
                        <span class="relative z-10">{{ __('GERMANY PROGRAM') }}</span>
                        <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#C0A062] transition-all duration-500 ease-out group-hover:w-full"></span>
                    </a>
                    <!-- Dropdown Content -->
                    <div class="absolute top-full right-0 lg:left-1/2 lg:-translate-x-1/2 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 w-60 z-50">
                        <div class="bg-white shadow-2xl border border-gray-100 p-6 flex flex-col gap-4 rounded-sm">
                            @foreach([
                                'Germany Program' => '/programs',
                                'German Language' => '/programs/german-language',
                                'Ausbildung' => '/programs/ausbildung',
                                'Study in Germany' => '/programs/study-in-germany',
                                'Supporting Services' => '/programs/supporting-services'
                            ] as $label => $link)
                                <a href="{{ $link }}" class="text-[0.65rem] tracking-widest uppercase font-bold transition-colors border-b border-gray-50 pb-2 last:border-0 last:pb-0 {{ request()->is(ltrim($link, '/')) || (request()->is('programs') && $link == '/programs') ? 'text-[#C0A062]' : 'text-gray-400 hover:text-[#324338]' }}">
                                    {{ __($label) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <a href="/japan-career-hub" class="relative hover:text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap {{ request()->is('japan-career-hub') ? 'text-[#C0A062]' : '' }}">
                    {{ __('JAPAN CAREER HUB') }}
                    <span class="absolute -bottom-1 left-1/2 w-0 h-px bg-[#C0A062] transition-all duration-300 ease-out hover:w-full hover:left-0 opacity-0 hover:opacity-100"></span>
                </a>
                
                <a href="/netherlands-hub" class="relative hover:text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap {{ request()->is('netherlands-hub') ? 'text-[#C0A062]' : '' }}">
                    {{ __('DUTCH EDUCATION') }}
                    <span class="absolute -bottom-1 left-1/2 w-0 h-px bg-[#C0A062] transition-all duration-300 ease-out hover:w-full hover:left-0 opacity-0 hover:opacity-100"></span>
                </a>
                
                <a href="/insights" class="relative hover:text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap {{ request()->is('insights') ? 'text-[#C0A062]' : '' }}">
                    {{ __('INSIGHTS') }}
                    <span class="absolute -bottom-1 left-1/2 w-0 h-px bg-[#C0A062] transition-all duration-300 ease-out hover:w-full hover:left-0 opacity-0 hover:opacity-100"></span>
                </a>
                
                <a href="/contact" class="relative hover:text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap {{ request()->is('contact') ? 'text-[#C0A062]' : '' }}">
                    {{ __('CONTACT') }}
                    <span class="absolute -bottom-1 left-1/2 w-0 h-px bg-[#C0A062] transition-all duration-300 ease-out hover:w-full hover:left-0 opacity-0 hover:opacity-100"></span>
                </a>
            </nav>
            
            <div class="border-l border-gray-400/50 h-5 mx-1 xl:mx-2"></div>
            
            <!-- Language Dropdown -->
            <div class="relative group py-4 cursor-pointer">
                <a href="#" class="relative flex items-center gap-1 text-[#C0A062] py-1 transition-colors duration-300 whitespace-nowrap">
                    <span class="relative z-10 font-bold uppercase">{{ app()->getLocale() }}</span>
                    <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                
                <!-- Dropdown Content -->
                <div class="absolute top-full right-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 w-20 z-50">
                    <div class="bg-white shadow-2xl border border-gray-100 p-4 flex flex-col gap-3 rounded-sm">
                        @foreach(['en', 'id', 'de', 'nl', 'ja'] as $lang)
                            @if($lang !== app()->getLocale())
                                <a href="{{ route('lang.switch', $lang) }}" class="text-[0.65rem] tracking-widest font-bold text-gray-400 hover:text-[#C0A062] uppercase transition-colors border-b border-gray-50 pb-2 last:border-0 last:pb-0">
                                    {{ strtoupper($lang) }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Full-Screen Overlay Menu -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-[#324338]/95 backdrop-blur-xl z-[60] flex flex-col justify-center items-center opacity-0 pointer-events-none transition-all duration-500 ease-in-out">
    <button id="close-menu-btn" class="absolute top-8 right-8 text-white p-2 hover:text-[#C0A062] transition-colors duration-300">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    
    <nav class="flex flex-col items-center gap-6 text-white text-lg lg:text-xl font-serif tracking-wider">
        @foreach([
            'HOME' => '/',
            'ABOUT' => '/about',
            'EMPLOYER READINESS' => '/employer-readiness',
            'GERMANY PROGRAM' => '/programs',
            'JAPAN CAREER HUB' => '/japan-career-hub',
            'DUTCH EDUCATION' => '/netherlands-hub',
            'INSIGHTS' => '/insights',
            'CONTACT' => '/contact'
        ] as $label => $link)
            <a href="{{ $link }}" class="hover:text-[#C0A062] transition-colors duration-300 transform hover:scale-110">{{ __($label) }}</a>
        @endforeach
    </nav>
    
    <div class="flex gap-6 mt-10 text-gray-400 font-bold uppercase text-sm">
        @foreach(['en', 'id', 'de', 'nl', 'ja'] as $lang)
            <a href="{{ route('lang.switch', $lang) }}" class="hover:text-[#C0A062] {{ $lang == app()->getLocale() ? 'text-[#C0A062]' : '' }} transition-colors duration-300">{{ strtoupper($lang) }}</a>
        @endforeach
    </div>
</div>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(-15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in-up {
        animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    /* Sticky Header Scrolled Style */
    .header-scrolled {
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.08);
    }
    
    /* Reveal overlay */
    .menu-open {
        opacity: 1 !important;
        pointer-events: auto !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');
        const gradient = document.getElementById('header-gradient');
        
        // Ensure gradient shows initially if at top
        if (window.scrollY < 20 && gradient) {
            gradient.classList.remove('opacity-0');
            gradient.classList.add('opacity-100');
        }
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('header-scrolled');
                if(gradient) {
                    gradient.classList.add('opacity-0');
                    gradient.classList.remove('opacity-100');
                }
            } else {
                header.classList.remove('header-scrolled');
                if(gradient) {
                    gradient.classList.remove('opacity-0');
                    gradient.classList.add('opacity-100');
                }
            }
        });

        // Mobile Menu Logic
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');
        const overlay = document.getElementById('mobile-menu-overlay');

        mobileMenuBtn.addEventListener('click', () => {
            overlay.classList.add('menu-open');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });

        closeMenuBtn.addEventListener('click', () => {
            overlay.classList.remove('menu-open');
            document.body.style.overflow = 'auto'; // Restore scrolling
        });
    });
</script>
