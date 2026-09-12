@extends('homepage.layouts.app')

@section('content')
    @include('homepage.secion.hero')
    
    <!-- SECTION, FOUNDER PROFILE -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-4xl mx-auto flex flex-col">
            
            <!-- CEO Photo Area -->
            <div class="relative w-56 h-56 lg:w-72 lg:h-72 mb-10 mx-auto">
                <!-- Organic abstract blob background (similar to the image) -->
                <div class="absolute inset-0 bg-[#FDFBF7] rounded-[40%_60%_70%_30%/40%_50%_60%_50%] transform -rotate-6 scale-110 shadow-sm border border-[#C0A062]/20"></div>
                <img src="{{ asset('images/default.webp') }}" alt="Anna Sandala B.Sc" class="relative z-10 w-full h-full object-cover rounded-[40%_60%_70%_30%/40%_50%_60%_50%] drop-shadow-xl border-4 border-white">
            </div>
            
            <!-- Typography & Content (Left Aligned as in design) -->
            <div class="w-full text-left">
                <p class="text-gray-400 text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-2">{{ __('Founder Profile') }}</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-[2.75rem] text-[#324338] mb-2 leading-tight">Anna Sandala B.Sc</h2>
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-8">{{ __('CEO & Founder of Deutsche Sprache') }}</p>
                
                <div class="text-gray-600 text-sm sm:text-base leading-relaxed space-y-6">
                    <p>
                        {{ __('With an academic background in Germany and direct experience within the German and European education systems, Anna connects structured learning with real-world professional application.') }}
                    </p>
                    
                    <p>
                        {{ __('Her primary focus is to guide students and professionals not only to master the German language, but also to build confidence, clarity of direction, and mental readiness for their international journey.') }}
                    </p>
                    
                    <div class="pl-6 border-l-2 border-[#C0A062] my-8 py-2">
                        <p class="italic text-[#324338] font-serif text-lg lg:text-xl leading-relaxed">
                            "We empower individuals to transform their lives through education and real opportunities in Germany."
                        </p>
                    </div>
                    
                    <p>
                        Founded in 2024, Deutsche Sprache (DS) chose Kediri as the starting point of its journey. With a global vision and a structured academic approach, DS exists not only as a language learning institution, but as a space for life preparation toward the international stage.
                    </p>
                </div>

                <div class="mt-8 pt-6 border-t-2 border-[#C0A062]/20 w-full relative">
                    <h4 class="font-bold text-[#324338] text-sm mb-1">Kediri</h4>
                    <p class="text-gray-500 italic text-sm leading-relaxed">
                        Kediri is understood as a return to one's true identity, a symbol of reflection, direction, and conscious purpose before stepping onto the global stage.
                    </p>
                </div>
            </div>
            
        </div>
    </section>
    
    <!-- SECTION, OUR DIRECTION -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10 lg:gap-12 items-center">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('images/default.webp') }}" alt="Our Direction" class="w-full h-auto object-cover rounded-sm shadow-xl">
            </div>
            <div class="w-full lg:w-1/2 text-center lg:text-left mt-8 lg:mt-0">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Our Direction</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-8 leading-tight">Beyond the Classroom</h2>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-8 lg:mb-10">
                    Deutsche Sprache began as a language institution. What we are building is larger than that. We work with individuals preparing for a future in Germany, and increasingly with the institutions and organizations there that will receive them. Language education remains our foundation, it is no longer the whole of what we do.
                </p>
                <a href="{{ route('about.index') }}" class="inline-flex items-center text-[#324338] font-bold tracking-widest uppercase text-xs hover:text-[#C0A062] transition duration-300">
                    Learn Our Direction
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- SECTION, WHAT WE DO -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">What We Do</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-8 leading-tight">One Organization, One Continuous Pathway</h2>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed">
                    Most people meet DS Language at one entry point, a language class, a question about Ausbildung, a conversation about studying in Germany. What they’re actually stepping into is a single, connected pathway.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <!-- Card 1 -->
                <div class="bg-ds-light p-8 lg:p-12 border border-gray-100 hover:border-[#C0A062] transition duration-500 group text-center sm:text-left">
                    <h3 class="font-serif text-xl sm:text-2xl text-[#324338] mb-4">Language Foundation</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-6 lg:mb-8 leading-relaxed">Structured German instruction from A1 to B2, with Goethe and telc exam preparation.</p>
                    <a href="{{ route('programs.german-language') }}" class="inline-flex items-center text-[#C0A062] font-bold tracking-widest uppercase text-[0.65rem] group-hover:text-[#324338] transition duration-300">
                        German Language Program
                        <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="bg-ds-light p-8 lg:p-12 border border-gray-100 hover:border-[#C0A062] transition duration-500 group text-center sm:text-left">
                    <h3 class="font-serif text-xl sm:text-2xl text-[#324338] mb-4">Ausbildung</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-6 lg:mb-8 leading-relaxed">Vocational training pathway guidance, from choosing a field to interview preparation.</p>
                    <a href="{{ route('programs.ausbildung') }}" class="inline-flex items-center text-[#C0A062] font-bold tracking-widest uppercase text-[0.65rem] group-hover:text-[#324338] transition duration-300">
                        Ausbildung
                        <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="bg-ds-light p-8 lg:p-12 border border-gray-100 hover:border-[#C0A062] transition duration-500 group text-center sm:text-left">
                    <h3 class="font-serif text-xl sm:text-2xl text-[#324338] mb-4">Study in Germany</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-6 lg:mb-8 leading-relaxed">Studienkolleg preparation and university application support.</p>
                    <a href="{{ route('programs.study-in-germany') }}" class="inline-flex items-center text-[#C0A062] font-bold tracking-widest uppercase text-[0.65rem] group-hover:text-[#324338] transition duration-300">
                        Study in Germany
                        <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="bg-ds-light p-8 lg:p-12 border border-gray-100 hover:border-[#C0A062] transition duration-500 group text-center sm:text-left">
                    <h3 class="font-serif text-xl sm:text-2xl text-[#324338] mb-4">Supporting Services</h3>
                    <p class="text-gray-600 text-sm sm:text-base mb-6 lg:mb-8 leading-relaxed">Document translation, blocked account setup, health insurance guidance.</p>
                    <a href="{{ route('programs.supporting-services') }}" class="inline-flex items-center text-[#C0A062] font-bold tracking-widest uppercase text-[0.65rem] group-hover:text-[#324338] transition duration-300">
                        Supporting Services
                        <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION, WHO WE WORK WITH -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-[#324338] text-white">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12 lg:gap-20">
            <div class="w-full lg:w-5/12 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Who We Work With</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-6 lg:mb-8 leading-tight">Two Sides of the Same Bridge</h2>
            </div>
            <div class="w-full lg:w-7/12 flex flex-col gap-10 lg:gap-12 lg:pt-4 text-center sm:text-left">
                <div>
                    <h3 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4 tracking-wide uppercase text-[#C0A062]">For Candidates</h3>
                    <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5 sm:mb-6">
                        Students, prospective Ausbildung trainees, and professionals preparing for a future in Germany. We prepare you for what actually awaits: the language, the workplace, and the standards of a new professional environment.
                    </p>
                    <a href="{{ route('programs.index') }}" class="inline-flex items-center text-white font-bold tracking-widest uppercase text-[0.65rem] hover:text-[#C0A062] transition duration-300 justify-center sm:justify-start w-full sm:w-auto">
                        Explore Programs
                        <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <div class="border-t border-gray-600 pt-10 lg:pt-12">
                    <h3 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4 tracking-wide uppercase text-[#C0A062]">For Employers & Institutions</h3>
                    <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-5 sm:mb-6">
                        Companies and organizations considering international talent as part of their workforce strategy. We help you engage Indonesian talent with confidence, backed by a partner that understands your requirements before presenting a single candidate.
                    </p>
                    <a href="{{ route('employer.index') }}" class="inline-flex items-center text-white font-bold tracking-widest uppercase text-[0.65rem] hover:text-[#C0A062] transition duration-300 justify-center sm:justify-start w-full sm:w-auto">
                        Explore Employer Readiness
                        <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION, WHY DS LANGUAGE & OUR PRESENCE -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-12">
            <!-- Why DS Language -->
            <div class="text-center sm:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Why DS Language</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-8 leading-tight">Prepared, Not Just Enrolled</h2>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-8 lg:mb-10">
                    We measure success by how well someone performs after the certificate is issued or the contract is signed, not by exam pass rates or placements closed. That’s the difference between a language school, a recruitment agency, and what we’re building.
                </p>
                <a href="{{ route('about.index') }}" class="inline-flex items-center text-[#324338] font-bold tracking-widest uppercase text-xs hover:text-[#C0A062] transition duration-300 justify-center sm:justify-start w-full sm:w-auto">
                    Learn Why DS Language
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            
            <!-- Our Presence -->
            <div class="text-center sm:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Our Presence</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-8 leading-tight">Based in Indonesia, Built Toward Germany</h2>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-8 lg:mb-10">
                    Headquartered in Pare, Kediri, with a second location opening in Yogyakarta. Germany is the center of our current focus, alongside parallel pathways for Japan and the Netherlands.
                </p>
                <a href="{{ route('about.index') }}" class="inline-flex items-center text-[#324338] font-bold tracking-widest uppercase text-xs hover:text-[#C0A062] transition duration-300 justify-center sm:justify-start w-full sm:w-auto">
                    See Our Presence
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION, INSIGHTS -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-8 leading-tight">Insights</h2>
            <p class="text-gray-600 text-base sm:text-lg leading-relaxed mb-10 lg:mb-12 max-w-2xl">
                Practical guidance on the visa, cultural, and career questions candidates and employers actually have.
            </p>
            <a href="{{ route('insights.index') }}" class="inline-flex items-center justify-center border border-gray-300 px-8 py-4 text-xs font-bold tracking-[0.15em] text-[#324338] uppercase hover:border-[#324338] transition duration-300 w-full sm:w-auto">
                Explore Insights
            </a>
        </div>
    </section>

    <!-- SECTION, FINAL CTA -->
    <section class="py-16 lg:py-16 px-6 lg:px-12 bg-[#3b4b41] text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl mb-6 lg:mb-8 leading-tight">Your Direction Starts With a Conversation</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-10 lg:mb-12 max-w-2xl mx-auto">
                Whether you’re preparing to build a future in Germany, or exploring what international talent could mean for your workforce, the first step is the same: tell us where you are.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact.index') }}" class="inline-flex justify-center items-center bg-[#C0A062] text-white px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-yellow-600 transition duration-300 w-full sm:w-auto">
                    Begin Your German Story
                </a>
                <a href="{{ route('employer.employer-solutions') }}" class="inline-flex justify-center items-center border border-white px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-white hover:text-[#3b4b41] transition duration-300 w-full sm:w-auto">
                    Explore Employer Solutions
                </a>
            </div>
        </div>
    </section>

@endsection
