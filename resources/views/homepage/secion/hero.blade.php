<section class="relative min-h-screen flex flex-col lg:flex-row pt-0">
    <!-- Left Half -->
    <div class="w-full lg:w-1/2 bg-ds-light flex flex-col justify-center px-8 lg:pl-24 lg:pr-16 py-32 lg:py-16 order-2 lg:order-1 min-h-[50vh] lg:min-h-screen">
        <p class="text-[#C0A062] text-[0.65rem] font-bold tracking-[0.2em] uppercase mb-4 lg:mb-6 text-center lg:text-left">
            German Language Education & International Talent Readiness
        </p>
        <h1 class="font-serif text-4xl sm:text-5xl lg:text-[4.5rem] leading-[1.1] text-[#324338] mb-6 lg:mb-8 text-center lg:text-left">
            Your Direction to<br class="hidden sm:block">Germany Starts Here.
        </h1>
        <p class="text-gray-500 text-base lg:text-[1.1rem] w-full lg:max-w-[90%] mb-10 lg:mb-12 leading-relaxed text-center lg:text-left">
            DS Language prepares Indonesian talent for Germany, through language, readiness, and pathway guidance, and helps employers work with candidates who arrive prepared, not just introduced.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start w-full">
            <a href="{{ route('contact.index') }}" class="inline-flex justify-center items-center border border-gray-300 px-6 py-4 text-xs font-bold tracking-[0.15em] text-[#324338] uppercase hover:border-[#324338] transition duration-300 w-full sm:w-auto text-center">
                Begin Your German Story
            </a>
            <a href="{{ route('employer.employer-solutions') }}" class="inline-flex justify-center items-center px-6 py-4 text-xs font-bold tracking-[0.15em] text-[#324338] uppercase hover:text-[#C0A062] transition duration-300 w-full sm:w-auto text-center">
                Explore Employer Solutions
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </div>
    
    <!-- Right Half -->
    <div class="w-full lg:w-1/2 h-[50vh] lg:h-auto relative bg-gray-200 order-1 lg:order-2">
        <video
            autoplay
            muted
            loop
            playsinline
            class="absolute inset-0 w-full h-full object-cover"
        >
            <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung video.
        </video>
        
        <!-- Mobile Gradient Overlay for Header visibility -->
        <div class="absolute inset-0 w-full h-1/2 bg-gradient-to-b from-black/50 to-transparent lg:hidden pointer-events-none"></div>
    </div>
</section>
