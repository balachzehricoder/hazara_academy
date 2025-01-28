<?php include 'nav.php' ?>
    


    <!-- Hero Section -->

    <!-- Hero Section 1 - Clean & Minimal -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto  pb-16 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Left Content -->
                <div class="lg:w-1/2 space-y-8">
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Learn from the Best Tutors
                        <span class="text-blue-600">at very Low Cost</span>
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Join thousands of students who are already learning from expert mentors. Start your journey today.
                    </p>
    
                    <!-- Rounded Search Bar -->
                    <div class="mt-6">
                        <form class="relative flex items-center">
                            <input type="text" 
                                   class="w-full px-6 py-4 text-gray-900 placeholder-gray-500 bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white" 
                                   placeholder="Search for a course or teacher..." />
                            <button type="submit" 
                                    class="absolute right-3 bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
    
                <!-- Right Content -->
                <div class="lg:w-1/2">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/online-learning-4487137-3726239.png" 
                         alt="Learning Illustration" 
                         class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>

<!----------------------- -->
<div class="w-full min-h-screen flex flex-col justify-center items-center px-4 py-12">
    <h2 class="text-5xl font-bold text-center mb-12">What Our Customers Say</h2>
    
    <div class="relative w-full">
        <!-- Navigation Arrows -->
        <button 
            onclick="prevSlide()"
            class="absolute left-4 top-1/2 -translate-y-1/2 z-10 p-2 rounded-full bg-white shadow-lg hover:bg-gray-50"
            aria-label="Previous testimonial"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        
        <button 
            onclick="nextSlide()"
            class="absolute right-4 top-1/2 -translate-y-1/2 z-10 p-2 rounded-full bg-white shadow-lg hover:bg-gray-50"
            aria-label="Next testimonial"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Testimonials Container -->
        <div class="overflow-hidden w-full">
            <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                <!-- Testimonial 1 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-white rounded-lg p-8 mx-auto max-w-4xl">
                        <div class="absolute left-0 top-0 w-24 h-24 bg-blue-700 opacity-90 rounded-tl-lg rounded-br-[100px]"></div>
                        <div class="absolute right-0 bottom-0 w-24 h-24 bg-blue-700 opacity-90 rounded-br-lg rounded-tl-[100px]"></div>
                
                        <div class="relative z-10">
                            <div class="flex flex-col items-center text-center">
                                <img
                                    src="../images/pic 11.jpeg"
                                    alt="Sarah Johnson"
                                    class="w-20 h-20 rounded-full mb-4 object-cover"
                                />
                                <h3 class="text-xl font-semibold text-gray-900">Sarah Johnson</h3>
                                <div class="flex items-center justify-center mb-4">
                                    <!-- Star Rating -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                </div>
                                <p class="text-gray-600 max-w-2xl">Helping students understand complex mathematical concepts and watching them succeed brings me joy every day. I believe that every student has the potential to excel in math with the right guidance and support.</p>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Testimonial 2 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-white rounded-lg p-8 mx-auto max-w-4xl">
                        <div class="absolute left-0 top-0 w-24 h-24 bg-blue-700 opacity-90 rounded-tl-lg rounded-br-[100px]"></div>
                        <div class="absolute right-0 bottom-0 w-24 h-24 bg-blue-700 opacity-90 rounded-br-lg rounded-tl-[100px]"></div>
                
                        <div class="relative z-10">
                            <div class="flex flex-col items-center text-center">
                                <img
                                    src="../images/pic 11.jpeg"
                                    alt="Sarah Johnson"
                                    class="w-20 h-20 rounded-full mb-4 object-cover"
                                />
                                <h3 class="text-xl font-semibold text-gray-900">Sarah Johnson</h3>
                                <div class="flex items-center justify-center mb-4">
                                    <!-- Star Rating -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                </div>
                                <p class="text-gray-600 max-w-2xl">Helping students understand complex mathematical concepts and watching them succeed brings me joy every day. I believe that every student has the potential to excel in math with the right guidance and support.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-white rounded-lg p-8 mx-auto max-w-4xl">
                        <div class="absolute left-0 top-0 w-24 h-24 bg-blue-700 opacity-90 rounded-tl-lg rounded-br-[100px]"></div>
                        <div class="absolute right-0 bottom-0 w-24 h-24 bg-blue-700 opacity-90 rounded-br-lg rounded-tl-[100px]"></div>
                
                        <div class="relative z-10">
                            <div class="flex flex-col items-center text-center">
                                <img
                                    src="../images/pic 11.jpeg"
                                    alt="Sarah Johnson"
                                    class="w-20 h-20 rounded-full mb-4 object-cover"
                                />
                                <h3 class="text-xl font-semibold text-gray-900">Sarah Johnson</h3>
                                <div class="flex items-center justify-center mb-4">
                                    <!-- Star Rating -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                                    </svg>
                                </div>
                                <p class="text-gray-600 max-w-2xl">Helping students understand complex mathematical concepts and watching them succeed brings me joy every day. I believe that every student has the potential to excel in math with the right guidance and support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dots Indicator -->
        <div class="flex justify-center mt-8 gap-2">
            <button onclick="goToSlide(0)" class="w-2 h-2 rounded-full bg-purple-600" aria-label="Go to slide 1"></button>
            <button onclick="goToSlide(1)" class="w-2 h-2 rounded-full bg-gray-300" aria-label="Go to slide 2"></button>
            <button onclick="goToSlide(2)" class="w-2 h-2 rounded-full bg-gray-300" aria-label="Go to slide 3"></button>
        </div>

        <!-- <div class="flex justify-center mt-8">
            <a href="Tutorsprofile.html" class="bg-blue-700 text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-600 transition duration-300">
                More Tutors
            </a>
        </div> -->
    </div>
