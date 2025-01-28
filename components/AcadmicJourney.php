    <?php include 'nav.php' ?>
    
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

    
    <div class="relative max-w-full overflow-hidden bg-gray-100 py-24">
        <!-- Heading -->
        <div class="text-center mb-8">
          <h1 class="text-4xl font-bold text-gray-800 mb-2">Nepal</h1>
          <p class="text-lg text-gray-600">A Visual Journey Through the Land of Mountains and Culture</p>
          <div class="w-16 h-1 bg-blue-500 mx-auto mt-4"></div>
        </div>
      
        <!-- Slider Wrapper -->
        <div id="window-slider" class="flex transition-transform duration-500 ease-in-out">
            <!-- Slide 1 -->
            <a href="https://example.com/slide1" target="_blank" class="flex-shrink-0 w-1/3 p-2">
              <div class="h-64 rounded-3xl shadow-lg overflow-hidden clip-curve">
                <img src="../images/pic 16.jpeg" alt="Nepal 1" class="w-full h-full object-cover">
              </div>
            </a>
            <!-- Slide 2 -->
            <a href="https://example.com/slide2" target="_blank" class="flex-shrink-0 w-1/3 p-2">
              <div class="h-64 rounded-3xl shadow-lg overflow-hidden clip-curve">
                <img src="../images/pic 17.jpeg" alt="Nepal 2" class="w-full h-full object-cover">
              </div>
            </a>
            <!-- Slide 3 -->
            <a href="https://example.com/slide3" target="_blank" class="flex-shrink-0 w-1/3 p-2">
              <div class="h-64 rounded-3xl shadow-lg overflow-hidden clip-curve">
                <img src="../images/pic 15.jpeg" alt="Nepal 3" class="w-full h-full object-cover">
              </div>
            </a>
            <!-- Slide 4 -->
            <a href="https://example.com/slide4" target="_blank" class="flex-shrink-0 w-1/3 p-2">
              <div class="h-64 rounded-3xl shadow-lg overflow-hidden clip-curve">
                <img src="../images/pic 16.jpeg" alt="Nepal 4" class="w-full h-full object-cover">
              </div>
            </a>
            <!-- Slide 5 -->
            <a href="https://example.com/slide5" target="_blank" class="flex-shrink-0 w-1/3 p-2">
              <div class="h-64 rounded-3xl shadow-lg overflow-hidden clip-curve">
                <img src="../images/pic 17.jpeg" alt="Nepal 5" class="w-full h-full object-cover">
              </div>
            </a>
          </div>
          
          <style>
            /* Curve styling for images using clip-path */
            .clip-curve {
              clip-path: polygon(0 10%, 100% 0%, 100% 90%, 0% 100%);
            }
          </style>
          
        <!-- Navigation Buttons -->
        <button id="window-prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 rounded-full hover:bg-gray-900">
          &lt;
        </button>
        <button id="window-nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white px-4 py-2 rounded-full hover:bg-gray-900">
          &gt;
        </button>
      </div>
    
   

      <script src="../js/main.js">

      </script>
      
      
      <!-- --------------------------------- -->

      <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center  text-gray-800">Public Education campaign</h1>
            <p class="text-lg text-gray-600 text-center">A Visual Journey of Campaign</p>
            <div class="w-16 h-1 bg-blue-500 mx-auto mt-4 text-center"></div>
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-10">
                <!-- Single Image -->
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 11.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 12.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 13.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 11.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
               
            </div>
    
            <!-- Footer Text -->
          
        </div>
    </section>


    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center  text-gray-800">Best Academy Award by South East Asian Ministers Conference Veitnam</h1>
            <p class="text-lg text-gray-600 text-center">A Visual Journey of South East Asian Ministers Conference Veitnam</p>
            <div class="w-16 h-1 bg-blue-500 mx-auto mt-4 text-center"></div>
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-11">
                <!-- Single Image -->
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 8.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 4.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 6.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 11.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>

                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 9.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>

                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 10.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
               
            </div>
    
            <!-- Footer Text -->
          
        </div>
    </section>
      
      


    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center  text-gray-800">Best Academy Award by Miniter of Education Sindh Dr. Hameeda Khurro</h1>
            <p class="text-lg text-gray-600 text-center">A Visual Journey of Award by Minister of Education Sindh  </p>
            <div class="w-16 h-1 bg-blue-500 mx-auto mt-4 text-center"></div>
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-11">
                <!-- Single Image -->
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 7.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
               
               
            </div>
    
            <!-- Footer Text -->
          
        </div>
    </section>




    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-center  text-gray-800">Other Highlights</h1>
            <p class="text-lg text-gray-600 text-center">A visual Journey of Success</p>
            <div class="w-16 h-1 bg-blue-500 mx-auto mt-4 text-center"></div>
            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-11">
                <!-- Single Image -->
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 40.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>

                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 33.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>


                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 31.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>

                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 30.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>

                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 29.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 39.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div><div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 28.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 27.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 26.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 37.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 17.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>

                <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300">
                    <img src="../images/pic 7.jpeg" alt="Gallery Image" class="w-full h-48 object-cover">
                </div>
                
               
               
            </div>
    
            <!-- Footer Text -->
          
        </div>
    </section>



    <?php include 'footer.php' ?>