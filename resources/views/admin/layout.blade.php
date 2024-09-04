<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}">
                <div class="text-white font-bold text-xl">
                    LeaveSync
                </div>
            </a>
            <nav>
                <a href="{{ route('admin-dashboard') }}" class="ml-4 hover:text-gray-200">Admin Dashboard</a>
                <a href="{{ route('admin.pending-leaves') }}" class="ml-4 hover:text-gray-200">Pending Leaves</a>
                <a href="{{ route('admin.approved-leaves') }}" class="ml-4 hover:text-gray-200">Approved Leaves</a>
                <a href="{{ route('admin.denied-leaves') }}" class="ml-4 hover:text-gray-200">Denied
                    Leaves</a>
                <a href="{{ route('admin.monthly-report') }}" class="ml-4 hover:text-gray-200">Monthly Report</a>
                <a href="{{ route('logout') }}" class="text-white bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">
                    Logout
                </a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} LeaveSync. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
