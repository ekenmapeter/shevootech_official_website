<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shevootech Online Limited | Web, AI, Graphic & Animation Solutions</title>
    <meta name="description" content="Shevootech Online Limited provides cutting-edge website development, AI solutions, graphic design, and 2D animation services to help businesses grow digitally.">
    <meta name="keywords" content="web development, AI solutions, graphic design, 2D animation, digital agency, Nigeria tech company">
    <meta name="author" content="Shevootech Online Limited">
    
    <!-- Favicon -->
    <link rel="icon" href="/images/logo.png" type="image/png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://shevootech.com.ng/">
    <meta property="og:title" content="Shevootech Online Limited | Web, AI, Graphic & Animation Solutions">
    <meta property="og:description" content="Cutting-edge digital solutions including web development, AI, graphic design, and 2D animation services.">
    <meta property="og:image" content="https://shevootech.com.ng/images/social-preview.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://shevootech.com.ng/">
    <meta property="twitter:title" content="Shevootech Online Limited | Web, AI, Graphic & Animation Solutions">
    <meta property="twitter:description" content="Cutting-edge digital solutions including web development, AI, graphic design, and 2D animation services.">
    <meta property="twitter:image" content="https://shevootech.com.ng/images/social-preview.jpg">
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            scroll-behavior: smooth;
        }
        
        .text-gradient {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .bg-gradient {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .project-card {
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: scale(1.03);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(79, 70, 229, 0); }
            100% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0); }
        }
        
        .typewriter {
            overflow: hidden;
            border-right: .15em solid var(--primary);
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: .15em;
            animation: 
                typing 3.5s steps(40, end),
                blink-caret .75s step-end infinite;
        }
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: var(--primary); }
        }
        
        .scroll-down {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
    </style>
</head>

<body class="antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <img src="/images/logo.png" alt="Shevootech Logo" class="h-8 w-auto">
                        <span class="ml-2 text-xl font-bold text-gray-900">Shevootech</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Home</a>
                    <a href="#services" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Services</a>
                    <a href="#projects" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Projects</a>
                    <a href="#about" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">About</a>
                    <a href="#contact" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Contact</a>
                    <a href="#contact" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-700 transition duration-300">Get Quote</a>
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
        
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Home</a>
                <a href="#services" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Services</a>
                <a href="#projects" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Projects</a>
                <a href="#about" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">About</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-indigo-600">Contact</a>
                <a href="#contact" class="block w-full bg-indigo-600 text-white px-6 py-2 rounded-full font-medium text-center hover:bg-indigo-700 transition duration-300 mt-2">Get Quote</a>
            </div>
        </div>
    </nav> 