</div>

<!-- ------------------ -->

<section class="w-full py-12 bg-gray-100">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Meet Our Expert Tutors</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
        <!-- Tutor Card 1 -->
        <div class="relative bg-white rounded-lg shadow-lg p-6">
            <img
                src="../images/pic 11.jpeg"
                alt="Sarah Johnson"
                class="w-20 h-20 rounded-full mx-auto mb-4 object-cover"
            />
            <h3 class="text-xl font-semibold text-gray-900 text-center">Sarah Johnson</h3>
            <p class="text-purple-600 font-medium text-center">Math Tutor</p>
            <div class="flex justify-center mt-4 mb-2">
                <!-- Star Rating -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
            </div>
            <p class="text-gray-600 text-center">Helping students understand complex mathematical concepts and watching them succeed brings me joy every day. I believe that every student has the potential to excel in math with the right guidance and support.</p>
        </div>

        <!-- Add more Tutor Cards -->
        <div class="relative bg-white rounded-lg shadow-lg p-6">
            <img
                src="../images/pic 13.jpeg"
                alt="David Chen"
                class="w-20 h-20 rounded-full mx-auto mb-4 object-cover"
            />
            <h3 class="text-xl font-semibold text-gray-900 text-center">David Chen</h3>
            <p class="text-purple-600 font-medium text-center">Science Tutor</p>
            <div class="flex justify-center mt-4 mb-2">
                <!-- Star Rating -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
            </div>
            <p class="text-gray-600 text-center">Passionate about making science engaging and accessible through clear explanations and hands-on learning.</p>
        </div>


        <div class="relative bg-white rounded-lg shadow-lg p-6">
            <img
                src="../images/pic 11.jpeg"
                alt="Sarah Johnson"
                class="w-20 h-20 rounded-full mx-auto mb-4 object-cover"
            />
            <h3 class="text-xl font-semibold text-gray-900 text-center">Sarah Johnson</h3>
            <p class="text-purple-600 font-medium text-center">Math Tutor</p>
            <div class="flex justify-center mt-4 mb-2">
                <!-- Star Rating -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z" />
                </svg>
            </div>
            <p class="text-gray-600 text-center">Helping students understand complex mathematical concepts and watching them succeed brings me joy every day. I believe that every student has the potential to excel in math with the right guidance and support.</p>
        </div>
        
       
    </div>
    <div class="flex justify-center mt-8">
        <a href="Tutorsprofile.html" class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-600 transition duration-300">
            View More Tutors
        </a>
    </div>
</section>


    

