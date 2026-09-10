@extends('homepage.layouts.app')

@section('title', 'Dutch Education, Language & Au Pair Pathway to the Netherlands')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    International Pathways
                </p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    Preparing for Life and Study in the Netherlands
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Language and cultural preparation for Indonesian candidates pursuing an Au Pair placement or further study in the Netherlands.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Netherlands Dutch Education" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , SERVICES GRID -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            
            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-[#C0A062] hover:shadow-lg transition duration-300 flex flex-col h-full group">
                <h3 class="font-bold text-[#C0A062] text-[0.65rem] tracking-[0.2em] uppercase mb-4">Foundation</h3>
                <h4 class="font-serif text-2xl text-[#324338] mb-6 group-hover:text-[#C0A062] transition-colors">Basic Dutch Course</h4>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    Foundational Dutch language instruction for candidates preparing for daily life, host-family communication, or further study in the Netherlands.
                </p>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-gray-300 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                <h3 class="font-bold text-gray-400 text-[0.65rem] tracking-[0.2em] uppercase mb-4 group-hover:text-[#C0A062] transition-colors">Pathway</h3>
                <h4 class="font-serif text-2xl text-[#324338] mb-6">Au Pair Consultation</h4>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    Guidance for candidates considering an Au Pair placement in the Netherlands: understanding what the arrangement involves and what preparation (including language and cultural readiness) it requires before departure.
                </p>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-gray-300 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                <h3 class="font-bold text-gray-400 text-[0.65rem] tracking-[0.2em] uppercase mb-4 group-hover:text-[#C0A062] transition-colors">Preparation</h3>
                <h4 class="font-serif text-2xl text-[#324338] mb-6">Cultural Integration</h4>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    Preparation focused on Dutch social and household norms (communication style, daily routines, and expectations within a host-family environment) so the adjustment period after arrival is shorter and less disorienting.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , FINAL CTA & RELATED -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-6">Talk to Us About the Netherlands</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-12 max-w-2xl mx-auto font-light">
                Tell us whether you’re exploring Au Pair placement or further study, and your current Dutch level, and we’ll walk you through the next step.
            </p>
            <a href="#" class="inline-flex justify-center items-center bg-white text-[#324338] px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] hover:text-white transition duration-300 shadow-xl hover:shadow-2xl mb-12">
                Talk to Us About the Netherlands
            </a>
            
            <div class="border-t border-gray-600/50 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Navigation</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="/programs" class="text-[#C0A062] hover:text-white transition">Germany Program</a>
                    <span class="text-gray-500">|</span>
                    <a href="/" class="text-[#C0A062] hover:text-white transition">&larr; Back to Homepage</a>
                </div>
            </div>
        </div>
    </section>
@endsection
