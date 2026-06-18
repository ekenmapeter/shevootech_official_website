<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} | Shevootech Portfolio</title>
    <meta name="description" content="{{ Str::limit($project->description, 160) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/images/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

    <style>
        :root { --primary: #4f46e5; --primary-dark: #4338ca; --secondary: #10b981; --dark: #1e293b; --light: #f8fafc; }
        body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; scroll-behavior: smooth; }
        .bg-gradient { background: linear-gradient(135deg, var(--primary), var(--secondary)); }
        .pulse { animation: pulse 2s infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(79,70,229,0.7); } 70% { box-shadow: 0 0 0 15px rgba(79,70,229,0); } 100% { box-shadow: 0 0 0 0 rgba(79,70,229,0); } }
    </style>
</head>

<body class="antialiased">
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="/images/logo.png" alt="Shevootech Logo" class="h-8 w-auto">
                        <span class="ml-2 text-xl font-bold text-gray-900">Shevootech</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Home</a>
                    <a href="{{ route('services.index') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Services</a>
                    <a href="{{ route('portfolio.index') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Portfolio</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Blog</a>
                    <a href="{{ route('tools.index') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Tools</a>
                    <a href="{{ route('store.index') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Store</a>
                    @auth
                    <a href="{{ route('dashboard') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-700 transition duration-300">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-700 transition duration-300">Login</a>
                    @endauth
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button p-2 rounded-md text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-menu hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Home</a>
                <a href="{{ route('services.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Services</a>
                <a href="{{ route('portfolio.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Portfolio</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Blog</a>
                <a href="{{ route('tools.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Tools</a>
                <a href="{{ route('store.index') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Store</a>
                @auth
                <a href="{{ route('dashboard') }}" class="block w-full bg-indigo-600 text-white px-6 py-2 rounded-full font-medium text-center hover:bg-indigo-700 transition duration-300 mt-2">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="block w-full bg-indigo-600 text-white px-6 py-2 rounded-full font-medium text-center hover:bg-indigo-700 transition duration-300 mt-2">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-12 bg-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('portfolio.index') }}" class="text-indigo-200 hover:text-white transition-colors inline-flex items-center mb-6">
                <i class="fas fa-arrow-left mr-2"></i> Back to Portfolio
            </a>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white" data-aos="fade-up">{{ $project->title }}</h1>
            @if($project->client_name)
            <p class="mt-3 text-xl text-indigo-100" data-aos="fade-up" data-aos-delay="100"><i class="fas fa-user-tie mr-2"></i>{{ $project->client_name }}</p>
            @endif
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-12">
                <div class="lg:col-span-2" data-aos="fade-right">
                    @if(isset($project->screenshots) && count($project->screenshots) > 0)
                    <div class="grid gap-4">
                        @foreach($project->screenshots as $screenshot)
                        <div class="rounded-xl overflow-hidden shadow-md">
                            <img loading="lazy" src="{{ $screenshot }}" alt="{{ $project->title }}" class="w-full h-auto">
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="rounded-xl overflow-hidden shadow-md bg-gradient-to-br from-indigo-500 to-purple-600 p-16 text-center">
                        <i class="fas fa-image text-6xl text-white opacity-50"></i>
                    </div>
                    @endif

                    <div class="mt-8 prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        {!! $project->description !!}
                    </div>
                </div>

                <div class="mt-8 lg:mt-0 lg:col-span-1" data-aos="fade-left">
                    <div class="bg-gray-50 rounded-xl p-8 shadow-md sticky top-28">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Details</h3>

                        @if($project->client_name)
                        <div class="mb-4">
                            <p class="text-sm text-gray-500 font-medium">Client</p>
                            <p class="text-gray-900">{{ $project->client_name }}</p>
                        </div>
                        @endif

                        @if(isset($project->stack) && count($project->stack) > 0)
                        <div class="mb-6">
                            <p class="text-sm text-gray-500 font-medium mb-2">Tech Stack</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->stack as $tech)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($project->live_url)
                        <a href="{{ $project->live_url }}" target="_blank" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-external-link-alt mr-2"></i> Visit Live Site
                        </a>
                        @endif

                        <a href="{{ url('/#contact') }}" class="mt-3 w-full inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50 transition duration-300">
                            <i class="fas fa-comment mr-2"></i> Discuss Similar Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8 xl:col-span-1">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="/images/logo.png" alt="Shevootech Logo" class="h-8 w-auto">
                        <span class="ml-2 text-xl font-bold text-white">Shevootech</span>
                    </a>
                    <p class="text-gray-300 text-base">Empowering businesses through innovative digital solutions.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/ekenma-peter-nwabueze/" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/ekenmapeter" class="text-gray-400 hover:text-white"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Solutions</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="{{ route('services.index') }}" class="text-base text-gray-400 hover:text-white">Web Development</a></li>
                                <li><a href="{{ route('services.index') }}" class="text-base text-gray-400 hover:text-white">AI Solutions</a></li>
                                <li><a href="{{ route('services.index') }}" class="text-base text-gray-400 hover:text-white">Graphic Design</a></li>
                                <li><a href="{{ route('services.index') }}" class="text-base text-gray-400 hover:text-white">2D Animation</a></li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Company</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="{{ url('/#about') }}" class="text-base text-gray-400 hover:text-white">About</a></li>
                                <li><a href="{{ route('blog.index') }}" class="text-base text-gray-400 hover:text-white">Blog</a></li>
                                <li><a href="{{ route('portfolio.index') }}" class="text-base text-gray-400 hover:text-white">Portfolio</a></li>
                                <li><a href="{{ url('/#contact') }}" class="text-base text-gray-400 hover:text-white">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Resources</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="{{ route('tools.index') }}" class="text-base text-gray-400 hover:text-white">Free Tools</a></li>
                                <li><a href="{{ route('store.index') }}" class="text-base text-gray-400 hover:text-white">Marketplace</a></li>
                                <li><a href="{{ route('blog.index') }}" class="text-base text-gray-400 hover:text-white">Tutorials</a></li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Legal</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="#" class="text-base text-gray-400 hover:text-white">Privacy</a></li>
                                <li><a href="#" class="text-base text-gray-400 hover:text-white">Terms</a></li>
                                <li><a href="#" class="text-base text-gray-400 hover:text-white">Cookie Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-800 pt-8">
                <p class="text-base text-gray-400 text-center">&copy; {{ date('Y') }} Shevootech Technologies Limited. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.link/e8dn65" class="fixed bottom-6 right-6 bg-green-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition duration-300 z-50 pulse">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        document.querySelector("button.mobile-menu-button")?.addEventListener("click", () => {
            document.querySelector(".mobile-menu")?.classList.toggle("hidden");
        });
    </script>
</body>
</html>
