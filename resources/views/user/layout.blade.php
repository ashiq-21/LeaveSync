<!-- resources/views/layouts/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')Leave Management System</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}">
                <div class="text-white font-bold text-xl">
                    LeaveSync
                </div>
            </a>
            <div>
                <a href="{{ route('user-dashboard') }}" class="text-white mr-4">Dashboard</a>
                <a href="{{ route('leave.create') }}" class="text-white mr-4">Create Leave</a>
                <a href="{{ route('logout') }}" class="text-white bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="flex-grow">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} LeaveSync. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
