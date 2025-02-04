<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50 py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-[350px,1fr]">
            <!-- Sidebar -->
            <div class="space-y-6">
                <a href="" class="inline-flex items-center text-teal-500 hover:text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    Back to Overview
                </a>

                <div class="space-y-4">
                    <h2 class="text-lg font-medium text-gray-900">You are completing:</h2>
                    <div class="space-y-2">
                        <div class="font-medium text-gray-800">Student Admission Form</div>
                        <div class="inline-flex items-center rounded-full bg-amber-50 px-3 py-1 text-sm text-amber-800">
                            <svg viewBox="0 0 24 24" fill="none" class="mr-1.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg">
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
            <div class="rounded-lg bg-white p-6 shadow-sm">
                <form id="admissionForm" class="space-y-6">
                    <!-- Personal Information -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Personal Information</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    required
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                />
                            </div>

                            <div>
                                <label for="contact" class="block text-sm font-medium text-gray-700">
                                    Contact Number <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="tel"
                                    id="contact"
                                    name="contact"
                                    required
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                />
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    required
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                />
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Password <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    required
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                />
                            </div>

                            <div>
                                <label for="confirmPassword" class="block text-sm font-medium text-gray-700">
                                    Confirm Password <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="password"
                                    id="confirmPassword"
                                    name="confirmPassword"
                                    required
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                />
                                <p id="passwordError" class="mt-1 text-sm text-red-600 hidden">Passwords do not match</p>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Information -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Academic Information</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="grade" class="block text-sm font-medium text-gray-700">
                                    Grade <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <select
                                        id="grade"
                                        name="grade"
                                        required
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 pr-8 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500 appearance-none"
                                    >
                                        <option value="">Select your grade</option>
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
                                    <svg class="pointer-events-none absolute right-3 top-[50%] h-4 w-4 -translate-y-[50%] text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>

                            <div>
                                <label for="subjects" class="block text-sm font-medium text-gray-700">
                                    Subjects of Interest <span class="text-red-500">*</span>
                                </label>
                                <textarea
                                    id="subjects"
                                    name="subjects"
                                    required
                                    rows="3"
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                    placeholder="List subjects separated by commas"
                                ></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Availability -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">Availability</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="timeSlots" class="block text-sm font-medium text-gray-700">
                                    Preferred Time Slots <span class="text-red-500">*</span>
                                </label>
                                <textarea
                                    id="timeSlots"
                                    name="timeSlots"
                                    required
                                    rows="2"
                                    class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-teal-500 focus:outline-none focus:ring-1 focus:ring-teal-500"
                                    placeholder="e.g., 9 AM - 11 AM, 2 PM - 4 PM"
                                ></textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Available Days <span class="text-red-500">*</span>
                                </label>
                                <div class="mt-2 grid grid-cols-2 gap-2 sm:grid-cols-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Monday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Monday</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Tuesday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Tuesday</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Wednesday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Wednesday</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Thursday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Thursday</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Friday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Friday</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Saturday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Saturday</span>
                                    </label>
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" name="days" value="Sunday" class="h-4 w-4 rounded border-gray-300 text-teal-500 focus:ring-teal-500">
                                        <span class="text-sm text-gray-700">Sunday</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-6">
                        <button
                            type="submit"
                            class="rounded-md bg-teal-500 px-4 py-2 text-sm font-medium text-white hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2"
                        >
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
            const passwordError = document.getElementById('passwordError');

            if (password !== confirmPassword) {
                passwordError.classList.remove('hidden');
                return;
            }
            
            passwordError.classList.add('hidden');
            // Handle form submission
            console.log('Form submitted successfully');
        });

        // Update password error message in real-time
        document.getElementById('confirmPassword').addEventListener('input', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = e.target.value;
            const passwordError = document.getElementById('passwordError');

            if (password !== confirmPassword) {
                passwordError.classList.remove('hidden');
            } else {
                passwordError.classList.add('hidden');
            }
        });
    </script>
</body>
</html>