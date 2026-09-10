@extends('homepage.layouts.app')

@section('title', 'Cultural & Workplace Readiness, Understanding the Environment, Not Just the Task')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-12">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    <a href="/employer-readiness" class="hover:text-[#324338] transition">Employer Readiness</a> 
                    <span class="text-gray-400">/</span>
                    <span>Readiness Program</span>
                </div>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    Most Workplace Friction Isn’t About Competence
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    It’s about different expectations that were never addressed before day one.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Cultural and Workplace Readiness" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , DEFINITION & WHY IT MATTERS -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-4xl mx-auto space-y-10">
            
            <div class="text-center lg:text-left">
                <h2 class="font-serif text-3xl sm:text-4xl text-[#324338] mb-6">What is Cultural & Workplace Readiness?</h2>
                <div class="text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                    <p>Cultural & Workplace Readiness is a candidate’s understanding of the unwritten norms of a workplace: communication style, hierarchy, punctuality, feedback culture, teamwork conventions, and how expectations are typically communicated and met.</p>
                </div>
            </div>

            <div class="border-t border-gray-100 pt-10 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Why It Matters</p>
                <div class="text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                    <p>A candidate relocating to a new country can have excellent technical skills and still be unfamiliar with how communication, hierarchy, punctuality, feedback, teamwork, customer interaction, and management expectations actually work in that specific environment.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION , CHALLENGE VS SOLUTION -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8 lg:gap-12">
            
            <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12 border-t-4 border-gray-300 shadow-sm">
                <h3 class="font-bold text-[#324338] text-xl mb-6">The Employer Challenge</h3>
                <p class="text-gray-600 leading-relaxed">
                    Many early workplace misunderstandings are misread as a competence or attitude problem, when the real cause is a difference in expectations and cultural context that was never addressed before the candidate started.
                </p>
            </div>

            <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12 border-t-4 border-[#C0A062] shadow-xl transform lg:-translate-y-4">
                <h3 class="font-bold text-[#C0A062] text-xl mb-6">How DS Language Helps</h3>
                <p class="text-gray-600 leading-relaxed">
                    We build workplace and cultural awareness into preparation before candidates enter your selection process, so they arrive with a working understanding of the environment they’re stepping into, not just the skills the role requires.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , VALUE & OUTCOME -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-[#324338] text-white">
        <div class="max-w-5xl mx-auto text-center">
            
            <div class="mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-8 leading-tight">Employer Value</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center mt-12">
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">Fewer expectation-based misunderstandings.</p>
                    </div>
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">Smoother integration into existing team dynamics.</p>
                    </div>
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">Less management time spent on basic cultural orientation.</p>
                    </div>
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">More consistent early performance.</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-600/50 pt-10">
                <h3 class="font-serif text-2xl sm:text-3xl text-[#C0A062] mb-6">Expected Outcome</h3>
                <p class="text-xl sm:text-2xl leading-relaxed font-light italic max-w-3xl mx-auto">
                    "Candidates who understand the environment, not just the task, reducing the friction that has nothing to do with skill."
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , FINAL CTA & RELATED -->
    <section class="py-16 lg:py-16 px-6 lg:px-12 bg-white text-[#324338] text-center">
        <div class="max-w-4xl mx-auto">
            <a href="#" class="inline-flex justify-center items-center bg-[#324338] text-white px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 shadow-xl hover:shadow-2xl mb-10">
                Ask About Cultural Readiness
            </a>
            
            <div class="border-t border-gray-200 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Programs</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="/employer-readiness/candidate-readiness" class="text-[#324338] hover:text-[#C0A062] transition">Candidate Readiness</a>
                    <span class="text-gray-300">|</span>
                    <a href="#" class="text-[#324338] hover:text-[#C0A062] transition">Hospitality Talent</a>
                    <span class="text-gray-300">|</span>
                    <a href="/employer-readiness" class="text-[#C0A062] hover:text-[#324338] transition">&larr; Back to Employer Readiness</a>
                </div>
            </div>
        </div>
    </section>
@endsection
