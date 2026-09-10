@extends('homepage.layouts.app')

@section('title', 'Contact DS Language, Let’s Talk')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    Let’s Talk
                </p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    Your Direction Starts With a Conversation
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Whether you are preparing to build a future in Germany, or you are an organization exploring what international talent could mean for your workforce, the first step is the same: tell us where you are, and we’ll tell you honestly what the path forward looks like.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Contact Us" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , TWO PATHS -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            
            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-[#C0A062] hover:shadow-lg transition duration-300 flex flex-col h-full group">
                <h3 class="font-bold text-[#C0A062] text-[0.65rem] tracking-[0.2em] uppercase mb-4">For Candidates</h3>
                <h4 class="font-serif text-3xl text-[#324338] mb-6">Build Your Future</h4>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    Talk to us about your language level, your goals, and which pathway (Ausbildung, Fachkraft, or study) fits your direction.
                </p>
                <div class="mt-10">
                    <a href="/programs" class="inline-flex justify-center items-center bg-[#324338] text-white px-6 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 shadow-md">
                        Begin Your German Story
                    </a>
                </div>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-[#324338] hover:shadow-lg transition duration-300 flex flex-col h-full group">
                <h3 class="font-bold text-gray-400 text-[0.65rem] tracking-[0.2em] uppercase mb-4 group-hover:text-[#324338] transition-colors">For Employers & Institutions</h3>
                <h4 class="font-serif text-3xl text-[#324338] mb-6">Find the Right Talent</h4>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    Tell us which roles you’re hiring for, how many candidates you need, and which requirements matter most.
                </p>
                <div class="mt-10">
                    <a href="/employer-readiness" class="inline-flex justify-center items-center bg-[#C0A062] text-white px-6 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#324338] transition duration-300 shadow-md">
                        Explore Employer Solutions
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION , REACH US DIRECTLY -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center border-t border-gray-600/50">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-12">Reach Us Directly</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Location -->
                <div class="flex flex-col items-center p-6 bg-[#3b4b41] border border-gray-600/50">
                    <svg class="w-8 h-8 text-[#C0A062] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <h4 class="text-sm font-bold tracking-widest uppercase text-gray-300 mb-2">Location</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Jl. Flamboyan No. 127B<br>
                        Mulyosari, Tulungrejo, Kec. Pare<br>
                        Kabupaten Kediri, Jawa Timur
                    </p>
                </div>
                
                <!-- Email -->
                <div class="flex flex-col items-center p-6 bg-[#3b4b41] border border-gray-600/50">
                    <svg class="w-8 h-8 text-[#C0A062] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <h4 class="text-sm font-bold tracking-widest uppercase text-gray-300 mb-2">Email</h4>
                    <a href="mailto:institutkurs.ds@gmail.com" class="text-[#C0A062] text-sm leading-relaxed hover:text-white transition">
                        institutkurs.ds@gmail.com
                    </a>
                </div>
                
                <!-- WhatsApp -->
                <div class="flex flex-col items-center p-6 bg-[#3b4b41] border border-gray-600/50">
                    <svg class="w-8 h-8 text-[#C0A062] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    <h4 class="text-sm font-bold tracking-widest uppercase text-gray-300 mb-2">WhatsApp</h4>
                    <a href="https://wa.me/" class="text-[#C0A062] text-sm leading-relaxed hover:text-white transition">
                        Chat via WhatsApp
                    </a>
                </div>
            </div>
            
        </div>
    </section>
@endsection
