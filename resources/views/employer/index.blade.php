@extends('homepage.layouts.app')

@section('title', 'Employer Readiness, International Talent, Prepared for Your Workplace')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-12">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    Candidate Readiness & Workforce Preparation Partner
                </p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-[4rem] leading-tight text-[#324338] mb-6 lg:mb-8">
                    Don’t Just Hire Internationally.<br class="hidden lg:block"> Hire Prepared.
                </h1>
                <p class="text-gray-500 text-base lg:text-[1.1rem] leading-relaxed max-w-lg mx-auto lg:mx-0 mb-8">
                    DS Language prepares linguistically, culturally, and professionally ready international candidates, so your organization can make confident, independent hiring decisions from day one.
                </p>
                <p class="text-xs text-gray-400 italic max-w-lg mx-auto lg:mx-0 border-l-2 border-gray-300 pl-3">
                    Deutsche Sprache is a Language & Candidate Readiness Provider. We are not a recruitment or placement agency. All selection, hiring, and contractual decisions remain fully with employers and institutions.
                </p>
                
                <div class="mt-8 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="#" class="inline-flex justify-center items-center bg-[#324338] text-white px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 w-full sm:w-auto">
                        Tell Us What You Need
                    </a>
                    <a href="#" class="inline-flex justify-center items-center border border-[#324338] text-[#324338] px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#324338] hover:text-white transition duration-300 w-full sm:w-auto">
                        Explore Employer Solutions
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <img src="{{ asset('images/default.webp') }}" alt="Employer Readiness" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#324338]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION , WHAT WE ACTUALLY SOLVE FOR EMPLOYERS -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-8 lg:mb-12 leading-tight">What We Actually Solve For Employers</h2>
            <div class="text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                <p>Most international hiring does not fail because candidates lack skill or motivation. It fails because candidates are selected for a role before they are truly ready to perform in it, linguistically, culturally, and professionally.</p>
                <p>Deutsche Sprache closes that gap. We identify, prepare, and present internationally sourced candidates who are workplace-ready before they ever reach your interview table, so the people you select are the people who actually succeed once hired.</p>
                <p class="font-bold text-[#324338] text-xl mt-8">In short: we reduce the distance between “candidate selected” and “employee contributing.”</p>
            </div>
        </div>
    </section>

    <!-- SECTION , WHO WE WORK WITH -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 leading-tight">Built for Organizations That Depend on People to Deliver</h2>
                <p class="text-gray-500 text-base sm:text-lg max-w-3xl mx-auto">Deutsche Sprache partners with employers and institutions that need a consistent, structured supply of internationally sourced, work-ready candidates, not one-off CVs.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <div class="bg-white p-8 lg:p-10 shadow-sm border border-gray-100 hover:border-[#C0A062] transition duration-300">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Hospitality Employers</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Hotels, resorts, restaurant groups, and hospitality companies that need qualified, guest-ready employees on a recurring basis. A single unfilled position spreads into longer shifts, slower service, and inconsistent guest experience. International talent becomes a practical extension of your hiring pool, but only if candidates are prepared for a live hospitality floor, not just the interview.</p>
                </div>
                
                <div class="bg-white p-8 lg:p-10 shadow-sm border border-gray-100 hover:border-[#C0A062] transition duration-300">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">HR & Talent Acquisition Teams</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">In-house recruiters and HR managers filling international vacancies without inflating internal workload. We absorb the readiness layer of the problem before it reaches your desk, so your team evaluates fit and competence rather than compensating for basic communication or orientation gaps.</p>
                </div>
                
                <div class="bg-white p-8 lg:p-10 shadow-sm border border-gray-100 hover:border-[#C0A062] transition duration-300">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Companies Facing Talent Shortages</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Organizations with positions that stay open far longer than they should. International recruitment widens access to talent that already exists, just not locally. We treat this as two problems, not one: finding the right people, and preparing them to actually succeed once they arrive.</p>
                </div>
                
                <div class="bg-white p-8 lg:p-10 shadow-sm border border-gray-100 hover:border-[#C0A062] transition duration-300">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">High-Volume & Recurring-Need Employers</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Hotel groups, hospitality chains, and expanding service businesses that need multiple candidates at once, or hiring needs that repeat every season. This requires a structured, repeatable readiness pipeline, not a series of individual searches restarted from zero.</p>
                </div>
            </div>
            
            <div class="mt-10 text-center">
                <a href="#" class="inline-flex items-center text-[#C0A062] font-bold text-sm tracking-widest uppercase hover:text-yellow-600 transition">
                    Talk to Us About Your Hiring Need &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION , WHY INTERNATIONAL HIRING? -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-[#324338] text-white">
        <div class="max-w-4xl mx-auto text-center lg:text-left">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-8 leading-tight">Why International Hiring?</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-12">
                Many organizations are reaching a point where workforce needs have outgrown the local qualified-candidate pool. International recruitment is a direct expansion of where an organization is willing to look for talent that already exists.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-left">
                <div class="flex gap-4 items-start">
                    <div class="w-2 h-2 mt-2 bg-[#C0A062] rounded-full flex-shrink-0"></div>
                    <div>
                        <h4 class="font-bold text-white mb-1">Access to a Larger Talent Pool</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Your hiring is no longer bounded by the size of the local labor market.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-2 h-2 mt-2 bg-[#C0A062] rounded-full flex-shrink-0"></div>
                    <div>
                        <h4 class="font-bold text-white mb-1">Addressing Persistent Talent Shortages</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">International candidates become a genuine additional source of workforce supply for structurally hard-to-fill roles.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-2 h-2 mt-2 bg-[#C0A062] rounded-full flex-shrink-0"></div>
                    <div>
                        <h4 class="font-bold text-white mb-1">Supporting Business Growth</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Widening the talent search geographically keeps expansion from being held back by local hiring limits alone.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-2 h-2 mt-2 bg-[#C0A062] rounded-full flex-shrink-0"></div>
                    <div>
                        <h4 class="font-bold text-white mb-1">A Deliberate Workforce Strategy</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">International recruitment becomes a planned, repeatable part of how an organization sources talent year over year.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-2 h-2 mt-2 bg-[#C0A062] rounded-full flex-shrink-0"></div>
                    <div>
                        <h4 class="font-bold text-white mb-1">Diversity of Experience</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">International employees bring language ability, cross-cultural perspective, and professional experience gained in different systems.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="w-2 h-2 mt-2 bg-[#C0A062] rounded-full flex-shrink-0"></div>
                    <div>
                        <h4 class="font-bold text-white mb-1">A Scalable, Structured Pipeline</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">For employers with recurring hiring needs, a structured pipeline produces prepared candidates on a predictable cycle.</p>
                    </div>
                </div>
            </div>
            
            <p class="text-[#C0A062] font-medium text-lg mt-12 italic border-t border-gray-600/50 pt-8 text-center">
                International hiring is not simply about finding people from another country. It is about expanding access to talent where the talent exists.
            </p>
        </div>
    </section>

    <!-- SECTION , THE READINESS PROGRAM -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 leading-tight">Seven Areas of Readiness</h2>
                <p class="text-gray-500 text-base sm:text-lg max-w-2xl mx-auto">Each area below is a dedicated part of how we prepare candidates and support employers, explore each one individually.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CARDS -->
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Candidate Readiness</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">Preparing candidates for the realities of a professional environment, not just the interview.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Candidate Readiness &rarr;</a>
                </div>
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Language Readiness</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">A certificate proves an exam was passed. Readiness proves the language works on the floor.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Language Readiness &rarr;</a>
                </div>
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Cultural & Workplace Readiness</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">Most workplace friction isn’t about competence, it’s about different expectations.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Cultural & Workplace Readiness &rarr;</a>
                </div>
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">International Talent</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">The right question isn’t “who’s available locally”, it’s “where does the right talent exist.”</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">International Talent &rarr;</a>
                </div>
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Hospitality Talent</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">In hospitality, the employee isn’t just doing the job, they are the guest experience.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Hospitality Talent &rarr;</a>
                </div>
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Employer Solutions</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">We start by understanding your hiring need, not by sending you CVs.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Employer Solutions &rarr;</a>
                </div>
                <div class="bg-ds-light p-8 border border-gray-100 hover:shadow-lg transition duration-300 flex flex-col h-full group lg:col-span-3 lg:w-1/3 mx-auto">
                    <h4 class="font-bold text-[#324338] text-lg mb-4">Document & Requirement Readiness</h4>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">International hiring involves more than the interview, we help candidates arrive prepared on paper, too.</p>
                    <a href="#" class="text-[#C0A062] text-xs font-bold uppercase tracking-widest group-hover:text-yellow-600 transition mt-auto">Document & Requirement Readiness &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION , WHY DS LANGUAGE -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-5xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-12 text-center">Why DS Language?</h2>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12 border-t-4 border-gray-300 shadow-sm">
                    <h4 class="font-bold text-gray-400 text-sm uppercase tracking-widest mb-6">Traditional Recruitment</h4>
                    <p class="text-[#324338] font-bold mb-6 text-lg">Find &rarr; Screen &rarr; Introduce</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Most recruitment stops at the point of introduction. Once a candidate is hired, the process is considered complete, and whatever happens in the first weeks is left entirely to the employer to manage.
                    </p>
                </div>
                
                <div class="w-full lg:w-1/2 bg-white p-8 lg:p-12 border-t-4 border-[#C0A062] shadow-xl relative transform lg:-translate-y-4">
                    <div class="absolute -top-4 right-8 bg-[#C0A062] text-white text-[0.6rem] font-bold px-3 py-1 uppercase tracking-widest">Our Approach</div>
                    <h4 class="font-bold text-[#C0A062] text-sm uppercase tracking-widest mb-6">The DS Language Approach</h4>
                    <p class="text-[#324338] font-bold mb-6 text-lg">Talent &rarr; Preparation &rarr; Readiness &rarr; Introduction &rarr; Workplace Transition</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We start from a different premise: international hiring doesn’t succeed or fail at the point of selection, it succeeds or fails in the weeks that follow. Successful international hiring depends on language readiness, workplace understanding, cultural awareness, alignment with employer requirements, and a genuine transition into the workplace, not just a signed contract.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION , EMPLOYER BENEFITS -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16">
            <div class="w-full lg:w-1/3">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] leading-tight sticky top-32">What This Means for Your HR Team</h2>
            </div>
            <div class="w-full lg:w-2/3 space-y-12">
                <div>
                    <h4 class="font-bold text-[#C0A062] text-lg mb-2">More Structured Hiring</h4>
                    <p class="text-gray-600 leading-relaxed">Structured, sector-aware preparation reduces uncertainty before a candidate reaches your interview stage, so your team assesses genuine fit rather than guessing at readiness.</p>
                </div>
                <div class="border-t border-gray-100 pt-8">
                    <h4 class="font-bold text-[#C0A062] text-lg mb-2">Broader Talent Access</h4>
                    <p class="text-gray-600 leading-relaxed">A structured international pipeline gives you access to a meaningfully larger, better-prepared pool of candidates for hard-to-fill roles.</p>
                </div>
                <div class="border-t border-gray-100 pt-8">
                    <h4 class="font-bold text-[#C0A062] text-lg mb-2">Better-Prepared Candidates</h4>
                    <p class="text-gray-600 leading-relaxed">Candidates arrive prepared for the professional environment itself, not just coached for a single interview.</p>
                </div>
                <div class="border-t border-gray-100 pt-8">
                    <h4 class="font-bold text-[#C0A062] text-lg mb-2">Reduced Preparation Gap</h4>
                    <p class="text-gray-600 leading-relaxed">Closing the gap between “selected” and “ready to perform” before hiring is where most early-stage risk in international hiring actually lives.</p>
                </div>
                <div class="border-t border-gray-100 pt-8">
                    <h4 class="font-bold text-[#C0A062] text-lg mb-2">More Scalable Recruitment</h4>
                    <p class="text-gray-600 leading-relaxed">For recurring or high-volume hiring needs, each new cycle builds on the last, instead of starting from zero every time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION , HOW IT WORKS -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-[#324338] text-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-10 text-center">How It Works</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
                <div class="relative">
                    <div class="text-[#C0A062] text-5xl font-serif opacity-30 absolute -top-8 -left-4">01</div>
                    <h4 class="font-bold text-xl mb-4 relative z-10 text-[#C0A062]">Understand</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">We start by understanding your organization’s specific hiring need: role, qualifications, experience level, language requirements, timeline, and hiring volume.</p>
                </div>
                <div class="relative">
                    <div class="text-[#C0A062] text-5xl font-serif opacity-30 absolute -top-8 -left-4">02</div>
                    <h4 class="font-bold text-xl mb-4 relative z-10 text-[#C0A062]">Define</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">We define a clear candidate profile: the language level, professional background, and readiness competencies the role actually requires.</p>
                </div>
                <div class="relative">
                    <div class="text-[#C0A062] text-5xl font-serif opacity-30 absolute -top-8 -left-4">03</div>
                    <h4 class="font-bold text-xl mb-4 relative z-10 text-[#C0A062]">Identify</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">We identify international candidates who match that profile.</p>
                </div>
                <div class="relative">
                    <div class="text-[#C0A062] text-5xl font-serif opacity-30 absolute -top-8 -left-4">04</div>
                    <h4 class="font-bold text-xl mb-4 relative z-10 text-[#C0A062]">Prepare</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Candidates enter a structured readiness program shaped around your requirements and workplace expectations.</p>
                </div>
                <div class="relative">
                    <div class="text-[#C0A062] text-5xl font-serif opacity-30 absolute -top-8 -left-4">05</div>
                    <h4 class="font-bold text-xl mb-4 relative z-10 text-[#C0A062]">Introduce</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Prepared candidates are introduced into your independent selection process. All interviews, evaluations, and hiring decisions remain entirely with your organization.</p>
                </div>
                <div class="relative">
                    <div class="text-[#C0A062] text-5xl font-serif opacity-30 absolute -top-8 -left-4">06</div>
                    <h4 class="font-bold text-xl mb-4 relative z-10 text-[#C0A062]">Transition</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Within the scope of our services, we support candidates’ transition toward workplace readiness, helping reduce early-stage friction as they move from “hired” to “contributing.”</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION , FINAL CTA -->
    <section class="py-16 lg:py-16 px-6 lg:px-12 bg-white text-[#324338] text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl mb-6 lg:mb-8 leading-tight">Your Next Talent Solution Could Be International.</h2>
            <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-8 max-w-3xl mx-auto">
                If your organization is facing persistent vacancies, structural talent shortages, growing workforce requirements, difficult-to-fill roles, or high-volume recruitment needs, international hiring can become a deliberate part of your talent strategy, not a reactive fallback.
            </p>
            <p class="text-[#C0A062] font-bold text-lg mb-12">
                Tell us which roles you are hiring for, how many candidates you need, and which requirements matter most to your organization.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-10">
                <a href="#" class="inline-flex justify-center items-center bg-[#324338] text-white px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 w-full sm:w-auto">
                    Tell Us What You Need
                </a>
                <a href="#" class="inline-flex justify-center items-center border border-[#324338] px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#324338] hover:text-white transition duration-300 w-full sm:w-auto">
                    Explore Employer Solutions
                </a>
            </div>
            
            <p class="text-xs text-gray-400 italic max-w-2xl mx-auto border-t border-gray-200 pt-8">
                Deutsche Sprache is a Language & Candidate Readiness Provider. We do not act as a recruitment agency, employer, or placement entity. All hiring, selection, and contractual decisions remain solely with employers or authorized institutions.
            </p>
        </div>
    </section>
@endsection
