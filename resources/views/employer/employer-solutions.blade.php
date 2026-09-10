@extends('homepage.layouts.app')

@section('title', 'Employer Solutions, We Start by Understanding Your Hiring Need')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    <a href="/employer-readiness" class="hover:text-[#324338] transition">Employer Readiness</a> 
                    <span class="text-gray-400">/</span>
                    <span>Readiness Program</span>
                </div>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-tight text-[#324338] mb-6 lg:mb-8">
                    We Start by Understanding Your Hiring Need
                </h1>
                <p class="text-gray-500 text-base lg:text-xl leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Not by sending you CVs.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Employer Solutions" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , DEFINITION & WHY IT MATTERS -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-white">
        <div class="max-w-4xl mx-auto space-y-10">
            
            <div class="text-center lg:text-left">
                <h2 class="font-serif text-3xl sm:text-4xl text-[#324338] mb-6">What is Employer Solutions?</h2>
                <div class="text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                    <p>Employer Solutions is our approach to tailoring candidate preparation and presentation to each organization’s specific hiring context (role, volume, timeline, and standard) rather than offering a single generic process.</p>
                </div>
            </div>

            <div class="border-t border-gray-100 pt-10 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Why It Matters</p>
                <div class="text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                    <p>No two employers need the same thing. A 30-position hospitality group, a company needing 3 highly experienced hires, and an organization with a strict language-level requirement are three different problems that deserve three different approaches.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION , CHALLENGE VS SOLUTION -->
    <section class="py-12 lg:py-20 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8 lg:gap-12">
            
            <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12 border-t-4 border-gray-300 shadow-sm">
                <h3 class="font-bold text-[#324338] text-xl mb-6">The Employer Challenge</h3>
                <p class="text-gray-600 leading-relaxed">
                    Generic recruitment processes tend to treat every vacancy the same way, which produces a mismatch between what’s delivered and what the employer actually needed.
                </p>
            </div>

            <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12 border-t-4 border-[#C0A062] shadow-xl transform lg:-translate-y-4">
                <h3 class="font-bold text-[#C0A062] text-xl mb-6">How DS Language Helps</h3>
                <p class="text-gray-600 leading-relaxed">
                    Before any candidate preparation begins, we work to understand your role, required qualifications, experience level, language requirements, location, hiring volume, timeline, workplace expectations, and ideal candidate profile, then shape preparation around that specific brief.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , VALUE & OUTCOME -->
    <section class="py-16 lg:py-20 px-6 lg:px-12 bg-[#324338] text-white">
        <div class="max-w-5xl mx-auto text-center">
            
            <div class="mb-12">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-8 leading-tight">Employer Value</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center mt-10">
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">Candidates presented to you are shaped by your actual requirements, not a generic template.</p>
                    </div>
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">Less time spent filtering irrelevant candidates.</p>
                    </div>
                    <div class="p-6 border border-gray-600/50 hover:border-[#C0A062] transition duration-300">
                        <p class="text-gray-300 text-sm font-medium">A process that scales with your needs, whether that’s 1 hire or 50.</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-600/50 pt-10">
                <h3 class="font-serif text-2xl sm:text-3xl text-[#C0A062] mb-6">Expected Outcome</h3>
                <p class="text-xl sm:text-2xl leading-relaxed font-light italic max-w-3xl mx-auto">
                    "A cooperation that feels like it was built around your organization, because it was."
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION , FINAL CTA & RELATED -->
    <section class="py-20 lg:py-20 px-6 lg:px-12 bg-white text-[#324338] text-center">
        <div class="max-w-4xl mx-auto">
            <a href="#" class="inline-flex justify-center items-center bg-[#324338] text-white px-8 py-5 text-sm font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 shadow-xl hover:shadow-2xl mb-12">
                Discuss Your Hiring Needs
            </a>
            
            <div class="border-t border-gray-200 pt-10">
                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest mb-6">Related Programs</p>
                <div class="flex flex-wrap justify-center gap-4 text-xs font-bold uppercase tracking-wide">
                    <a href="/employer-readiness/international-talent" class="text-[#324338] hover:text-[#C0A062] transition">International Talent</a>
                    <span class="text-gray-300">|</span>
                    <a href="/employer-readiness" class="text-[#324338] hover:text-[#C0A062] transition">How It Works (Employer Readiness)</a>
                    <span class="text-gray-300">|</span>
                    <a href="/employer-readiness" class="text-[#C0A062] hover:text-[#324338] transition">&larr; Back to Employer Readiness</a>
                </div>
            </div>
        </div>
    </section>
@endsection
