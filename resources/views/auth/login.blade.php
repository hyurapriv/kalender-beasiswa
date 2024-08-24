<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css');
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-blue-500">Welcome to Scholar Verse</h2>
            <p class="text-gray-600">Please sign in to your account</p>
        </div>
        
        <!-- Login Form -->
        <form id="loginForm" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 block w-full rounded-md border-gray-600 border shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 block w-full rounded-md border-gray-600 border shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Sign In</button>
            <div class="flex items-center justify-between gap-4">
                <button type="submit" class="w-full flex justify-center items-center gap-2 bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"><img src={{ asset('assets/img/icons/google.svg') }} alt="" class="h-5 w-5">Google</button>
                <button type="submit" class="w-full flex justify-center items-center gap-2 bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"><img src={{ asset('assets/img/icons/facebook.svg') }} alt="" class="h-5 w-5">Facebook</button>
            </div>
        </form>
        <div class="mt-6 text-center">
            <a href={{ route('register') }} id="toggleForm" class="text-blue-500 hover:underline">Don't have an account? Register</a>
        </div>
    </div>
</body>
</html>