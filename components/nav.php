<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazara Academy</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<style>
    .count {
        transition: all 1s ease-out; /* Smooth transition for counting */
    }
</style>
<style>
        html {
            scroll-behavior: smooth;
        }
        
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <nav class="sticky top-0 left-0 right-0 z-50 transition-transform duration-300 bg-white" id="navbar">
        <div class="bg-white shadow-lg border-2 border-blue-600 rounded-full mx-4 my-4 max-w-7xl lg:mx-auto relative">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo Section -->
                    <div class="flex-shrink-0 ml-2">
                        <a href="index" class="flex items-center">
                            <img class="h-64 w-auto" src="../images/Logo_1.png" alt="Logo">
                        </a>
                    </div>
    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center justify-center flex-1">
                        <div class="flex space-x-8">
                            <a href="index" class="relative text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-bold group">
                                Home
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 group-active:scale-x-100 transition-transform origin-left duration-300"></span>
                            </a>
                            <a href="Aboutus" class="relative text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-bold group">
                                About
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 group-active:scale-x-100 transition-transform origin-left duration-300"></span>
                            </a>
                            <a href="Founder" class="relative text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-bold group">
                                Our Founder
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 group-active:scale-x-100 transition-transform origin-left duration-300"></span>
                            </a>
                            <a href="AcadmicJourney" class="relative text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-bold group">
                                Academic Journey
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 group-active:scale-x-100 transition-transform origin-left duration-300"></span>
                            </a>


                            <a href="javascript:void(0);" onclick="toggleSection('whyChooseUs')" class="relative text-gray-600 hover:text-gray-900 px-3 py-2 text-sm font-bold group">
                                Why Choose us
                                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 group-active:scale-x-100 transition-transform origin-left duration-300"></span>
                            </a>

                            
                           

                            <a href="Login" class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-green-700 transition duration-300 ease-in-out transform hover:scale-105">
                                Login
                            </a>

                            <a href="Select" class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                                Sign Up
                            </a>
                           
                        </div>
                    </div>
    
                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center mr-2">
                        <button id="mobile-menu-button" class="p-2 rounded-md text-gray-600 hover:text-gray-900 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden absolute bg-white left-0 right-0 border-t border-gray-200 shadow-lg rounded-b-lg mt-2 z-40">
                <div class="px-4 py-2 space-y-2">
                    <a href="Home.html" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Home</a>
                    <a href="Aboutus.html" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">About</a>

                    <a href="AcadmicJourney.html" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Academy Journey</a>
                    <a href="javascript:void(0);" onclick="toggleSection('whyChooseUs')" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Why Choose us</a>
                    <a href="Founder.html" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Our Founder</a>
                    <a href="Login.html" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Login</a>
                    <a href="Select.html" class="block px-3 py-2 text-base font-bold text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-lg">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    