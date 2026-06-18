<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - {{ $product->title }} | Shevootech Store</title>
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

    @php
        $referenceCode = $order->reference_code ?? strtoupper('SHEVO-' . uniqid());
        if (!isset($bankAccounts)) {
            $bankAccounts = collect();
        }
    @endphp

    <section class="pt-32 pb-16 bg-gradient">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('store.show', $product->slug) }}" class="text-indigo-200 hover:text-white transition-colors inline-flex items-center mb-6">
                <i class="fas fa-arrow-left mr-2"></i> Back to Product
            </a>
            <h1 class="text-3xl md:text-4xl font-extrabold text-white" data-aos="fade-up">Complete Your Purchase</h1>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-5 lg:gap-8">
                <div class="lg:col-span-3" data-aos="fade-right">
                    <div class="bg-gray-50 rounded-xl p-8">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Bank Transfer Details</h2>

                        @if(session('error'))
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
                        </div>
                        @endif

                        @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 text-sm">
                            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                        </div>
                        @endif

                        @if($bankAccounts->count() > 0)
                        <div class="space-y-4 mb-8">
                            @foreach($bankAccounts as $account)
                            <div class="bg-white rounded-lg p-5 border border-gray-200">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-lg font-bold text-gray-900">{{ $account->bank_name }}</p>
                                        <p class="text-2xl font-bold text-indigo-600 mt-1 font-mono tracking-wider">{{ $account->account_number }}</p>
                                        <p class="text-sm text-gray-500 mt-1">{{ $account->account_name }}</p>
                                    </div>
                                    <button onclick="navigator.clipboard.writeText('{{ $account->account_number }}')" class="text-indigo-600 hover:text-indigo-700 text-sm font-medium flex items-center" title="Copy account number">
                                        <i class="fas fa-copy mr-1"></i> Copy
                                    </button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="space-y-4 mb-8">
                            <div class="bg-white rounded-lg p-5 border border-gray-200">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-lg font-bold text-gray-900">GTBank (GTCO)</p>
                                        <p class="text-2xl font-bold text-indigo-600 mt-1 font-mono tracking-wider">058 123 4567</p>
                                        <p class="text-sm text-gray-500 mt-1">Shevootech Technologies Limited</p>
                                    </div>
                                    <button onclick="navigator.clipboard.writeText('0581234567')" class="text-indigo-600 hover:text-indigo-700 text-sm font-medium flex items-center">
                                        <i class="fas fa-copy mr-1"></i> Copy
                                    </button>
                                </div>
                            </div>
                            <div class="bg-white rounded-lg p-5 border border-gray-200">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="text-lg font-bold text-gray-900">Access Bank</p>
                                        <p class="text-2xl font-bold text-indigo-600 mt-1 font-mono tracking-wider">123 456 7890</p>
                                        <p class="text-sm text-gray-500 mt-1">Ekenma Peter Nwabueze</p>
                                    </div>
                                    <button onclick="navigator.clipboard.writeText('1234567890')" class="text-indigo-600 hover:text-indigo-700 text-sm font-medium flex items-center">
                                        <i class="fas fa-copy mr-1"></i> Copy
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-6">
                            <div class="flex items-center mb-4">
                                <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 text-white">
                                    <i class="fas fa-info"></i>
                                </div>
                                <h3 class="ml-3 font-semibold text-gray-900">Payment Instructions</h3>
                            </div>
                            <ol class="list-decimal list-inside space-y-2 text-sm text-gray-700">
                                <li>Transfer the exact amount of <strong class="text-indigo-600">₦{{ number_format($product->price) }}</strong> to any of the bank accounts above.</li>
                                <li>Use the reference code below as the <strong>narration/description</strong> for your transfer.</li>
                                <li>After payment, upload the proof of payment using the form below.</li>
                                <li>Your order will be verified and activated within <strong>1-24 hours</strong>.</li>
                            </ol>
                        </div>

                        <div class="mt-8 bg-gray-900 rounded-xl p-6 text-center">
                            <p class="text-sm text-gray-400 mb-2">Your Payment Reference Code</p>
                            <p class="text-3xl font-bold text-white font-mono tracking-widest" id="reference-code">{{ $referenceCode }}</p>
                            <button onclick="copyReference()" class="mt-3 inline-flex items-center text-sm text-indigo-400 hover:text-indigo-300">
                                <i class="fas fa-copy mr-1"></i> Copy Reference Code
                            </button>
                        </div>

                        @if(auth()->check())
                        <div class="mt-8 bg-white rounded-xl p-6 border border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Upload Proof of Payment</h3>
                            <form action="{{ route('checkout.proof', $order) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload Receipt/Screenshot</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col w-full h-32 border-2 border-dashed border-gray-300 rounded-lg hover:border-indigo-500 cursor-pointer transition-colors">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                                                <p class="text-sm text-gray-500"><span class="font-medium text-indigo-600">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-400 mt-1">PNG, JPG, PDF (max 5MB)</p>
                                            </div>
                                            <input type="file" name="proof" class="hidden" accept="image/*,.pdf" required>
                                        </label>
                                    </div>
                                    @error('proof')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-paper-plane mr-2"></i> Submit Proof of Payment
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="mt-8 lg:mt-0 lg:col-span-2" data-aos="fade-left">
                    <div class="bg-gray-50 rounded-xl p-8 shadow-md sticky top-28">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Order Summary</h2>
                        <div class="flex items-center space-x-4 pb-6 border-b border-gray-200">
                            @if($product->thumbnail)
                            <div class="h-16 w-16 rounded-lg overflow-hidden flex-shrink-0 bg-gray-100">
                                <img loading="lazy" src="{{ $product->thumbnail }}" alt="{{ $product->title }}" class="h-full w-full object-cover">
                            </div>
                            @else
                            <div class="h-16 w-16 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-box-open text-white text-xl"></i>
                            </div>
                            @endif
                            <div>
                                <h3 class="font-semibold text-gray-900">{{ $product->title }}</h3>
                                @if($product->type)
                                <span class="text-xs text-gray-500">{{ ucfirst($product->type) }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="py-4 space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Subtotal</span>
                                <span class="text-gray-900 font-medium">₦{{ number_format($product->price) }}</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Tax</span>
                                <span class="text-green-600 font-medium">₦0.00</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex justify-between">
                                <span class="text-lg font-bold text-gray-900">Total</span>
                                <span class="text-2xl font-bold text-indigo-600">₦{{ number_format($product->price) }}</span>
                            </div>
                        </div>

                        <div class="mt-6 p-4 bg-indigo-50 rounded-lg text-sm text-gray-600">
                            <i class="fas fa-shield-alt text-indigo-500 mr-2"></i>
                            Your payment information is processed securely. We do not store credit card details.
                        </div>
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

        function copyReference() {
            const code = document.getElementById('reference-code').textContent;
            navigator.clipboard.writeText(code).then(() => {
                const btn = document.activeElement;
                const original = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check mr-1"></i> Copied!';
                setTimeout(() => { btn.innerHTML = original; }, 2000);
            });
        }
    </script>
</body>
</html>
