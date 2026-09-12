@extends('homepage.layouts.app')

@section('title', 'Ausbildung, Vocational Training in Germany')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    <a href="{{ route('programs.index') }}" class="hover:text-[#324338] transition">Germany Program</a> 
                    <span class="text-gray-400">/</span>
                    <span>Career Pathway</span>
                </div>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    A Recognized Route Into a German Career
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Ausbildung combines paid, structured on-the-job training with vocational schooling, Germany’s standard route into a skilled trade or profession, open to qualified international candidates.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Ausbildung Vocational Training" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , FIELD & DOCUMENTATION -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            
            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-[#C0A062] hover:shadow-lg transition duration-300">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">Field of Expertise Consultation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Ausbildung exists across dozens of professions: hospitality, technical trades, healthcare support, and more. Before any application begins, we work with candidates to identify the field that genuinely fits their background, language level, and long-term goals, rather than pointing them toward whichever vacancy is easiest to fill.
                </p>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-gray-300 hover:shadow-lg transition duration-300">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">Document Preparation: CV & Motivation Letter</h3>
                <p class="text-gray-600 leading-relaxed">
                    German employers read applications differently than Indonesian ones: structure, tone, and what’s considered relevant all differ. We prepare CVs and motivation letters built to German expectations, not translated versions of an Indonesian-style application.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , INTERVIEW PREP -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-ds-light border-y border-gray-200">
        <div class="max-w-4xl mx-auto text-center lg:text-left flex flex-col lg:flex-row items-center gap-12">
            
            <div class="w-full lg:w-1/3">
                <h3 class="font-serif text-3xl text-[#324338] mb-4">Job Interview Preparation</h3>
                <div class="w-16 h-1 bg-[#C0A062] mx-auto lg:mx-0"></div>
            </div>

            <div class="w-full lg:w-2/3">
                <p class="text-gray-600 leading-relaxed text-lg">
                    Structured practice for the interview itself, in German under realistic conditions, covering the kinds of questions German employers actually ask and the professional register expected in a formal interview setting.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , WHAT TO EXPECT -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-8">What To Expect</h2>
            <p class="text-gray-300 text-lg sm:text-xl leading-relaxed max-w-3xl mx-auto font-light">
                Bagas Pratama, who trained in Gastronomy in Berlin through this pathway, is one example of what a completed Ausbildung placement looks like: language preparation, field consultation, and application support carried through to departure.
            </p>
        </div>
    </section>

    <!-- SECTION , FINAL CTA & RELATED -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-white text-[#324338] text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-6">Talk to Us About Ausbildung</h2>
            <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-12 max-w-2xl mx-auto">
                Tell us your field of interest and current language level, and we’ll walk you through what the pathway looks like for you specifically.
            </p>
            <a href="{{ route('contact.index') }}" class="inline-flex justify-center items-center bg-[#324338] text-white px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 shadow-xl hover:shadow-2xl mb-12">
                Talk to Us About Ausbildung
            </a>
            
            <div class="border-t border-gray-200 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Programs</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="{{ route('programs.german-language') }}" class="text-[#324338] hover:text-[#C0A062] transition">German Language Program</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('programs.supporting-services') }}" class="text-[#324338] hover:text-[#C0A062] transition">Supporting Services</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('programs.index') }}" class="text-[#C0A062] hover:text-[#324338] transition">&larr; Back to Germany Program</a>
                </div>
            </div>
        </div>
    </section>
@endsection
