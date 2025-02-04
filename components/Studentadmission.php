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
  <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-5xl w-full p-6 sm:p-10 form-container">
      <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Student Admission Form</h1>
      
      <form onsubmit="return validateForm()">
        <!-- Personal Information -->
        <h2 class="text-lg font-semibold text-gray-700 mb-3">Personal Information</h2>

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name *</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your full name" required />
        </div>

        <!-- Contact Number -->
        <div class="mb-4">
            <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number *</label>
            <input type="tel" id="contact" name="contact" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your phone number" required />
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your email" required />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password *</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your password" required />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password *</label>
            <input type="password" id="confirm-password" name="confirm-password" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Confirm your password" required />
            <p id="password-error" class="text-red-500 text-xs mt-1 hidden">Passwords do not match</p>
        </div>

        <!-- Academic Information -->
        <h2 class="text-lg font-semibold text-gray-700 mt-6 mb-3">Academic Information</h2>

        <!-- Grade -->
        <div class="mb-4">
            <label for="grade" class="block text-sm font-medium text-gray-700">Grade *</label>
            <select id="grade" name="grade" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
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
            <textarea id="subjects" name="subjects" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="List subjects separated by commas" required></textarea>
        </div>

        <!-- Availability -->
        <h2 class="text-lg font-semibold text-gray-700 mt-6 mb-3">Availability</h2>

        <!-- Preferred Time Slots -->
        <div class="mb-4">
            <label for="timeSlots" class="block text-sm font-medium text-gray-700">Preferred Time Slots *</label>
            <textarea id="timeSlots" name="timeSlots" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g., 9 AM - 11 AM, 2 PM - 4 PM" required></textarea>
        </div>

        <!-- Available Days -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Available Days *</label>
            <div class="mt-2 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
                <label><input type="checkbox" name="days" value="Monday"> Monday</label>
                <label><input type="checkbox" name="days" value="Tuesday"> Tuesday</label>
                <label><input type="checkbox" name="days" value="Wednesday"> Wednesday</label>
                <label><input type="checkbox" name="days" value="Thursday"> Thursday</label>
                <label><input type="checkbox" name="days" value="Friday"> Friday</label>
                <label><input type="checkbox" name="days" value="Saturday"> Saturday</label>
                <label><input type="checkbox" name="days" value="Sunday"> Sunday</label>
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <button type="submit" class="px-6 py-3 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600">Submit</button>
        </div>
      </form>
  </div>

  <script>
      function validateForm() {
          let password = document.getElementById("password").value;
          let confirmPassword = document.getElementById("confirm-password").value;
          let errorMsg = document.getElementById("password-error");

          if (password !== confirmPassword) {
              errorMsg.classList.remove("hidden");
              return false;
          } else {
              errorMsg.classList.add("hidden");
              return true;
          }
      }
  </script>
</body>
</html>
