<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaveSync</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}">
                <div class="text-white font-bold text-xl">
                    LeaveSync
                </div>
            </a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">
                        Login
                    </a>
                @else
                    <a href="{{ route('logout') }}" class="text-white bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">
                        Logout
                    </a>
                @endguest
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">
                @guest
                    Welcome to LeaveSync
                @else
                    Welcome Back to LeaveSync
                @endguest
            </h1>
            <p class="text-xl mb-6">
                @guest
                    Manage your leaves efficiently with our intuitive system.
                @else
                    Ready to manage your leaves? Let's get started!
                @endguest
            </p>
            @guest
                <a href="{{ route('register') }}"
                    class="bg-white text-blue-600 font-bold py-3 px-6 rounded shadow-lg hover:bg-gray-100">
                    Get Started
                </a>
            @else
                <a href="{{ auth()->user()->is_admin == 1 ? route('admin-dashboard') : route('user-dashboard') }}"
                    class="text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded">
                    Dashboard
                </a>

            @endguest
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <!-- New Icon for Leave Requests -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600 mb-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 10c0 7-7 11-7 11s-7-4-7-11a7 7 0 0114 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l-3-3m0 0l3-3m-3 3h12" />
                    </svg>
                    <h3 class="text-xl font-bold mb-4">Leave Requests</h3>
                    <p>Submit and track your leave requests seamlessly.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <!-- Icon for Approval Workflow -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600 mb-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 11.5A5.5 5.5 0 1117 11.5a5.5 5.5 0 01-10 0zM12 15v2m0 4h.01" />
                    </svg>
                    <h3 class="text-xl font-bold mb-4">Approval Workflow</h3>
                    <p>Managers can approve or deny leave requests easily.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} LeaveSync. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
