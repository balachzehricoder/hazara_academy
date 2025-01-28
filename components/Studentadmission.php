<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Admission Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <style>
    @media (max-width: 640px) {
      .form-container {
        padding: 1rem;
      }
    }
  </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
  <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-5xl w-full grid grid-cols-1 lg:grid-cols-2">
      <!-- Left Section: Form -->
      <div class="p-6 sm:p-10 flex flex-col justify-center form-container">
          <div id="form-pages">
              <!-- Page 1: Personal Information -->
              <div id="page1" class="form-page">
                  <h1 class="text-2xl font-bold text-gray-800 mb-6">Personal Information</h1>
                  <form>
                      <!-- Name -->
                      <div class="mb-4">
                          <label for="name" class="block text-sm font-medium text-gray-700">Full Name *</label>
                          <input 
                              type="text" 
                              id="name" 
                              name="name" 
                              class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="Enter your full name"
                              required
                          />
                      </div>
                      <!-- Contact Number -->
                      <div class="mb-4">
                          <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number *</label>
                          <input 
                              type="tel" 
                              id="contact" 
                              name="contact" 
                              class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="Enter your phone number"
                              required
                          />
                      </div>
                      <!-- Email -->
                      <div class="mb-4">
                          <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                          <input 
                              type="email" 
                              id="email" 
                              name="email" 
                              class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="Enter your email"
                              required
                          />
                      </div>

                      <div class="mt-6 flex justify-end">
                          <button 
                              type="button" 
                              onclick="nextPage()" 
                              class="px-6 py-3 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 w-full sm:w-auto"
                          >
                              Next
                          </button>
                      </div>
                  </form>
              </div>

              <!-- Page 2: Academic Information -->
              <div id="page2" class="form-page hidden">
                  <h1 class="text-2xl font-bold text-gray-800 mb-6">Academic Information</h1>
                  <form>
                      <!-- Grade -->
                      <div class="mb-4">
                          <label for="grade" class="block text-sm font-medium text-gray-700">Grade *</label>
                          <select 
                              id="grade" 
                              name="grade" 
                              class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              required
                          >
                              <option value="">Select your grade</option>
                              <option value="Kindergarten">Kindergarten</option>
                              <option value="1">Grade 1</option>
                              <option value="2">Grade 2</option>
                              <option value="3">Grade 3</option>
                              <option value="4">Grade 4</option>
                              <option value="5">Grade 5</option>
                              <option value="6">Grade 6</option>
                              <option value="7">Grade 7</option>
                              <option value="8">Grade 8</option>
                              <option value="9">Grade 9</option>
                              <option value="10">Grade 10</option>
                              <option value="11">Grade 11</option>
                              <option value="12">Grade 12</option>
                          </select>
                      </div>

                      <!-- Subjects of Interest -->
                      <div class="mb-4">
                          <label for="subjects" class="block text-sm font-medium text-gray-700">Subjects of Interest *</label>
                          <textarea 
                              id="subjects" 
                              name="subjects" 
                              class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="List subjects separated by commas"
                              required
                          ></textarea>
                      </div>

                      <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-4">
                          <button 
                              type="button" 
                              onclick="prevPage()" 
                              class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-400 w-full sm:w-auto"
                          >
                              Back
                          </button>
                          <button 
                              type="button" 
                              onclick="nextPage()" 
                              class="px-6 py-3 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 w-full sm:w-auto"
                          >
                              Next
                          </button>
                      </div>
                  </form>
              </div>

              <!-- Page 3: Availability -->
              <div id="page3" class="form-page hidden">
                  <h1 class="text-2xl font-bold text-gray-800 mb-6">Availability</h1>
                  <form>
                      <!-- Preferred Time Slots -->
                      <div class="mb-4">
                          <label for="timeSlots" class="block text-sm font-medium text-gray-700">Preferred Time Slots *</label>
                          <textarea 
                              id="timeSlots" 
                              name="timeSlots" 
                              class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="e.g., 9 AM - 11 AM, 2 PM - 4 PM"
                              required
                          ></textarea>
                      </div>

                      <!-- Available Days -->
                      <div class="mb-4">
                          <label for="days" class="block text-sm font-medium text-gray-700">Available Days *</label>
                          <div class="mt-2 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
                              <div class="flex items-center">
                                  <input type="checkbox" id="monday" name="days" value="Monday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="monday" class="ml-2 text-sm text-gray-700">Monday</label>
                              </div>
                              <div class="flex items-center">
                                  <input type="checkbox" id="tuesday" name="days" value="Tuesday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="tuesday" class="ml-2 text-sm text-gray-700">Tuesday</label>
                              </div>
                              <div class="flex items-center">
                                  <input type="checkbox" id="wednesday" name="days" value="Wednesday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="wednesday" class="ml-2 text-sm text-gray-700">Wednesday</label>
                              </div>
                              <div class="flex items-center">
                                  <input type="checkbox" id="thursday" name="days" value="Thursday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="thursday" class="ml-2 text-sm text-gray-700">Thursday</label>
                              </div>
                              <div class="flex items-center">
                                  <input type="checkbox" id="friday" name="days" value="Friday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="friday" class="ml-2 text-sm text-gray-700">Friday</label>
                              </div>
                              <div class="flex items-center">
                                  <input type="checkbox" id="saturday" name="days" value="Saturday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="saturday" class="ml-2 text-sm text-gray-700">Saturday</label>
                              </div>
                              <div class="flex items-center">
                                  <input type="checkbox" id="sunday" name="days" value="Sunday" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                                  <label for="sunday" class="ml-2 text-sm text-gray-700">Sunday</label>
                              </div>
                          </div>
                      </div>

                      <div class="flex flex-col sm:flex-row justify-between space-y-4 sm:space-y-0 sm:space-x-4">
                          <button 
                              type="button" 
                              onclick="prevPage()" 
                              class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-400 w-full sm:w-auto"
                          >
                              Back
                          </button>
                          <button 
                              type="submit" 
                              class="px-6 py-3 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 w-full sm:w-auto"
                          >
                              Submit
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Right Section: Visual -->
      <div class="bg-blue-600 text-white flex flex-col justify-center items-center p-10 relative hidden lg:flex" style="background-image: url('../images/login\ .jpg'); background-size: cover; background-position: center;">
         
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