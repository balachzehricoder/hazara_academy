<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
  <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-5xl w-full grid grid-cols-1 lg:grid-cols-2">
    <!-- Left Section -->
    <div class="p-6 sm:p-10 flex flex-col justify-center">
      <div class="text-center mb-8">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Login</h1>
      </div>

      <form>
        <div class="flex items-center mb-4">
          <div class="flex-grow h-px bg-gray-300"></div>
          <span class="px-2 text-sm text-gray-500">or</span>
          <div class="flex-grow h-px bg-gray-300"></div>
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input 
            type="email" 
            id="email" 
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="mail@website.com"
            required
          />
        </div>

        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input 
            type="password" 
            id="password" 
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            placeholder="Min. 8 characters"
            required
          />
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 space-y-2 sm:space-y-0">
          <div class="flex items-center">
            <input 
              id="remember" 
              name="remember" 
              type="checkbox" 
              class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded"
            />
            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
          </div>
          <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
        </div>

        <button 
          type="submit" 
          class="w-full bg-blue-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
          Login
        </button>

        <p class="text-center text-sm text-gray-500 mt-4">
          Not registered yet? <a href="Select.html" class="text-blue-500 hover:underline">Create an Account</a>
        </p>
      </form>
    </div>

    <!-- Right Section -->
    <div class="hidden lg:flex bg-blue-600 text-white flex-col justify-center items-center p-10 relative" style="background-image: url('../images/login\ .jpg'); background-size: cover; background-position: center;">
      <!-- Content for the right section can be added here if needed -->
    </div>
  </div>
</body>
</html>