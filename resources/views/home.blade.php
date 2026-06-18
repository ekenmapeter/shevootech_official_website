<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shevootech Technologies Limited | Web, AI, Graphic & Animation Solutions</title>
    <meta name="description" content="Shevootech Technologies Limited provides cutting-edge website development, AI solutions, graphic design, and 2D animation services. Top Web Design Agency in Lagos & AI Solutions in Nigeria.">
    <meta name="keywords" content="web development, AI solutions, graphic design, 2D animation, digital agency, Nigeria tech company, Web Design Agency in Lagos, AI Solutions Nigeria">
    <meta name="author" content="Shevootech Technologies Limited">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/images/logo.png" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://shevootech.com.ng/">
    <meta property="og:title" content="Shevootech Technologies Limited | Web, AI, Graphic & Animation Solutions">
    <meta property="og:description" content="Cutting-edge digital solutions including web development, AI, graphic design, and 2D animation services.">
    <meta property="og:image" content="https://shevootech.com.ng/images/social-preview.jpg">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://shevootech.com.ng/">
    <meta property="twitter:title" content="Shevootech Technologies Limited | Web, AI, Graphic & Animation Solutions">
    <meta property="twitter:description" content="Cutting-edge digital solutions including web development, AI, graphic design, and 2D animation services.">
    <meta property="twitter:image" content="https://shevootech.com.ng/images/social-preview.jpg">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --primary-glow: rgba(79, 70, 229, 0.3);
            --secondary: #10b981;
            --secondary-glow: rgba(16, 185, 129, 0.3);
            --dark: #0f172a;
            --darker: #020617;
            --light: #f8fafc;
            --gray-accent: #1e293b;
            --glass: rgba(15, 23, 42, 0.8);
            --glass-border: rgba(79, 70, 229, 0.15);
        }

        * { scrollbar-width: thin; scrollbar-color: var(--primary) var(--dark); }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--darker);
            color: var(--light);
            overflow-x: hidden;
        }

        ::selection { background: var(--primary); color: white; }

        .text-gradient {
            background: linear-gradient(135deg, var(--primary), var(--secondary), #818cf8);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-simple {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-gradient {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        .bg-gradient-subtle {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(16, 185, 129, 0.05));
        }

        .glow { box-shadow: 0 0 30px var(--primary-glow); }
        .glow-sm { box-shadow: 0 0 15px var(--primary-glow); }
        .glow-secondary { box-shadow: 0 0 30px var(--secondary-glow); }

        .glass {
            background: var(--glass);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
        }

        .glass-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(79, 70, 229, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-card:hover {
            border-color: var(--primary);
            box-shadow: 0 0 40px var(--primary-glow);
            transform: translateY(-8px) scale(1.02);
        }

        .hero-grid {
            background-image:
                linear-gradient(rgba(79, 70, 229, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(79, 70, 229, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
        }

        .hero-gradient {
            background: radial-gradient(ellipse at 50% 0%, rgba(79, 70, 229, 0.15) 0%, transparent 60%),
                        radial-gradient(ellipse at 80% 50%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
                        var(--darker);
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: orbFloat 8s ease-in-out infinite;
        }

        @keyframes orbFloat {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }

        .floating { animation: floating 6s ease-in-out infinite; }
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px var(--primary-glow); }
            50% { box-shadow: 0 0 50px var(--primary-glow), 0 0 80px rgba(79, 70, 229, 0.1); }
        }

        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(79, 70, 229, 0.08), transparent);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .nav-link {
            position: relative;
            transition: color 0.3s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s;
        }

        .nav-link:hover::after { width: 100%; }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #6366f1);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .btn-primary:hover {
            box-shadow: 0 0 40px var(--primary-glow);
            transform: translateY(-2px);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before { left: 100%; }

        .btn-outline {
            border: 1px solid rgba(79, 70, 229, 0.4);
            background: transparent;
            transition: all 0.3s;
        }

        .btn-outline:hover {
            border-color: var(--primary);
            box-shadow: 0 0 30px var(--primary-glow);
            background: rgba(79, 70, 229, 0.1);
            transform: translateY(-2px);
        }

        .service-icon-box {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.15), rgba(16, 185, 129, 0.1));
            border: 1px solid rgba(79, 70, 229, 0.2);
            font-size: 1.5rem;
            color: var(--primary);
            transition: all 0.4s;
        }

        .glass-card:hover .service-icon-box {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 0 30px var(--primary-glow);
            transform: scale(1.1) rotate(-5deg);
        }

        .project-img-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .project-img-wrapper::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, var(--darker) 0%, transparent 50%);
            opacity: 0.7;
            transition: opacity 0.4s;
        }

        .glass-card:hover .project-img-wrapper::after { opacity: 0.3; }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary), var(--secondary), transparent);
            margin: 0 auto;
            max-width: 300px;
        }

        .badge-pill {
            display: inline-flex;
            align-items: center;
            padding: 4px 16px;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            background: rgba(79, 70, 229, 0.1);
            border: 1px solid rgba(79, 70, 229, 0.2);
            color: #818cf8;
        }

        .price-tag {
            font-size: 1.875rem;
            font-weight: 800;
            color: var(--secondary);
        }

        .animate-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        .typing-text {
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid var(--primary);
            animation: typing 3.5s steps(40, end), blinkCaret 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blinkCaret {
            from, to { border-color: transparent; }
            50% { border-color: var(--primary); }
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-12px); }
            60% { transform: translateY(-6px); }
        }

        .testimonial-card {
            background: rgba(15, 23, 42, 0.4);
            border: 1px solid rgba(79, 70, 229, 0.08);
            transition: all 0.4s;
        }

        .testimonial-card:hover {
            border-color: rgba(79, 70, 229, 0.3);
            box-shadow: 0 0 30px rgba(79, 70, 229, 0.05);
        }

        .product-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 10;
        }

        .cta-section {
            background: radial-gradient(ellipse at 50% 50%, rgba(79, 70, 229, 0.1) 0%, transparent 70%),
                        var(--darker);
            border-top: 1px solid rgba(79, 70, 229, 0.1);
            border-bottom: 1px solid rgba(79, 70, 229, 0.1);
        }

        @media (max-width: 768px) {
            .typing-text { white-space: normal; border-right: none; animation: none; }
            .stat-number { font-size: 2.25rem; }
        }
    </style>
