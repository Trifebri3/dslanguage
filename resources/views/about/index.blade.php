@extends('homepage.layouts.app')

@section('title', 'About DS Language, Our Direction, Vision & Presence')

@section('content')
    <!-- HERO -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 px-6 lg:px-12 bg-ds-light overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-12">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6">
                    Who We Are
                </p>
                <h1 class="font-serif text-4xl sm:text-5xl lg:text-[4.5rem] leading-tight text-[#324338] mb-6 lg:mb-8">
                    Beyond the<br class="hidden lg:block">Classroom
                </h1>
                <p class="text-gray-500 text-base lg:text-[1.1rem] leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Deutsche Sprache began as a language institution. What we are building is larger than that.
                </p>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <!-- Using 5.jpg or 6.jpg as an about page feature image -->
                <img src="{{ asset('images/default.webp') }}" alt="About DS Language" class="w-full h-[35vh] lg:h-[50vh] object-cover shadow-xl">
                <!-- Abstract decorative shape -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#C0A062]/20 rounded-full blur-2xl z-[-1]"></div>
            </div>
        </div>
    </section>

    <!-- SECTION, OUR DIRECTION -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-4xl mx-auto text-center lg:text-left">
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-8 lg:mb-12 leading-tight">Our Direction</h2>
            <div class="text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                <p>Germany does not simply need more people who can speak German, it needs people who are ready for its language, its workplace standards, and its professional culture. Indonesia does not simply need language courses, it needs a structured, trustworthy route into international opportunity, and a partner that stays involved through every stage of that route, not only the classroom stage.</p>
                
                <p>DS Language operates in that space between the two countries. We work with individuals preparing for a future in Germany, and, increasingly, with the institutions and organizations in Germany that will receive them. Language education remains our foundation. It is no longer the whole of what we do.</p>
                
                <div class="border-l-4 border-[#C0A062] pl-6 mt-10 py-2">
                    <p class="font-serif italic text-[#324338] text-xl lg:text-2xl leading-relaxed">
                        "This is the direction we are building toward: not a language school expanding its ambitions, but an international talent and consulting organization for which language education was the starting point."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION, VISION & MISSION -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-ds-light">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16 lg:gap-12">
            <!-- Vision -->
            <div class="w-full lg:w-5/12">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-10 leading-tight text-center lg:text-left">Vision</h2>
                <div class="bg-white p-8 lg:p-12 shadow-sm border border-gray-100 h-auto">
                    <p class="text-gray-600 text-base lg:text-lg leading-relaxed text-center lg:text-left">
                        To become Indonesia’s most trusted bridge institution between Indonesian talent and Germany, the organization individuals turn to when they are ready to build a serious future abroad, and the organization companies and institutions turn to when they are ready to work with talent that has been genuinely prepared.
                    </p>
                </div>
            </div>
            
            <!-- Mission -->
            <div class="w-full lg:w-7/12">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 lg:mb-10 leading-tight text-center lg:text-left">Mission</h2>
                <p class="text-[#324338] font-bold text-base sm:text-lg leading-relaxed mb-10 text-center lg:text-left">
                    We exist to close the distance between potential and readiness, for the people we prepare, and for the organizations that will eventually work with them.
                </p>
                
                <div class="space-y-10">
                    <div>
                        <h4 class="font-bold text-[#C0A062] uppercase tracking-wider text-sm mb-3">Talent Readiness</h4>
                        <p class="text-gray-600 text-base leading-relaxed">We build more than language proficiency. Every candidate is prepared linguistically, professionally, and culturally for life in Germany, measured against internationally recognized standards rather than classroom benchmarks alone.</p>
                    </div>
                    <div class="border-t border-gray-200 pt-8">
                        <h4 class="font-bold text-[#C0A062] uppercase tracking-wider text-sm mb-3">Academic & Career Pathways</h4>
                        <p class="text-gray-600 text-base leading-relaxed">We guide committed individuals through the specific route that fits them, Ausbildung, Fachkraft employment, or university study through Studienkolleg, with structured preparation from first language class to departure.</p>
                    </div>
                    <div class="border-t border-gray-200 pt-8">
                        <h4 class="font-bold text-[#C0A062] uppercase tracking-wider text-sm mb-3">Institutional & Employer Partnership</h4>
                        <p class="text-gray-600 text-base leading-relaxed">Our role does not end with the individual. We work with employers and institutions to help them engage Indonesian talent with confidence, so placements are built to last, not just to close.</p>
                    </div>
                    <div class="border-t border-gray-200 pt-8">
                        <h4 class="font-bold text-[#C0A062] uppercase tracking-wider text-sm mb-3">Cross-Border Coordination</h4>
                        <p class="text-gray-600 text-base leading-relaxed">Beyond language and pathway guidance, we support the practical realities of a cross-border move, documentation, administrative preparation, and coordination with the systems our candidates and partners must navigate.</p>
                    </div>
                    <div class="border-t border-gray-200 pt-8">
                        <h4 class="font-bold text-[#C0A062] uppercase tracking-wider text-sm mb-3">A Growing Bridge</h4>
                        <p class="text-gray-600 text-base leading-relaxed">As our network with Germany deepens, our intention is to expand our presence, partnerships, and capability on both sides of this relationship, not only preparing people to leave Indonesia, but building lasting infrastructure that supports them, and the organizations they join, well beyond departure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION, WHY DS LANGUAGE -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-[#324338] text-white">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16 lg:gap-20">
            <div class="w-full lg:w-5/12 text-center lg:text-left">
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl mb-6 lg:mb-8 leading-tight">Prepared, Not Just Enrolled</h2>
                <p class="text-gray-300 text-base sm:text-lg leading-relaxed mb-10">
                    Language schools measure success by exam pass rates. Recruitment agencies measure success by placements closed. DS Language measures success differently: by how well someone performs in the months after the certificate is issued or the contract is signed.
                </p>
                <div class="inline-block bg-[#C0A062]/20 px-6 py-3 rounded-sm border border-[#C0A062]/30">
                    <p class="text-[#C0A062] font-bold tracking-widest uppercase text-xs">That difference shows up in three ways.</p>
                </div>
            </div>
            
            <div class="w-full lg:w-7/12 flex flex-col gap-10 lg:gap-12 lg:pt-2 text-center sm:text-left">
                <div class="border-t border-gray-600/50 pt-8">
                    <h3 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4 tracking-wide uppercase text-white">Standards-based, not shortcut-based</h3>
                    <p class="text-gray-300 text-base leading-relaxed">
                        Every program is built around internationally recognized frameworks (GER) rather than accelerated promises. We would rather take the time a candidate actually needs than sell the timeline they want to hear.
                    </p>
                </div>
                <div class="border-t border-gray-600/50 pt-8">
                    <h3 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4 tracking-wide uppercase text-white">Guided by direct experience</h3>
                    <p class="text-gray-300 text-base leading-relaxed">
                        DS Language was founded on firsthand academic and professional experience within the German system, not secondhand research about it. That shapes how candidates are prepared, and how employers are approached.
                    </p>
                </div>
                <div class="border-t border-gray-600/50 pt-8">
                    <h3 class="text-lg sm:text-xl font-bold mb-3 sm:mb-4 tracking-wide uppercase text-white">Built around the whole journey</h3>
                    <p class="text-gray-300 text-base leading-relaxed">
                        From the first language class to departure, and, on the employer side, from first brief to candidate introduction, the relationship is continuous. Candidates and partners are not handed off between disconnected providers along the way.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION, OUR PRESENCE -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-4xl mx-auto text-center lg:text-left flex flex-col lg:flex-row gap-12 lg:gap-12">
            <div class="w-full lg:w-1/3">
                <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4">Our Presence</p>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-[#324338] mb-6 leading-tight">Based in Indonesia, Built Toward Germany</h2>
            </div>
            
            <div class="w-full lg:w-2/3 text-gray-600 text-base sm:text-lg leading-relaxed space-y-6">
                <p>DS Language is headquartered in Pare, Kediri, East Java, with a second location in Yogyakarta underway to bring the same programs closer to more of Indonesia. This is where our work starts: in the classroom, in consultations, in the early conversations that shape someone’s entire direction.</p>
                <p>Our reach, however, is not limited to where our offices are. Germany is the center of our current focus and cooperation with institutions and organizations there for candidate placement. Alongside it, we maintain dedicated pathways for Japan (Tokutei Ginou and internship programs) and the Netherlands (Au Pair and study preparation), built on the same principle: readiness before departure, not after.</p>
                <p>As our relationships in Germany deepen, our presence there is intended to grow in step, not as a separate expansion, but as the natural next stage of the bridge we are already building.</p>
            </div>
        </div>
    </section>

    <!-- SECTION, FINAL CTA -->
    <section class="py-16 lg:py-16 px-6 lg:px-12 bg-ds-light text-[#324338] text-center border-t border-gray-200">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl mb-6 lg:mb-8 leading-tight">See How This Works</h2>
            <p class="text-gray-500 text-base sm:text-lg leading-relaxed mb-10 lg:mb-12 max-w-2xl mx-auto">
                This is who we are. Here’s what it looks like in practice.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('programs.index') }}" class="inline-flex justify-center items-center bg-[#324338] text-white px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#C0A062] transition duration-300 w-full sm:w-auto">
                    Explore Programs
                </a>
                <a href="{{ route('employer.index') }}" class="inline-flex justify-center items-center border border-[#324338] px-6 lg:px-8 py-4 text-xs font-bold tracking-[0.15em] uppercase hover:bg-[#324338] hover:text-white transition duration-300 w-full sm:w-auto">
                    Explore Employer Solutions
                </a>
            </div>
        </div>
    </section>
@endsection
