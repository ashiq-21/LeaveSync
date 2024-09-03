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
            <a href="/">
                <div class="text-white font-bold text-xl">
                    LeaveSync
                </div>
            </a>
            <div>
                <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Welcome to LeaveSync</h1>
            <p class="text-xl mb-6">Manage your leaves efficiently with our intuitive system.</p>
            <a href="{{ route('register') }}"
                class="bg-white text-blue-600 font-bold py-3 px-6 rounded shadow-lg hover:bg-gray-100">
                Get Started
            </a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Leave Requests</h3>
                    <p>Submit and track your leave requests seamlessly.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
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