</head>
<body>

    <!-- ── Navigation ── -->
    <nav class="fixed w-full z-50 glass" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 md:h-20 items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                    <div class="relative">
                        <img src="/images/logo.png" alt="Shevootech" class="h-9 w-auto md:h-10 transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-emerald-500 rounded-full opacity-0 group-hover:opacity-20 blur-xl transition-opacity duration-300"></div>
                    </div>
                    <span class="text-xl font-bold text-white tracking-tight">Shevootech</span>
                </a>

                <div class="hidden lg:flex items-center space-x-1">
                    <a href="#home" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">Home</a>
                    <a href="#services" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">Services</a>
                    <a href="#portfolio" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">Portfolio</a>
                    <a href="#about" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">About</a>
                    <a href="{{ route('blog.index') }}" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">Blog</a>
                    <a href="{{ route('store.index') }}" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">Store</a>
                    <a href="{{ route('tools.index') }}" class="nav-link px-4 py-2 text-sm font-medium text-gray-300 hover:text-white">Tools</a>
                    <div class="ml-4 pl-4 border-l border-gray-700/50">
                        @auth
                        <a href="{{ route('dashboard') }}" class="btn-primary px-5 py-2.5 rounded-full text-sm font-semibold text-white inline-block">
                            <i class="fas fa-user mr-2"></i>Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="btn-primary px-5 py-2.5 rounded-full text-sm font-semibold text-white inline-block">
                            <i class="fas fa-arrow-right mr-2"></i>Get Started
                        </a>
                        @endauth
                    </div>
                </div>

                <button class="lg:hidden mobile-menu-btn p-2 rounded-lg text-gray-400 hover:text-white hover:bg-white/5 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="mobile-menu hidden lg:hidden glass border-t border-gray-800/50">
            <div class="px-4 py-4 space-y-2">
                <a href="#home" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">Home</a>
                <a href="#services" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">Services</a>
                <a href="#portfolio" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">Portfolio</a>
                <a href="#about" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">About</a>
                <a href="{{ route('blog.index') }}" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">Blog</a>
                <a href="{{ route('store.index') }}" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">Store</a>
                <a href="{{ route('tools.index') }}" class="block px-4 py-3 rounded-lg text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition-all">Tools</a>
                <div class="pt-2 border-t border-gray-800/50">
                    @auth
                    <a href="{{ route('dashboard') }}" class="block w-full text-center btn-primary px-5 py-3 rounded-full text-sm font-semibold text-white">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="block w-full text-center btn-primary px-5 py-3 rounded-full text-sm font-semibold text-white">Get Started</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- ── Hero Section ── -->
    <section id="home" class="relative min-h-[70vh] md:min-h-[75vh] flex items-center hero-gradient hero-grid overflow-hidden pt-28 md:pt-32">
        <div class="orb" style="width: 400px; height: 400px; background: var(--primary); top: -100px; right: -100px;"></div>
        <div class="orb" style="width: 300px; height: 300px; background: var(--secondary); bottom: -50px; left: -50px; animation-delay: -3s;"></div>
        <div class="orb" style="width: 200px; height: 200px; background: #818cf8; top: 50%; left: 50%; animation-delay: -5s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
                <div class="lg:col-span-7 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="inline-flex items-center space-x-2 badge-pill mb-6 animate-in">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>Nigeria's Trusted Digital Agency</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4">
                        <span class="text-white">Digital Solutions for</span>
                        <br>
                        <span class="text-gradient">Your Business Growth</span>
                    </h1>

                    <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto lg:mx-0 mb-8 leading-relaxed">
                        We craft innovative <span class="text-indigo-400">web, AI, graphic, and animation</span> solutions that help your business stand out and thrive in the digital world.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                        <a href="#contact" class="btn-primary px-8 py-4 rounded-full text-base font-semibold text-white inline-flex items-center group pulse-glow">
                            Start Your Project
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#portfolio" class="btn-outline px-8 py-4 rounded-full text-base font-semibold text-gray-300 inline-flex items-center group">
                            <i class="fas fa-play-circle mr-2 text-indigo-400"></i>
                            View Our Work
                        </a>
                    </div>

                    <div class="flex items-center gap-8 mt-12 pt-8 border-t border-gray-800/50 justify-center lg:justify-start">
                        <div class="text-center">
                            <p class="stat-number text-3xl">50+</p>
                            <p class="text-xs text-gray-500 mt-1">Projects Done</p>
                        </div>
                        <div class="text-center">
                            <p class="stat-number text-3xl">30+</p>
                            <p class="text-xs text-gray-500 mt-1">Happy Clients</p>
                        </div>
                        <div class="text-center">
                            <p class="stat-number text-3xl">6+</p>
                            <p class="text-xs text-gray-500 mt-1">Years Experience</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 mt-12 lg:mt-0" data-aos="fade-left" data-aos-duration="1000">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/20 to-emerald-500/20 rounded-3xl blur-3xl"></div>
                        <div class="relative glass rounded-3xl p-1">
                            <div class="rounded-2xl overflow-hidden">
                                <div class="relative">
                                    <div class="shimmer absolute inset-0 z-10"></div>
                                    <img class="w-full h-auto floating"
                                         src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                                         alt="Digital solutions illustration">
                                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-[var(--darker)] via-[var(--darker)]/80 to-transparent">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-indigo-500 to-emerald-500 flex items-center justify-center">
                                                <i class="fas fa-check text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-white">Trusted by Businesses</p>
                                                <p class="text-xs text-gray-400">Across Nigeria & Diaspora</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 -left-6 glass rounded-xl px-5 py-3 hidden md:flex items-center space-x-3 pulse-glow">
                            <i class="fas fa-star text-yellow-400"></i>
                            <span class="text-sm font-medium text-white">4.9/5 Client Rating</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 scroll-indicator">
            <a href="#services" class="text-gray-500 hover:text-indigo-400 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- ── Company Mission ── -->
    <section class="py-20 md:py-28 relative">
        <div class="orb" style="width: 250px; height: 250px; background: var(--primary); top: 20%; right: -100px; opacity: 0.15;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4">Our Mission</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
                    Building the <span class="text-gradient">Digital Future</span> of Africa
                </h2>
                <p class="text-lg text-gray-400 leading-relaxed">
                    Shevootech Technologies Limited is on a mission to empower Nigerian businesses and diaspora developers with world-class digital solutions. We bridge the gap between global standards and local expertise — delivering stunning websites, intelligent AI systems, and premium development resources that drive real business growth.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mt-16" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500/20 to-indigo-500/5 flex items-center justify-center mx-auto mb-5 border border-indigo-500/20">
                        <i class="fas fa-bullseye text-2xl text-indigo-400"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">Our Vision</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">To be Africa's most trusted digital technology partner — empowering businesses with innovative, scalable, and impactful solutions that transcend boundaries.</p>
                </div>
                <div class="glass-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-500/20 to-emerald-500/5 flex items-center justify-center mx-auto mb-5 border border-emerald-500/20">
                        <i class="fas fa-handshake text-2xl text-emerald-400"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">Our Promise</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">Every project we touch gets our full commitment to quality, timely delivery, and transparent communication — because your success is our success.</p>
                </div>
                <div class="glass-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500/20 to-purple-500/5 flex items-center justify-center mx-auto mb-5 border border-purple-500/20">
                        <i class="fas fa-lightbulb text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">Our Approach</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">We combine cutting-edge technology with deep local insights to create solutions that are globally competitive and locally relevant.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Services Section ── -->
    <section id="services" class="py-20 md:py-28 relative bg-gradient-subtle">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-cogs mr-2"></i>What We Offer</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    Our <span class="text-gradient">Services</span>
                </h2>
                <p class="text-gray-400 text-lg">Comprehensive digital solutions tailored to your business needs</p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-16">
                @forelse($services as $index => $service)
                <div class="glass-card rounded-2xl p-8 group" data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 100 }}">
                    <div class="service-icon-box mb-6">
                        <i class="{{ $service->icon ?? 'fas fa-cog' }}"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors">{{ $service->title }}</h3>
                    <p class="text-sm text-gray-400 leading-relaxed mb-4">{{ Str::limit($service->description, 100) }}</p>
                    @if($service->price_from)
                    <p class="text-xs text-emerald-400 font-semibold">From ₦{{ number_format($service->price_from) }}</p>
                    @endif
                    @if($service->features)
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach(array_slice($service->features, 0, 3) as $feature)
                        <span class="text-xs px-3 py-1 rounded-full bg-white/5 text-gray-400 border border-gray-700/50">{{ $feature }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
                @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <i class="fas fa-cogs text-4xl mb-4 opacity-50"></i>
                    <p>Services coming soon.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="#contact" class="btn-primary px-8 py-4 rounded-full text-base font-semibold text-white inline-flex items-center group">
                    Discuss Your Project
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ── Portfolio Section ── -->
    <section id="portfolio" class="py-20 md:py-28 relative">
        <div class="orb" style="width: 300px; height: 300px; background: var(--secondary); left: -150px; top: 30%; opacity: 0.1;"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-briefcase mr-2"></i>Our Work</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    Featured <span class="text-gradient">Projects</span>
                </h2>
                <p class="text-gray-400 text-lg">See how we've helped businesses achieve their digital goals</p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
                @forelse($projects as $index => $project)
                <div class="glass-card rounded-2xl overflow-hidden group" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <div class="project-img-wrapper h-56">
                        @if($project->getFirstMediaUrl('screenshots'))
                        <img loading="lazy" src="{{ $project->getFirstMediaUrl('screenshots') }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-indigo-600/30 to-purple-600/30 flex items-center justify-center">
                            <i class="fas fa-laptop-code text-5xl text-indigo-400/50"></i>
                        </div>
                        @endif
                    </div>
                    <div class="p-6 relative z-10">
                        <h3 class="text-lg font-bold text-white mb-1 group-hover:text-indigo-400 transition-colors">{{ $project->title }}</h3>
                        @if($project->client_name)<p class="text-sm text-gray-500 mb-3">{{ $project->client_name }}</p>@endif
                        @if($project->stack)
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(array_slice($project->stack, 0, 3) as $tech)
                            <span class="text-xs px-2.5 py-1 rounded-full bg-white/5 text-gray-400 border border-gray-700/50">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-800/50">
                            <a href="{{ route('portfolio.show', $project->slug) }}" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition-colors inline-flex items-center">
                                View Details <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                            @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" class="text-sm text-gray-500 hover:text-white transition-colors">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <i class="fas fa-briefcase text-4xl mb-4 opacity-50"></i>
                    <p>Projects coming soon.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('portfolio.index') }}" class="btn-outline px-8 py-4 rounded-full text-base font-semibold text-gray-300 inline-flex items-center group">
                    View All Projects
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ── Store / Products Section ── -->
    <section id="store" class="py-20 md:py-28 relative bg-gradient-subtle">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-store mr-2"></i>Marketplace</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    Premium <span class="text-gradient">Scripts & Kits</span>
                </h2>
                <p class="text-gray-400 text-lg">Ready-to-use Laravel boilerplates, themes, and starter projects for developers</p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
                @forelse($products as $index => $product)
                <div class="glass-card rounded-2xl overflow-hidden group" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <div class="relative h-44 overflow-hidden">
                        @if($product->getFirstMediaUrl('thumbnail'))
                        <img loading="lazy" src="{{ $product->getFirstMediaUrl('thumbnail') }}" alt="{{ $product->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-indigo-600/20 to-emerald-600/20 flex items-center justify-center">
                            <i class="fas fa-box-open text-5xl text-indigo-400/30"></i>
                        </div>
                        @endif
                        <div class="product-badge">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $product->type === 'kit' ? 'bg-purple-500/20 text-purple-300 border border-purple-500/30' : 'bg-blue-500/20 text-blue-300 border border-blue-500/30' }}">
                                {{ ucfirst($product->type) }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-indigo-400 transition-colors">{{ $product->title }}</h3>
                        <p class="text-sm text-gray-400 leading-relaxed mb-4">{{ Str::limit($product->description, 80) }}</p>
                        <div class="flex items-center justify-between">
                            <span class="price-tag">₦{{ number_format($product->price) }}</span>
                            <a href="{{ route('store.show', $product->slug) }}" class="btn-primary px-5 py-2.5 rounded-full text-sm font-semibold text-white inline-flex items-center">
                                Buy Now <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <i class="fas fa-store text-4xl mb-4 opacity-50"></i>
                    <p>Products coming soon.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('store.index') }}" class="btn-outline px-8 py-4 rounded-full text-base font-semibold text-gray-300 inline-flex items-center group">
                    Browse Store
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ── Tools Section ── -->
    <section id="tools" class="py-20 md:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-tools mr-2"></i>Developer Tools</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    Free <span class="text-gradient">Online Tools</span>
                </h2>
                <p class="text-gray-400 text-lg">Utility tools for developers — free to use, no sign-up required</p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
                @forelse($tools as $index => $tool)
                <a href="{{ route('tools.show', $tool->slug) }}" class="glass-card rounded-2xl p-8 group block" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500/20 to-indigo-500/5 flex items-center justify-center border border-indigo-500/20 group-hover:bg-gradient-to-br group-hover:from-indigo-500 group-hover:to-indigo-600 transition-all duration-300">
                            <i class="fas fa-code text-xl text-indigo-400 group-hover:text-white transition-colors"></i>
                        </div>
                        <span class="text-xs px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 font-medium">Free</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-indigo-400 transition-colors">{{ $tool->title }}</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">{{ Str::limit($tool->description, 80) }}</p>
                    <div class="mt-5 inline-flex items-center text-indigo-400 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                        Use Tool <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </div>
                </a>
                @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <i class="fas fa-tools text-4xl mb-4 opacity-50"></i>
                    <p>Tools coming soon.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('tools.index') }}" class="btn-outline px-8 py-4 rounded-full text-base font-semibold text-gray-300 inline-flex items-center group">
                    All Tools
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ── About Section ── -->
    <section id="about" class="py-20 md:py-28 relative bg-gradient-subtle">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/20 to-emerald-500/20 rounded-3xl blur-3xl"></div>
                        <div class="relative glass rounded-3xl p-1">
                            <div class="rounded-2xl overflow-hidden">
                                <img loading="lazy" class="w-full h-auto"
                                     src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80"
                                     alt="Shevootech team">
                            </div>
                        </div>
                        <div class="absolute -bottom-8 -right-8 glass rounded-xl p-5 shadow-2xl hidden md:block" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img loading="lazy" class="h-14 w-14 rounded-xl object-cover"
                                         src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80"
                                         alt="CEO photo">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">Ekenma Peter Nwabueze</h4>
                                    <p class="text-xs text-gray-400">CEO & Full Stack Developer</p>
                                    <div class="flex mt-2 space-x-3">
                                        <a href="https://github.com/ekenmapeter" target="_blank" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fab fa-github"></i></a>
                                        <a href="https://www.linkedin.com/in/ekenma-peter-nwabueze" target="_blank" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#contact" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 lg:mt-0 lg:col-span-7" data-aos="fade-left">
                    <span class="badge-pill mb-4"><i class="fas fa-info-circle mr-2"></i>Who We Are</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
                        About <span class="text-gradient">Shevootech</span>
                    </h2>

                    <p class="text-gray-400 leading-relaxed mb-6">
                        Hello, I'm <strong class="text-white">Ekenma Peter Nwabueze</strong>, a full-stack developer from Nigeria. With over <strong class="text-indigo-400">6 years of experience</strong>, I specialize in building stunning, mobile-friendly, and scalable software solutions.
                    </p>
                    <p class="text-gray-400 leading-relaxed mb-8">
                        My expertise spans <span class="text-indigo-400">PHP (6+ years)</span>, <span class="text-indigo-400">Laravel (5+ years)</span>, <span class="text-emerald-400">ReactJS</span>, <span class="text-emerald-400">Flutter</span>, and <span class="text-indigo-400">MySQL</span>. At Shevootech, we bring this technical depth to every project.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-white/5 border border-gray-800/50">
                            <div class="w-10 h-10 rounded-lg bg-indigo-500/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-lightbulb text-indigo-400"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">Innovation</h4>
                                <p class="text-xs text-gray-500">Cutting-edge tech solutions</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-white/5 border border-gray-800/50">
                            <div class="w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-handshake text-emerald-400"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">Integrity</h4>
                                <p class="text-xs text-gray-500">Honest & transparent</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-white/5 border border-gray-800/50">
                            <div class="w-10 h-10 rounded-lg bg-purple-500/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-purple-400"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">Collaboration</h4>
                                <p class="text-xs text-gray-500">Client-first approach</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 rounded-xl bg-white/5 border border-gray-800/50">
                            <div class="w-10 h-10 rounded-lg bg-amber-500/20 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-medal text-amber-400"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-white">Excellence</h4>
                                <p class="text-xs text-gray-500">Premium quality delivery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Blog Section ── -->
    <section id="blog" class="py-20 md:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-newspaper mr-2"></i>Latest Insights</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    From Our <span class="text-gradient">Blog</span>
                </h2>
                <p class="text-gray-400 text-lg">Dev tutorials, business guides, and industry insights</p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
                @forelse($posts as $index => $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="glass-card rounded-2xl overflow-hidden group block" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <div class="h-48 overflow-hidden">
                        @if($post->cover_image)
                        <img loading="lazy" src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-indigo-600/20 to-emerald-600/20 flex items-center justify-center">
                            <i class="fas fa-newspaper text-5xl text-indigo-400/30"></i>
                        </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-3 mb-3">
                            <span class="text-xs px-3 py-1 rounded-full font-medium {{ $post->category === 'dev' ? 'bg-blue-500/10 text-blue-400 border border-blue-500/20' : ($post->category === 'business' ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20' : 'bg-gray-500/10 text-gray-400 border border-gray-500/20') }}">
                                {{ ucfirst($post->category) }}
                            </span>
                            @if($post->published_at)
                            <span class="text-xs text-gray-500">{{ $post->published_at->format('M d, Y') }}</span>
                            @endif
                        </div>
                        <h3 class="text-base font-bold text-white mb-2 group-hover:text-indigo-400 transition-colors leading-snug">{{ $post->title }}</h3>
                        @if($post->excerpt)
                        <p class="text-sm text-gray-400 leading-relaxed">{{ Str::limit($post->excerpt, 80) }}</p>
                        @endif
                        <div class="mt-4 inline-flex items-center text-indigo-400 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity">
                            Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </div>
                    </div>
                </a>
                @empty
                <div class="col-span-full text-center py-12 text-gray-500">
                    <i class="fas fa-newspaper text-4xl mb-4 opacity-50"></i>
                    <p>Blog posts coming soon.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="{{ route('blog.index') }}" class="btn-outline px-8 py-4 rounded-full text-base font-semibold text-gray-300 inline-flex items-center group">
                    Read All Articles
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ── CTA Section ── -->
    <section class="py-20 cta-section relative overflow-hidden">
        <div class="orb" style="width: 500px; height: 500px; background: var(--primary); top: -200px; right: -200px; opacity: 0.08;"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
            <span class="badge-pill mb-4"><i class="fas fa-rocket mr-2"></i>Get Started Today</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6">
                Ready to Build Your <span class="text-gradient">Digital Future</span>?
            </h2>
            <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
                Whether you need a stunning website, AI automation, or premium development resources — we're here to help you succeed.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#contact" class="btn-primary px-10 py-4 rounded-full text-base font-semibold text-white inline-flex items-center pulse-glow">
                    <i class="fas fa-paper-plane mr-2"></i> Start a Project
                </a>
                <a href="{{ route('store.index') }}" class="btn-outline px-10 py-4 rounded-full text-base font-semibold text-gray-300 inline-flex items-center">
                    <i class="fas fa-shopping-bag mr-2"></i> Browse Store
                </a>
            </div>
        </div>
    </section>

    <!-- ── Testimonials ── -->
    <section class="py-20 md:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-comments mr-2"></i>Testimonials</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    What Our <span class="text-gradient">Clients Say</span>
                </h2>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mt-16">
                <div class="testimonial-card rounded-2xl p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="flex space-x-1">
                            @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                            @endfor
                        </div>
                    </div>
                    <blockquote>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6">"Shevootech transformed our online presence with a stunning website and effective digital marketing strategy. Their team was professional, creative, and delivered beyond our expectations."</p>
                    </blockquote>
                    <div class="flex items-center space-x-3">
                        <img loading="lazy" class="h-10 w-10 rounded-full object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sarah Johnson">
                        <div>
                            <p class="text-sm font-semibold text-white">Sarah Johnson</p>
                            <p class="text-xs text-gray-500">Marketing Director, TechNova</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card rounded-2xl p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="flex space-x-1">
                            @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                            @endfor
                        </div>
                    </div>
                    <blockquote>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6">"The AI chatbot Shevootech built for us has significantly improved our customer support efficiency. It handles 60% of our inquiries automatically."</p>
                    </blockquote>
                    <div class="flex items-center space-x-3">
                        <img loading="lazy" class="h-10 w-10 rounded-full object-cover" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Adeyemi">
                        <div>
                            <p class="text-sm font-semibold text-white">Michael Adeyemi</p>
                            <p class="text-xs text-gray-500">CTO, InnovateTech Nigeria</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card rounded-2xl p-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="flex space-x-1">
                            @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                            @endfor
                        </div>
                    </div>
                    <blockquote>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6">"From the initial branding to our animated explainer videos, Shevootech has been instrumental in shaping our company's visual identity and digital strategy."</p>
                    </blockquote>
                    <div class="flex items-center space-x-3">
                        <img loading="lazy" class="h-10 w-10 rounded-full object-cover" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="David Wilson">
                        <div>
                            <p class="text-sm font-semibold text-white">David Wilson</p>
                            <p class="text-xs text-gray-500">Founder, GreenEnergy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Contact Section ── -->
    <section id="contact" class="py-20 md:py-28 relative bg-gradient-subtle">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span class="badge-pill mb-4"><i class="fas fa-envelope mr-2"></i>Get In Touch</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    Let's Work <span class="text-gradient">Together</span>
                </h2>
                <p class="text-gray-400 text-lg">Ready to start your next project? We'd love to hear from you.</p>
                <div class="section-divider mt-6"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mt-16 max-w-5xl mx-auto">
                <div class="glass-card rounded-2xl p-8 md:p-10" data-aos="fade-right">
                    <h3 class="text-xl font-bold text-white mb-6">Send us a message</h3>
                    <form class="space-y-5" id="discovery-form">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Your Name</label>
                                <input type="text" name="name" id="name" required
                                       class="w-full px-4 py-3 bg-white/5 border border-gray-700/50 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Email Address</label>
                                <input type="email" name="email" id="email" required
                                       class="w-full px-4 py-3 bg-white/5 border border-gray-700/50 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Subject</label>
                            <select name="subject" id="subject"
                                    class="w-full px-4 py-3 bg-white/5 border border-gray-700/50 rounded-xl text-gray-300 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors">
                                <option value="" disabled selected class="bg-gray-900">Select an option</option>
                                <option class="bg-gray-900">Increase Sales / Leads</option>
                                <option class="bg-gray-900">Improve Branding / Awareness</option>
                                <option class="bg-gray-900">Automate Processes (AI/Chatbots)</option>
                                <option class="bg-gray-900">Web Development Project</option>
                                <option class="bg-gray-900">Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Additional Details (Optional)</label>
                            <textarea name="message" id="message" rows="4"
                                      class="w-full px-4 py-3 bg-white/5 border border-gray-700/50 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors resize-none"></textarea>
                        </div>

                        <button type="submit" id="submit-btn"
                                class="w-full btn-primary px-6 py-4 rounded-xl text-base font-semibold text-white inline-flex items-center justify-center">
                            <span id="btn-text">Send Message</span>
                            <svg id="btn-loader" class="animate-spin ml-2 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="space-y-6" data-aos="fade-left">
                    <div class="glass-card rounded-2xl p-8">
                        <h3 class="text-lg font-bold text-white mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-xl bg-indigo-500/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-indigo-400"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-white">Address</h4>
                                    <p class="text-sm text-gray-400 mt-1">PLOT 493 SABO LUBGE EXTENSION<br>AIRPORT ROAD ABUJA, FCT, Nigeria</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-xl bg-emerald-500/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone-alt text-emerald-400"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-white">Phone</h4>
                                    <p class="text-sm text-gray-400 mt-1">+234 703 163 3778<br>+234 803 568 5833</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-purple-400"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-white">Email</h4>
                                    <p class="text-sm text-gray-400 mt-1">info@shevootech.com.ng<br>support@shevootech.com.ng</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card rounded-2xl p-8">
                        <h3 class="text-lg font-bold text-white mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.linkedin.com/in/ekenma-peter-nwabueze/" target="_blank" class="w-12 h-12 rounded-xl bg-white/5 border border-gray-700/50 flex items-center justify-center text-gray-400 hover:text-indigo-400 hover:border-indigo-500/50 hover:bg-indigo-500/10 transition-all">
                                <i class="fab fa-linkedin-in text-lg"></i>
                            </a>
                            <a href="https://github.com/ekenmapeter" target="_blank" class="w-12 h-12 rounded-xl bg-white/5 border border-gray-700/50 flex items-center justify-center text-gray-400 hover:text-indigo-400 hover:border-indigo-500/50 hover:bg-indigo-500/10 transition-all">
                                <i class="fab fa-github text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-white/5 border border-gray-700/50 flex items-center justify-center text-gray-400 hover:text-indigo-400 hover:border-indigo-500/50 hover:bg-indigo-500/10 transition-all">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-white/5 border border-gray-700/50 flex items-center justify-center text-gray-400 hover:text-indigo-400 hover:border-indigo-500/50 hover:bg-indigo-500/10 transition-all">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Newsletter ── -->
    <section class="py-16 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass rounded-2xl p-10 md:p-14 text-center" data-aos="fade-up">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-indigo-500/20 to-emerald-500/10 flex items-center justify-center mx-auto mb-6 border border-indigo-500/20">
                    <i class="fas fa-envelope-open-text text-2xl text-indigo-400"></i>
                </div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-3">Stay Updated</h2>
                <p class="text-gray-400 mb-8 max-w-lg mx-auto">Subscribe for the latest tutorials, tools, and exclusive offers.</p>
                <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" required
                           class="flex-1 px-5 py-3 bg-white/5 border border-gray-700/50 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500 transition-colors">
                    <button type="submit" class="btn-primary px-8 py-3 rounded-xl text-sm font-semibold text-white whitespace-nowrap">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ── Footer ── -->
    <footer class="border-t border-gray-800/50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="lg:col-span-1">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3 mb-5">
                        <img src="/images/logo.png" alt="Shevootech" class="h-8 w-auto">
                        <span class="text-xl font-bold text-white">Shevootech</span>
                    </a>
                    <p class="text-sm text-gray-500 leading-relaxed mb-6">Empowering businesses through innovative digital solutions. We build, design, and deliver.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/in/ekenma-peter-nwabueze/" target="_blank" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/ekenmapeter" target="_blank" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-500 hover:text-indigo-400 transition-colors"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-5">Solutions</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">AI Solutions</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Graphic Design</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">2D Animation</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-5">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="#about" class="text-sm text-gray-500 hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="{{ route('portfolio.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="#contact" class="text-sm text-gray-500 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-5">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('tools.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Free Tools</a></li>
                        <li><a href="{{ route('store.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Marketplace</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-sm text-gray-500 hover:text-white transition-colors">Tutorials</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-white transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-gray-800/50 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Shevootech Technologies Limited. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-xs text-gray-500 hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="text-xs text-gray-500 hover:text-white transition-colors">Terms</a>
                    <a href="#" class="text-xs text-gray-500 hover:text-white transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ── WhatsApp Float ── -->
    <a href="https://wa.link/e8dn65" target="_blank"
       class="fixed bottom-6 right-6 bg-emerald-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-emerald-600 transition-all duration-300 z-50 pulse-glow hover:scale-110">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <!-- ── Scripts ── -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true, offset: 50 });

        document.querySelector('.mobile-menu-btn')?.addEventListener('click', () => {
            document.querySelector('.mobile-menu')?.classList.toggle('hidden');
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                    const menu = document.querySelector('.mobile-menu');
                    if (menu && !menu.classList.contains('hidden')) menu.classList.add('hidden');
                }
            });
        });

        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            const currentScroll = window.pageYOffset;
            if (currentScroll > 100) {
                navbar.style.background = currentScroll > lastScroll
                    ? 'rgba(15, 23, 42, 0.95)'
                    : 'rgba(15, 23, 42, 0.85)';
            } else {
                navbar.style.background = 'rgba(15, 23, 42, 0.8)';
            }
            lastScroll = currentScroll;
        });

        document.getElementById('discovery-form')?.addEventListener('submit', function (e) {
            e.preventDefault();
            const form = this;
            const submitBtn = document.getElementById('submit-btn');
            const btnText = document.getElementById('btn-text');
            const btnLoader = document.getElementById('btn-loader');

            submitBtn.disabled = true;
            btnText.textContent = 'Sending...';
            btnLoader.classList.remove('hidden');

            const formData = new FormData(form);
            fetch("{{ route('contact.submit') }}", {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire({
                    title: data.status === 'success' ? 'Message Sent!' : 'Error!',
                    text: data.message || 'Something went wrong.',
                    icon: data.status === 'success' ? 'success' : 'error',
                    background: '#1e293b',
                    color: '#fff',
                    confirmButtonColor: '#4f46e5',
                });
                if (data.status === 'success') form.reset();
            })
            .catch(() => {
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong. Please try again.',
                    icon: 'error',
                    background: '#1e293b',
                    color: '#fff',
                    confirmButtonColor: '#4f46e5',
                });
            })
            .finally(() => {
                submitBtn.disabled = false;
                btnText.textContent = 'Send Message';
                btnLoader.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
