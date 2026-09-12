@extends('homepage.layouts.app')

@section('title', 'German Language Program, A1 to B2, Built for Real Communication')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    <a href="{{ route('programs.index') }}" class="hover:text-[#324338] transition">Germany Program</a> 
                    <span class="text-gray-400">/</span>
                    <span>Language Foundation</span>
                </div>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    The Foundation Everything Else Is Built On
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Every Ausbildung application, every Studienkolleg exam, every workplace conversation in Germany starts with language readiness: this is where it’s built.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="German Language Program" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , CLASSES -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            
            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-[#C0A062] hover:shadow-lg transition duration-300">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">Intensive Classes A1–B2</h3>
                <p class="text-gray-600 leading-relaxed">
                    Structured classes covering each level of the Common European Framework of Reference (CEFR), from first-time beginners (A1) through upper-intermediate (B2), the level most Ausbildung and Studienkolleg pathways require before departure. Each level builds directly on the last, so progress is measured, not assumed.
                </p>
            </div>

            <div class="bg-ds-light p-8 lg:p-12 border-t-4 border-gray-300 hover:shadow-lg transition duration-300">
                <h3 class="font-serif text-2xl text-[#324338] mb-6">Goethe & telc Exam Preparation</h3>
                <p class="text-gray-600 leading-relaxed">
                    Dedicated preparation for the Goethe-Institut and telc examinations: the certifications most commonly required for Ausbildung applications, Studienkolleg admission, and visa processes. Preparation is built around the actual exam format, not just general language practice.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , CONVERSATION & FORMATS -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-ds-light border-y border-gray-200">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8 lg:gap-12">
            
            <div class="w-full lg:w-1/2 p-8 text-center lg:text-left">
                <h3 class="font-bold text-[#C0A062] text-[0.65rem] tracking-[0.2em] uppercase mb-4">Focus</h3>
                <h4 class="font-serif text-3xl text-[#324338] mb-6">Conversation Classes</h4>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Focused practice on spoken German, the skill most exams under-test and most workplaces demand immediately. Conversation classes close the gap between “can read and write German” and “can actually hold a conversation in it.”
                </p>
            </div>

            <div class="w-full lg:w-1/2 p-8 text-center lg:text-left lg:border-l lg:border-gray-300">
                <h3 class="font-bold text-[#C0A062] text-[0.65rem] tracking-[0.2em] uppercase mb-4">Format</h3>
                <h4 class="font-serif text-3xl text-[#324338] mb-6">Private & Semi-Private Classes</h4>
                <p class="text-gray-600 leading-relaxed">
                    For candidates who need a faster pace, a flexible schedule, or more individual attention than a group class allows, private and semi-private formats cover the same curriculum with more direct instructor time.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , CULTURAL TRAINING -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-8">German Cultural Training</h2>
            <p class="text-gray-300 text-lg sm:text-xl leading-relaxed max-w-3xl mx-auto font-light">
                Language without context only gets a candidate halfway. Cultural training is built into the program so that vocabulary and grammar are learned alongside the norms, directness, punctuality, workplace hierarchy, that shape how that language is actually used in Germany.
            </p>
        </div>
    </section>

    <!-- SECTION , FINAL CTA & RELATED -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-white text-[#324338] text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl mb-6">Start With Your Level</h2>
            <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-12 max-w-2xl mx-auto">
                Tell us your current level, or if you’re starting from zero, and we’ll place you in the right class.
            </p>
            <a href="{{ route('contact.index') }}" class="inline-flex justify-center items-center bg-[#324338] text-white px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 shadow-xl hover:shadow-2xl mb-12">
                Talk to Us About Language Classes
            </a>
            
            <div class="border-t border-gray-200 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Programs</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="{{ route('programs.ausbildung') }}" class="text-[#324338] hover:text-[#C0A062] transition">Ausbildung</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('programs.study-in-germany') }}" class="text-[#324338] hover:text-[#C0A062] transition">Study in Germany</a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ route('programs.index') }}" class="text-[#C0A062] hover:text-[#324338] transition">&larr; Back to Germany Program</a>
                </div>
            </div>
        </div>
    </section>
@endsection
