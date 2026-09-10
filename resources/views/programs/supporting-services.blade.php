@extends('homepage.layouts.app')

@section('title', 'Supporting Services, Departure Readiness, Handled')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    <a href="/programs" class="hover:text-[#324338] transition">Germany Program</a> 
                    <span class="text-gray-400">/</span>
                    <span>Coordination & Departure</span>
                </div>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    The Practical Layer Most Language Schools Leave to You
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Passing your language exam or receiving your Ausbildung contract is not the same as being ready to depart. These are the three practical requirements most candidates face next.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Supporting Services" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , SERVICES GRID -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            
            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-[#C0A062] hover:shadow-lg transition duration-300 flex flex-col h-full">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">Certified Document Translation</h3>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    German institutions (universities, immigration offices, employers) typically require certified translations of Indonesian academic and personal documents. We support candidates in preparing these translations so paperwork doesn’t become the reason a strong application stalls.
                </p>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-gray-300 hover:shadow-lg transition duration-300 flex flex-col h-full">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">Blocked Account Opening Assistance</h3>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    A blocked account (Sperrkonto) is a standard financial requirement for many German student and Ausbildung visa applications, showing proof of funds for living costs. We guide candidates through setting this up correctly and on the timeline their visa application requires.
                </p>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-gray-300 hover:shadow-lg transition duration-300 flex flex-col h-full">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">German Health Insurance</h3>
                <p class="text-gray-600 leading-relaxed flex-grow">
                    Health insurance is mandatory for anyone studying, training, or living in Germany, and the right type of coverage depends on the candidate’s specific status: student, Auszubildende, or employee. We guide candidates through understanding what’s required for their situation before they arrive.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , FINAL CTA & RELATED -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-6">Ask About Departure Preparation</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-12 max-w-2xl mx-auto font-light">
                If you already have a language certificate, an Ausbildung contract, or a university offer, this is the next step. Talk to us about what’s left before departure.
            </p>
            <a href="#" class="inline-flex justify-center items-center bg-white text-[#324338] px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] hover:text-white transition duration-300 shadow-xl hover:shadow-2xl mb-12">
                Ask About Supporting Services
            </a>
            
            <div class="border-t border-gray-600/50 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Links</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="/employer-readiness/document-readiness" class="text-[#C0A062] hover:text-white transition">Document & Req Readiness (Employer)</a>
                    <span class="text-gray-500">|</span>
                    <a href="/programs" class="text-[#C0A062] hover:text-white transition">&larr; Back to Germany Program</a>
                </div>
            </div>
        </div>
    </section>
@endsection
