<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Leave Management System</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center mb-6">Register</h2>

        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name"
                    class="w-full p-3 border rounded-lg @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full p-3 border rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full p-3 border rounded-lg @error('password') border-red-500 @enderror" required>
                @error('password')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full p-3 border rounded-lg" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-3 rounded-lg hover:bg-blue-600">
                Register
            </button>

            <p class="mt-4 text-center">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
            </p>
        </form>
    </div>

</body>

</html>
