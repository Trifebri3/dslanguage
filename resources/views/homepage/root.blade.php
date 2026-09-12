@extends('homepage.layouts.app')

@section('content')

<div id="top-section" style="display: none;">



    @include('homepage.secion.hero')
    
    <!-- SECTION, FOUNDER PROFILE -->
    <section class="py-12 lg:py-16 px-6 lg:px-12 bg-white">
        <div class="max-w-4xl mx-auto flex flex-col">
            
            <!-- CEO Photo Area -->
            <div class="relative w-56 h-56 lg:w-72 lg:h-72 mb-10 mx-auto">
                <!-- Organic abstract blob background (similar to the image) -->
                <div class="absolute inset-0 bg-[#FDFBF7] rounded-[40%_60%_70%_30%/40%_50%_60%_50%] transform -rotate-6 scale-110 shadow-sm border border-[#C0A062]/20"></div>
                <img src="{{ asset('images/ceo.png') }}" alt="Anna Sandala B.Sc" class="relative z-10 w-full h-full object-cover rounded-[40%_60%_70%_30%/40%_50%_60%_50%] drop-shadow-xl border-4 border-white">
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
    
    
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
  :root{
    --navy:#0B1F3A;
    --navy-deep:#081526;
    --ivory:#F5F2EA;
    --ivory-soft:#ECE7DA;
    --charcoal:#1C2430;
    --muted:#5B6472;
    --muted-on-navy:#B7C0D1;
    --mustard:#C9A227;
    --gold-text:#93711A;
    --hair-light: rgba(11,31,58,0.14);
    --hair-dark: rgba(201,162,39,0.32);
    --max: 1180px;
  }
  
  .redesign-section {
    background:var(--ivory);
    color:var(--charcoal);
    font-family:'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    -webkit-font-smoothing:antialiased;
  }
  
  .redesign-section h1, .redesign-section h2, .redesign-section h3, .redesign-section .serif{ font-family:'Fraunces', Georgia, serif; }
  .redesign-section p{ margin:0; }
  .redesign-section a{ color:inherit; }
  .redesign-section .wrap{ max-width:var(--max); margin:0 auto; padding:0 32px; }

  /* ================= SECTION 1 — TALENT & BUSINESS DEVELOPMENT ================= */
  .redesign-section .s1{
    background:var(--ivory);
    padding:112px 0 96px;
    opacity:0; transform:translateY(14px);
    animation:rise .9s cubic-bezier(.2,.7,.3,1) forwards;
  }
  @keyframes rise{ to{ opacity:1; transform:translateY(0); } }

  /* connective diagram */
  .redesign-section .diagram{
    display:flex; align-items:center; justify-content:center;
    gap:0; margin-bottom:72px; user-select:none;
  }
  .redesign-section .diagram .node{
    font-family:'Inter',sans-serif; font-weight:600; font-size:13px;
    letter-spacing:.04em; color:var(--navy);
    padding:9px 20px; border:1px solid var(--hair-light); border-radius:2px;
    background:rgba(255,255,255,0.5);
    white-space:nowrap;
  }
  .redesign-section .diagram .node.mid{ color:var(--gold-text); border-color:var(--hair-light); }
  .redesign-section .diagram .line{
    height:1px; width:56px; background:var(--hair-light);
    position:relative; flex:0 0 auto;
  }
  .redesign-section .diagram .line::after{
    content:""; position:absolute; right:-1px; top:-2.5px;
    width:5px; height:5px; border-radius:50%; background:var(--mustard);
  }
  @media (max-width:760px){
    .redesign-section .diagram{ flex-direction:column; gap:10px; }
    .redesign-section .diagram .line{ width:1px; height:20px; }
    .redesign-section .diagram .line::after{ right:-2px; top:auto; bottom:-2px; }
  }

  .redesign-section .s1-head{
    display:grid; grid-template-columns: 1.15fr 0.85fr; gap:64px;
    align-items:end; margin-bottom:72px;
  }
  .redesign-section .eyebrow{
    font-family:'Fraunces', serif; font-style:italic; font-weight:500;
    font-size:17px; color:var(--gold-text); margin-bottom:22px;
  }
  .redesign-section .eyebrow.on-navy{ color:var(--mustard); }
  .redesign-section .s1-head h2{
    font-size:clamp(34px, 3.6vw, 50px); line-height:1.08; font-weight:500;
    color:var(--navy); margin:0; letter-spacing:-0.01em;
  }
  .redesign-section .s1-intro{
    font-size:16.5px; line-height:1.65; color:var(--muted);
    max-width:46ch;
  }
  .redesign-section .s1-intro .cta-row{ margin-top:28px; }

  .redesign-section .btn{
    display:inline-flex; align-items:center; gap:10px;
    font-family:'Inter',sans-serif; font-weight:600; font-size:14.5px;
    padding:14px 26px; border-radius:2px; text-decoration:none;
    transition:background .25s ease, color .25s ease, border-color .25s ease;
  }
  .redesign-section .btn-primary{ background:var(--navy); color:var(--ivory); }
  .redesign-section .btn-primary:hover{ background:#122a4d; }
  .redesign-section .btn-outline{ border:1px solid var(--mustard); color:var(--mustard); background:transparent; }
  .redesign-section .btn-outline:hover{ background:rgba(201,162,39,0.1); }
  .redesign-section .btn:focus-visible{ outline:2px solid var(--mustard); outline-offset:3px; }
  .redesign-section .btn svg{ width:14px; height:14px; flex:none; }

  /* capability rows — editorial list, not cards */
  .redesign-section .cap-list{ border-top:1px solid var(--hair-light); }
  .redesign-section .cap-row{
    display:grid; grid-template-columns: 320px 1fr; gap:48px;
    padding:34px 0; border-bottom:1px solid var(--hair-light);
  }
  .redesign-section .cap-row h3{
    font-size:22px; font-weight:500; color:var(--navy); margin:0;
    line-height:1.25;
  }
  .redesign-section .cap-row p{ color:var(--muted); font-size:15.5px; line-height:1.65; max-width:58ch; }
  @media (max-width:820px){
    .redesign-section .s1-head{ grid-template-columns:1fr; gap:28px; align-items:start; }
    .redesign-section .cap-row{ grid-template-columns:1fr; gap:10px; }
  }

  .redesign-section .value-strip{
    margin-top:88px; background:var(--navy); border-radius:2px;
    padding:54px 56px; text-align:center;
  }
  .redesign-section .value-strip p{
    font-family:'Fraunces', serif; font-style:italic; font-weight:400;
    font-size:clamp(20px, 2.1vw, 26px); line-height:1.5; color:var(--ivory);
    max-width:44ch; margin:0 auto;
  }

  /* ================= SECTION 2 — PARTNERSHIPS ================= */
  .redesign-section .s2{
    background:var(--navy); color:var(--ivory);
    padding:112px 0 104px; position:relative; overflow:hidden;
  }
  .redesign-section .s2::before{
    content:""; position:absolute; inset:0;
    background:radial-gradient(ellipse 900px 500px at 85% 0%, rgba(201,162,39,0.09), transparent 60%);
    pointer-events:none;
  }
  .redesign-section .s2-inner{ position:relative; }
  .redesign-section .s2-head{
    display:grid; grid-template-columns:1.15fr 0.85fr; gap:64px; align-items:end;
    margin-bottom:64px;
  }
  .redesign-section .s2-head h2{
    font-size:clamp(34px, 3.6vw, 50px); line-height:1.1; font-weight:500;
    color:var(--ivory); margin:0; letter-spacing:-0.01em;
  }
  .redesign-section .s2-intro{ font-size:16.5px; line-height:1.65; color:var(--muted-on-navy); max-width:48ch; }
  @media (max-width:820px){ .redesign-section .s2-head{ grid-template-columns:1fr; gap:24px; } }

  /* cross-border connector */
  .redesign-section .geo{
    display:flex; align-items:center; justify-content:center;
    gap:18px; margin:12px 0 72px; flex-wrap:wrap;
  }
  .redesign-section .geo .anchor{
    font-family:'Fraunces', serif; font-weight:500; font-size:19px;
    color:var(--ivory); padding:14px 26px; border:1px solid var(--hair-dark);
    border-radius:2px;
  }
  .redesign-section .geo .link{ width:44px; height:1px; background:var(--hair-dark); }
  .redesign-section .geo .satellites{
    display:flex; flex-direction:column; gap:10px; margin-left:6px;
  }
  .redesign-section .geo .sat{
    font-family:'Inter',sans-serif; font-size:12.5px; color:var(--muted-on-navy);
    border:1px solid var(--hair-dark); border-radius:2px; padding:7px 14px;
  }
  @media (max-width:640px){ .redesign-section .geo{ flex-direction:column; } .redesign-section .geo .link{ width:1px; height:22px; } }

  .redesign-section .partner-grid{
    display:grid; grid-template-columns:repeat(2, 1fr);
    gap:1px; background:var(--hair-dark);
    border:1px solid var(--hair-dark);
  }
  .redesign-section .partner-cell{
    background:var(--navy-deep); padding:36px 38px;
  }
  .redesign-section .partner-cell h3{
    font-size:20px; font-weight:500; color:var(--mustard); margin:0 0 12px;
  }
  .redesign-section .partner-cell p{ font-size:15px; line-height:1.65; color:var(--muted-on-navy); }
  @media (max-width:820px){ .redesign-section .partner-grid{ grid-template-columns:1fr; } }

  .redesign-section .s2-close{
    margin-top:72px; display:grid; grid-template-columns:1fr auto;
    gap:32px; align-items:center; padding-top:44px; border-top:1px solid var(--hair-dark);
  }
  .redesign-section .s2-close p{
    font-family:'Fraunces', serif; font-style:italic; font-size:19px;
    color:var(--ivory); max-width:46ch; line-height:1.5;
  }
  @media (max-width:680px){ .redesign-section .s2-close{ grid-template-columns:1fr; } }
</style>

<div class="redesign-section" style="padding-top: 96px;">
  <div style="display: flex; justify-content: center; padding-top: 20px; background: var(--ivory);">
    <button style="cursor: pointer; background: #fff; border: 1px solid #E5E7EB; color: #4B5563; font-weight: 600; padding: 12px 24px; border-radius: 9999px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); display: inline-flex; align-items: center; gap: 8px; font-family: 'Inter', sans-serif; font-size: 12px; letter-spacing: 0.05em; text-transform: uppercase; transition: all 0.2s ease;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='#fff'" onclick="document.getElementById('top-section').style.display = 'block'; this.parentNode.style.display = 'none'; window.scrollTo({top: 0, behavior: 'smooth'});">
      <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
      View Biography & Hero Section
    </button>
  </div>

<!-- ============================================================
     SECTION 1 — INTERNATIONAL TALENT & BUSINESS DEVELOPMENT
     ============================================================ -->
<section class="s1" id="direction">
  <div class="wrap">

    <div class="diagram">
      <span class="node">International Talent</span>
      <span class="line"></span>
      <span class="node mid">DS Global Consulting</span>
      <span class="line"></span>
      <span class="node">International Opportunity</span>
    </div>

    <div class="s1-head">
      <div>
        <div class="eyebrow">International Talent &amp; Business Development</div>
        <h2>The infrastructure between talent and opportunity.</h2>
      </div>
      <div class="s1-intro">
        <p>DS Global Consulting sits at the point where a prepared candidate meets an organization ready to receive them. Language is where that relationship begins — it has never been where our work ends.</p>
        <div class="cta-row">
          <a class="btn btn-primary" href="#">
            See how the pathway works
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </div>
    </div>

    <div class="cap-list">
      <div class="cap-row">
        <h3>International Talent Development</h3>
        <p>Preparing individuals for the language, communication, and workplace standards of a new professional environment — measured by how they perform after the certificate, not on the day they receive it.</p>
      </div>
      <div class="cap-row">
        <h3>Employer &amp; Industry Engagement</h3>
        <p>Understanding what a receiving organization actually needs before a single candidate is presented, so every introduction is deliberate rather than speculative.</p>
      </div>
      <div class="cap-row">
        <h3>Cross-Border Pathway Design</h3>
        <p>Structuring the route out of Indonesia as one coordinated pathway — currently to Germany, with parallel work underway toward Japan and the Netherlands.</p>
      </div>
      <div class="cap-row">
        <h3>Institutional &amp; Cultural Fluency</h3>
        <p>Working from direct experience inside German and European academic and professional systems to translate expectations accurately in both directions.</p>
      </div>
    </div>

    <div class="value-strip">
      <p>“Success, to us, isn't a certificate issued or a contract signed. It's how someone performs long after — in a role, a workplace, a new environment.”</p>
    </div>

  </div>
</section>


<!-- ============================================================
     SECTION 2 — INTERNATIONAL PARTNERSHIPS / BUSINESS CONNECTIONS
     ============================================================ -->
<section class="s2" id="partnerships">
  <div class="wrap s2-inner">

    <div class="s2-head">
      <div>
        <div class="eyebrow on-navy">For organizations &amp; partners</div>
        <h2>A partner who understands both sides of the border.</h2>
      </div>
      <div class="s2-intro">
        <p>Whether you're building an international workforce, exploring institutional collaboration, or entering a new market in Indonesia or Europe, DS Global Consulting works as the connective layer between your organization and the people and partners you're trying to reach.</p>
      </div>
    </div>

    <div class="geo">
      <span class="anchor">Indonesia</span>
      <span class="link"></span>
      <span class="anchor">Germany</span>
      <span class="link"></span>
      <div class="satellites">
        <span class="sat">Japan — in development</span>
        <span class="sat">Netherlands — in development</span>
      </div>
    </div>

    <div class="partner-grid">
      <div class="partner-cell">
        <h3>Employer Partnerships</h3>
        <p>Structured collaboration with organizations building an international workforce — from defining what a role actually requires to receiving candidates who understand it before day one.</p>
      </div>
      <div class="partner-cell">
        <h3>Institutional Collaboration</h3>
        <p>Working alongside schools, training providers, and receiving institutions to align expectations long before someone arrives.</p>
      </div>
      <div class="partner-cell">
        <h3>Cross-Border Market Development</h3>
        <p>Extending the same connective approach to new geographies as they open, alongside our core work between Indonesia and Germany.</p>
      </div>
      <div class="partner-cell">
        <h3>Regional Presence &amp; Access</h3>
        <p>A base built specifically to operate as the Indonesian side of an international relationship — headquartered in Kediri, with a second location opening in Yogyakarta.</p>
      </div>
    </div>

    <div class="s2-close">
      <p>“Every relationship starts the same way: by understanding where you're standing, and where you're trying to go.”</p>
      <a class="btn btn-outline" href="/contact">
        Start the Conversation
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>

  </div>
</section>
  <div style="display: flex; justify-content: center; padding-bottom: 40px; background: var(--navy);">
    <button style="cursor: pointer; background: #fff; border: 1px solid #E5E7EB; color: #4B5563; font-weight: 600; padding: 12px 24px; border-radius: 9999px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); display: inline-flex; align-items: center; gap: 8px; font-family: 'Inter', sans-serif; font-size: 12px; letter-spacing: 0.05em; text-transform: uppercase; transition: all 0.2s ease;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background='#fff'" onclick="document.getElementById('bottom-section').style.display = 'block'; this.parentNode.style.display = 'none'; setTimeout(() => { document.getElementById('bottom-section').scrollIntoView({behavior: 'smooth'}); }, 100);">
      <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
      View Employer Readiness & More
    </button>
  </div>
</div>

<div id="bottom-section" style="display: none;">
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


</div>

@endsection
