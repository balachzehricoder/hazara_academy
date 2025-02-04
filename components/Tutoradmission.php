<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-[350px,1fr] gap-8">
            <!-- Sidebar -->
            <div class="space-y-6">
                <a href="index.php" class="inline-flex items-center text-teal-500 hover:text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Overview
                </a>

                <div class="space-y-4">
                    <h2 class="text-lg font-medium text-gray-900">You are completing:</h2>
                    <div class="space-y-2">
                        <div class="font-medium text-gray-800">Student Admission Form</div>
                        <div class="inline-flex items-center rounded-full bg-amber-50 px-3 py-1 text-sm text-amber-800">
                            <svg class="mr-1.5 h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 8v4l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            5-10 minutes
                        </div>
                    </div>
                </div>

                <p class="text-sm text-gray-600">
                    Please fill out all required information carefully. This will help us process your admission efficiently.
                </p>
            </div>

            <!-- Main Content -->
            <div class="space-y-8">
                <form id="admissionForm" class="space-y-8">
                    <!-- Personal Information -->
                    <div class="space-y-6">
                        <h1 class="text-2xl font-semibold text-gray-900">Personal Information</h1>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="fullName" class="block text-sm font-medium text-gray-700">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="fullName" name="fullName" required
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>

                            <div>
                                <label for="contactNumber" class="block text-sm font-medium text-gray-700">
                                    Contact Number <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="contactNumber" name="contactNumber" required
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Password <span class="text-red-500">*</span>
                                </label>
                                <input type="password" id="password" name="password" required
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>

                            <div>
                                <label for="confirmPassword" class="block text-sm font-medium text-gray-700">
                                    Confirm Password <span class="text-red-500">*</span>
                                </label>
                                <input type="password" id="confirmPassword" name="confirmPassword" required
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>
                        </div>
                    </div>

                    <!-- Qualifications -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-gray-900">Qualifications</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="highestQualification" class="block text-sm font-medium text-gray-700">
                                    Highest Qualification <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="highestQualification" name="highestQualification" required
                                    placeholder="e.g., Master's in Education"
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>

                            <div>
                                <label for="teachingExperience" class="block text-sm font-medium text-gray-700">
                                    Years of Teaching Experience <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="number" id="teachingExperience" name="teachingExperience" required
                                        placeholder="e.g., 5"
                                        class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                                        <button type="button" class="h-full px-2 text-gray-400 hover:text-gray-600">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="certifications" class="block text-sm font-medium text-gray-700">
                                    Certifications (if any)
                                </label>
                                <input type="text" id="certifications" name="certifications"
                                    placeholder="e.g., TEFL, TESOL"
                                    class="mt-1 block w-full rounded-md border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                            </div>
                        </div>
                    </div>

                   

                    <!-- Availability -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-gray-900">Availability</h2>
                        
                        <div>
                            <label for="timeSlots" class="block text-sm font-medium text-gray-700">
                                Subjects You Teach <span class="text-red-500">*</span>
                            </label>
                            <textarea id="timeSlots" name="timeSlots" required rows="2"
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                placeholder="Urdu,English,..."></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Available Days <span class="text-red-500">*</span>
                            </label>
                            <div class="mt-2 grid grid-cols-2 sm:grid-cols-4 gap-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Monday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Monday</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Tuesday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Tuesday</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Wednesday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Wednesday</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Thursday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Thursday</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Friday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Friday</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Saturday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Saturday</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="days" value="Sunday"
                                        class="h-4 w-4 rounded border-gray-300 text-teal-600 focus:ring-teal-500">
                                    <span class="ml-2 text-sm text-gray-700">Sunday</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-6">
                        <button type="submit"
                            class="rounded-md bg-teal-500 px-4 py-2 text-sm font-medium text-white hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('admissionForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }

            // Form submission logic here
            console.log('Form submitted successfully');
        });
    </script>
</body>
</html>