<!-- Footer -->
    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8 xl:col-span-1">
                    <a href="#" class="flex items-center">
                        <img src="/images/logo.png" alt="Shevootech Logo" class="h-8 w-auto">
                        <span class="ml-2 text-xl font-bold text-white">Shevootech</span>
                    </a>
                    <p class="text-gray-300 text-base">
                        Empowering businesses through innovative digital solutions.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                                Solutions
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Web Development
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        AI Solutions
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Graphic Design
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        2D Animation
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                                Company
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Careers
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                                Support
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Help Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Documentation
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Community
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Status
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                                Legal
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Terms
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-base text-gray-400 hover:text-white">
                                        Cookie Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-800 pt-8">
                <p class="text-base text-gray-400 text-center">
                    &copy; 2024 Shevootech Online Limited. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.link/e8dn65" class="fixed bottom-6 right-6 bg-green-500 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition duration-300 z-50 pulse">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (!document.querySelector('.mobile-menu').classList.contains('hidden')) {
                    document.querySelector('.mobile-menu').classList.add('hidden');
                }
            });
        });
        
        // Typewriter effect
        function typeWriter(element, text, i) {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(function() { typeWriter(element, text, i) }, 100);
            }
        }
        
        // Start typewriter effect on elements with class 'typewriter'
        document.querySelectorAll('.typewriter').forEach(el => {
            const text = el.textContent;
            el.textContent = '';
            typeWriter(el, text, 0);
        });
    </script>
</body>
</html> 