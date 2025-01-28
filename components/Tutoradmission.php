<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutor Admission Form - Hazara Academy</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-5xl w-full grid grid-cols-1 lg:grid-cols-2">
      <!-- Left Side: Form -->
      <div class="p-10 flex flex-col justify-center">
          <div id="form-pages">
              <!-- Page 1: Personal Information -->
              <div id="page1" class="form-page">
                  <h1 class="text-2xl font-bold text-gray-800 mb-6">Personal Information</h1>
                  <form id="step1">
                      <div class="mb-4">
                          <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
                          <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your full name" required>
                      </div>
                      <div class="mb-4">
                          <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                          <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your email" required>
                      </div>
                      <div class="mb-4">
                          <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number *</label>
                          <input type="tel" id="contact" name="contact" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your phone number" required>
                      </div>
                      <button type="button" onclick="nextPage()" class="w-full bg-blue-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                          Next
                      </button>
                  </form>
              </div>

              <!-- Page 2: Qualifications -->
              <div id="page2" class="form-page hidden">
                  <h1 class="text-2xl font-bold text-gray-800 mb-6">Qualifications</h1>
                  <form id="step2">
                      <div class="mb-4">
                          <label for="qualification" class="block text-sm font-medium text-gray-700">Highest Qualification *</label>
                          <input type="text" id="qualification" name="qualification" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g., Master's in Education" required>
                      </div>
                      <div class="mb-4">
                          <label for="experience" class="block text-sm font-medium text-gray-700">Years of Teaching Experience *</label>
                          <input type="number" id="experience" name="experience" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g., 5" required>
                      </div>
                      <div class="mb-4">
                          <label for="certifications" class="block text-sm font-medium text-gray-700">Certifications (if any)</label>
                          <input type="text" id="certifications" name="certifications" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g., TEFL, TESOL">
                      </div>
                      <div class="flex justify-between">
                          <button type="button" onclick="prevPage()" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-400">
                              Back
                          </button>
                          <button type="button" onclick="nextPage()" class="px-6 py-3 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600">
                              Next
                          </button>
                      </div>
                  </form>
              </div>

              <!-- Page 3: Subjects and Availability -->
              <div id="page3" class="form-page hidden">
                  <h1 class="text-2xl font-bold text-gray-800 mb-6">Subjects and Availability</h1>
                  <form id="step3">
                      <div class="mb-4">
                          <label for="subjects" class="block text-sm font-medium text-gray-700">Subjects You Can Teach *</label>
                          <textarea id="subjects" name="subjects" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="List subjects separated by commas" required></textarea>
                      </div>
                      <div class="mb-4">
                        <label for="availability" class="block text-sm font-medium text-gray-700">Days of Availability *</label>
                        <div class="mt-2 grid grid-cols-2 sm:grid-cols-3 gap-2">
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="monday" 
                                    name="availability" 
                                    value="Monday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="monday" class="ml-2 text-sm text-gray-700">Monday</label>
                            </div>
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="tuesday" 
                                    name="availability" 
                                    value="Tuesday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="tuesday" class="ml-2 text-sm text-gray-700">Tuesday</label>
                            </div>
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="wednesday" 
                                    name="availability" 
                                    value="Wednesday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="wednesday" class="ml-2 text-sm text-gray-700">Wednesday</label>
                            </div>
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="thursday" 
                                    name="availability" 
                                    value="Thursday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="thursday" class="ml-2 text-sm text-gray-700">Thursday</label>
                            </div>
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="friday" 
                                    name="availability" 
                                    value="Friday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="friday" class="ml-2 text-sm text-gray-700">Friday</label>
                            </div>
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="saturday" 
                                    name="availability" 
                                    value="Saturday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="saturday" class="ml-2 text-sm text-gray-700">Saturday</label>
                            </div>
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="sunday" 
                                    name="availability" 
                                    value="Sunday" 
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
                                />
                                <label for="sunday" class="ml-2 text-sm text-gray-700">Sunday</label>
                            </div>
                        </div>
                    </div>
                    
                      <div class="flex justify-between">
                          <button type="button" onclick="prevPage()" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-400">
                              Back
                          </button>
                          <button type="submit" class="px-6 py-3 bg-green-500 text-white rounded-lg font-medium hover:bg-green-600">
                              Submit
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Right Side: Picture -->
      <div class="bg-blue-100 text-white flex items-center justify-center relative" style="background-image: url('../images/login\ .jpg'); background-size: cover; background-position: center;">
          
      </div>
  </div>

  <script>
      let currentPage = 1;

      function showPage(pageNumber) {
          const pages = document.querySelectorAll('.form-page');
          pages.forEach((page, index) => {
              page.classList.toggle('hidden', index + 1 !== pageNumber);
          });
          currentPage = pageNumber;
      }

      function nextPage() {
          showPage(currentPage + 1);
      }

      function prevPage() {
          showPage(currentPage - 1);
      }

      // Initialize the first page
      showPage(1);
  </script>
</body>


</html>
