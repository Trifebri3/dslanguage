@extends('homepage.layouts.app')

@section('title', 'Germany Program, Language, Ausbildung & Study Pathways')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    Your Pathway to Germany
                </p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    One Organization,<br class="hidden lg:block"> One Continuous Pathway
                </h1>
                <p class="text-gray-500 text-base lg:text-lg leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Most people meet DS Language at one entry point: a language class, a question about Ausbildung, a conversation about studying in Germany. What you’re actually stepping into is a single, connected pathway, not an isolated service.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Germany Program" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , CHOOSE YOUR PATHWAY -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 leading-tight">Choose Your Pathway</h2>
                <p class="text-gray-500 text-base sm:text-lg max-w-2xl mx-auto">Not everyone is heading to Germany the same way. Choose the route that fits your goal.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- CARDS -->
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <div class="w-12 h-1 bg-[#C0A062] mb-6"></div>
                    <h4 class="font-bold text-[#324338] text-xl mb-4">German Language Program</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Structured instruction from A1 to B2, with Goethe and telc exam preparation. This is where readiness starts, but not where it ends.</p>
                    <a href="{{ route('programs.german-language') }}" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">German Language Program &rarr;</a>
                </div>
                
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <div class="w-12 h-1 bg-[#C0A062] mb-6"></div>
                    <h4 class="font-bold text-[#324338] text-xl mb-4">Ausbildung</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Vocational training in Germany: choosing a field, preparing your application, and interview readiness.</p>
                    <a href="{{ route('programs.ausbildung') }}" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Ausbildung &rarr;</a>
                </div>
                
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <div class="w-12 h-1 bg-[#C0A062] mb-6"></div>
                    <h4 class="font-bold text-[#324338] text-xl mb-4">Study in Germany</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-grow">Studienkolleg preparation, university application support, and visa guidance for prospective students.</p>
                    <a href="{{ route('programs.study-in-germany') }}" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Study in Germany &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION , SUPPORTING SERVICES -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-ds-light border-t border-gray-200">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-serif text-3xl sm:text-4xl text-[#324338] mb-6">The Practical Layer Most Language Schools Leave to You</h2>
            <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-10">
                Certified document translation, blocked account setup, and German health insurance guidance, handled as part of the same relationship, not outsourced to someone else.
            </p>
            <a href="{{ route('programs.supporting-services') }}" class="inline-flex items-center text-[#C0A062] font-bold text-sm tracking-widest uppercase hover:text-yellow-600 transition">
                Supporting Services &rarr;
            </a>
        </div>
    </section>

    <!-- SECTION , WHY DS LANGUAGE FOR GERMANY -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-8">Standards, Not Shortcuts</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-6 font-light">
                Every program here is built around the internationally recognized GER framework, not accelerated promises.
            </p>
            <p class="text-[#C0A062] text-lg sm:text-xl font-medium italic">
                "We would rather take the time you actually need than sell you the timeline you want to hear, because the goal isn’t a certificate, it’s being ready when you land."
            </p>
        </div>
    </section>

    <!-- SECTION , FINAL CTA -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-white text-[#324338] text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-6">Begin Your German Story</h2>
            <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-12 max-w-2xl mx-auto">
                Talk to us about your language level, your goals, and which pathway fits your direction.
            </p>
            <a href="{{ route('contact.index') }}" class="inline-flex justify-center items-center bg-[#324338] text-white px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 shadow-xl hover:shadow-2xl mb-12">
                Begin Your German Story
            </a>
            
            <div class="border-t border-gray-200 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Navigation</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="{{ route('employer.index') }}" class="text-[#324338] hover:text-[#C0A062] transition">Employer Readiness</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('about.index') }}" class="text-[#324338] hover:text-[#C0A062] transition">About</a>
                </div>
            </div>
        </div>
    </section>
@endsection
