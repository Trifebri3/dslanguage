@extends('homepage.layouts.app')

@section('title', 'Insights, Guidance on Language, Culture & International Careers')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    Knowledge Hub
                </p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    Practical Guidance, Not Just Encouragement
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Articles on the language, visa, cultural, and career questions candidates and employers actually have, written from direct experience with these pathways, not general research.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Insights and Articles" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , CATEGORIES -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 leading-tight">Browse by Topic</h2>
                <p class="text-gray-500 text-base sm:text-lg max-w-2xl mx-auto">Filter by what’s relevant to you: Education, Culture, or Career.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- CARDS -->
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <div class="w-12 h-1 bg-[#C0A062] mb-6"></div>
                    <h4 class="font-bold text-[#324338] text-xl mb-4">Education</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Exam preparation, Studienkolleg, application processes.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Read Education Articles &rarr;</a>
                </div>
                
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <div class="w-12 h-1 bg-[#C0A062] mb-6"></div>
                    <h4 class="font-bold text-[#324338] text-xl mb-4">Culture</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Adjusting to life and work in a new country.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Read Culture Articles &rarr;</a>
                </div>
                
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <div class="w-12 h-1 bg-[#C0A062] mb-6"></div>
                    <h4 class="font-bold text-[#324338] text-xl mb-4">Career</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Ausbildung, workplace expectations, international job pathways.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Read Career Articles &rarr;</a>
                </div>
            </div>
            
            <!-- Article Placeholder Grid (Optional) -->
            <div class="mt-16 pt-16 border-t border-gray-100 grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 opacity-50 grayscale hover:grayscale-0 transition duration-500 cursor-not-allowed">
                <div class="flex flex-col gap-4">
                    <div class="h-48 bg-gray-200"></div>
                    <span class="text-xs font-bold text-[#C0A062] uppercase tracking-widest">Education</span>
                    <h4 class="font-serif text-2xl text-[#324338]">Latest Article Coming Soon</h4>
                    <p class="text-gray-500 text-sm">We are preparing detailed guides and insights. Please check back later.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="h-48 bg-gray-200"></div>
                    <span class="text-xs font-bold text-[#C0A062] uppercase tracking-widest">Career</span>
                    <h4 class="font-serif text-2xl text-[#324338]">Latest Article Coming Soon</h4>
                    <p class="text-gray-500 text-sm">We are preparing detailed guides and insights. Please check back later.</p>
                </div>
            </div>
            
        </div>
    </section>

    <!-- SECTION , FINAL CTA -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-6">Ready to Start Your Own Pathway?</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-12 max-w-2xl mx-auto font-light">
                Reading is a good first step. Talking to us is the next one.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mb-12">
                <a href="/programs" class="inline-flex justify-center items-center bg-white text-[#324338] px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] hover:text-white transition duration-300 shadow-xl hover:shadow-2xl w-full sm:w-auto">
                    Explore Programs
                </a>
                <a href="/employer-readiness" class="inline-flex justify-center items-center bg-transparent border border-white text-white px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-white hover:text-[#324338] transition duration-300 w-full sm:w-auto">
                    Explore Employer Readiness
                </a>
            </div>
            
        </div>
    </section>
@endsection