<div  class="relative bg-white"  id="whyChooseUs">
    <div class="max-w-7xl mx-auto pt-8 pb-16 px-4 sm:px-6 lg:px-4">
        <!-- Main Content -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-8">
            <h1 class="text-5xl font-bold text-gray-900 animate__animated animate__fadeIn animate__delay-1s">
                Why Choose 
                <span class="relative">
                    Hazara Academy?
                    <span class="absolute bottom-2 left-0 w-full h-2 bg-blue-200 -z-10"></span>
                </span>
            </h1>
            <p class="text-xl text-gray-600 animate__animated animate__fadeIn animate__delay-2s">
                At Hazara Academy, we believe that quality education should be accessible to everyone, everywhere.
            </p>
        </div>

        <!-- Feature Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            <!-- 1. Affordable Fee Structure -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-3s">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Affordable and Flexible Fee Structure</h3>
                <p class="text-gray-600">Pay-as-Much-as-You-Study model with special provisions for orphans and needy students. Most cost-effective education without compromising quality.</p>
            </div>

            <!-- 2. BISE Lahore Affiliation -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-4s">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">BISE Lahore Affiliated</h3>
                <p class="text-gray-600">Official affiliation ensures certified, credible education meeting national standards with recognized credentials.</p>
            </div>

            <!-- 3. Backed by Hazara Public School -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-5s">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Legacy of Excellence</h3>
                <p class="text-gray-600">Supported by Hazara Public School & College with a legacy of over 7,000 students and proven track record of transforming lives.</p>
            </div>

            <!-- 4. Largest Pool of Tutors -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-6s">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Global Tutor Network</h3>
                <p class="text-gray-600">Access to the largest pool of experienced tutors worldwide, offering expertise in STEM, languages, and competitive exam preparation.</p>
            </div>

            <!-- 5. 24/7 Learning -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-7s">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">24/7 Flexible Learning</h3>
                <p class="text-gray-600">Schedule classes any time with round-the-clock availability. Learn at your own pace and convenience.</p>
            </div>

            <!-- 6. Quality Assurance -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-8s">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Quality Rating System</h3>
                <p class="text-gray-600">Transparent rating system for teachers and students ensuring continuous improvement and quality education.</p>
            </div>

            <!-- 7. Supporting Needy Students -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-9s">
                <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Education with Purpose</h3>
                <p class="text-gray-600">Providing free education to orphans and supporting deserving students worldwide through our Greed-Free Quality Education initiative.</p>
            </div>

            <!-- 8. Led by Dr. Waqas -->
            <div class="p-6 bg-gray-50 rounded-xl hover:shadow-lg transition transform duration-300 hover:scale-105 animate__animated animate__fadeIn animate__delay-10s">
                <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Led by Dr. Waqas A. Khan</h3>
                <p class="text-gray-600">Founded by an internationally acclaimed educator, researcher, and journalist, ensuring unparalleled educational excellence.</p>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript for Toggle Visibility -->


<!-- Hero Section 3 - Modern with Stats -->

<!-- Founder Section -->
<div class="relative bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Content -->
            <div class="lg:w-1/2 space-y-6 animate-fadeInLeft">
                <!-- Title -->
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-600">
                    <span class="font-medium">Meet Our Founder</span>
                </div>

                <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                    Dr. Waqas A. Khan
                    <span class="block text-2xl text-blue-600 mt-2">
                        Founder & CEO, Hazara Academy
                    </span>
                </h2>

                <!-- Description -->
                <p class="text-lg text-gray-600 leading-relaxed">
                    Dr. Waqas A. Khan is an internationally acclaimed educator, researcher, and journalist. His vision of accessible and equitable education drives every initiative at Hazara Academy.
                </p>

                <!-- Achievements List -->
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="text-gray-700">Transformed education for over 7,000 students at Hazara Public School & College</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="text-gray-700">Pioneer in implementing Greed-Free Quality Education model</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="text-gray-700">Global advocate for accessible and equitable education</p>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="grid grid-cols-3 gap-8 py-8">
                    <div>
                        <div class="text-3xl font-bold text-blue-600">
                            <span id="experienceCount" data-target="10">10</span>+
                        </div>
                        <div class="text-sm text-gray-600">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600">
                            <span id="studentsCount" data-target="7">10</span>K+
                        </div>
                        <div class="text-sm text-gray-600">Students Impacted</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600">
                            <span id="publicationsCount" data-target="100">7</span>+
                        </div>
                        <div class="text-sm text-gray-600">Publications</div>
                    </div>
                </div>
                <!-- CTA Button -->
                <button class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg 
                             hover:bg-blue-700 transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl" sr>
                    Learn More About Our Founder
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </div>

            <!-- Right Content - Founder Image -->
            <div class="lg:w-1/2 relative">
                <img src="../images/pic 1.jpeg" alt="Dr. Waqas A. Khan" class="rounded-lg shadow-lg animate-fadeInRight">
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            </div>
        </div>
    </div>
</div>



<!-- footer -->















<!-- Add these animations to your existing style section -->
<style>
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.8s ease-out forwards;
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
    
<!-- component -->
<?php include 'footer.php' ?>