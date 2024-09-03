<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Leave Management System</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-6">Login</h2>

        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full p-3 border rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full p-3 border rounded-lg @error('password') border-red-500 @enderror" required>
                @error('password')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-3 rounded-lg hover:bg-blue-600">
                Login
            </button>

            <p class="mt-4 text-center">
                Don't have an account? <a href="{{ route('register') }}"
                    class="text-blue-500 hover:underline">Register</a>
            </p>
        </form>
    </div>

</body>

</html>
