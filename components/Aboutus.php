<?php include 'nav.php'  ?>

<!-- ------------- -->
<section class="py-28 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
      <!-- Title and Text Section -->
      <div class="flex flex-col lg:flex-row items-center lg:items-start">
        <div class="lg:w-1/2">
          <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-6">
            Our Journey to Redefine Education and Empower Students
          </h2>
          <p class="text-lg text-gray-600 mb-4">
            Hazara Academy, founded by Dr. Waqas A. Khan, is an innovative online platform committed to delivering Greed-Free Quality Education to learners worldwide. We believe education is not a luxury but a basic right, and we are on a mission to remove financial barriers to learning.
            At Hazara Academy, we are on a mission to break down barriers in education. Founded with the vision to deliver 
            <span class="font-bold text-blue-500">Greed-Free Quality Education</span>, our platform connects passionate tutors and eager learners globally.
          </p>
          <p class="text-lg text-gray-600 mb-6">
            Through innovative technology and a community-driven approach, we aim to make learning accessible, personalized, and impactful for every individual, regardless of their background.
          </p>
        </div>
        <!-- Image Section -->
        <div class="lg:w-1/2 flex justify-center py-24">
          <div class="relative">
            <img src="../images/pic 2.jpeg" alt="Team Collaboration" class="rounded-lg shadow-lg">
            <img src="../images/pic 9.jpeg" alt="Tutoring Session" style="width: 190px; height: 122px;" class="absolute -top-11 -right-10 rounded-lg shadow-lg border-2 border-white">

          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Mission Section -->
  <section class="py-20 bg-blue-900 text-white relative overflow-hidden">
    <!-- Background Decorative Lines -->
    <div class="absolute inset-0">
        <!-- Blue Lines -->
        <div class="h-full w-full">
            <div class="absolute top-1/3 left-0 w-full h-1 bg-blue-700 opacity-20"></div>
            <div class="absolute top-1/2 left-0 w-full h-1 bg-blue-700 opacity-20"></div>
            <div class="absolute bottom-1/4 left-0 w-full h-1 bg-blue-700 opacity-20"></div>
        </div>
    </div>

    <div class="container mx-auto px-6 lg:px-20 relative flex flex-col lg:flex-row items-center">
        <!-- Text Content -->
        <div class="lg:w-1/2">
            <h3 class="text-3xl font-bold mb-4">Our Mission</h3>
            <div class="h-1 w-16 bg-orange-500 mb-6"></div> <!-- Orange Line -->
            <p class="text-lg leading-relaxed">
                To create a global community where education is a fundamental right, not a privilege. Hazara Academy envisions a world where every learner has access to exceptional educational resources, fostering equality, opportunity, and progress for all. 
            </p>
        </div>

        <!-- Image Frame -->
        <div class="lg:w-1/2 mt-8 lg:mt-0 flex justify-center">
            <div class="relative rounded-lg overflow-hidden shadow-lg border-4 border-blue-900 bg-white">
                <img src="../images/pic 16.jpeg" 
                     alt="Healthgrades Image" 
                     class="w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>



  
  <!-- Vision Section -->
  <section class=" bg-gray-50 py-20" >
    <div class="container mx-auto px-6 lg:px-20">
      <div class="flex flex-col lg:flex-row items-center lg:items-start">
        <div class="lg:w-1/2">
          <img src="../images/pic 3.jpeg" alt="Visionary Leadership" class="rounded-lg shadow-lg">
        </div>
        <div class="lg:w-1/2 lg:pl-12 mt-8 lg:mt-0">
          <h3 class="text-3xl font-bold text-gray-800 mb-6">Our Vision</h3>
          <p class="text-lg text-gray-600 mb-4">
            At Hazara Academy, we envision a world where every learner has access to high-quality education. Our platform serves as a bridge to close gaps in knowledge and create opportunities for all.
          </p>
          <p class="text-lg text-gray-600">
            By fostering a culture of learning and collaboration, we aim to inspire individuals to achieve their potential and contribute meaningfully to society.
          </p>
        </div>
      </div>
    </div>
  </section>
  

  


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

<?php  include 'footer.php' ?>