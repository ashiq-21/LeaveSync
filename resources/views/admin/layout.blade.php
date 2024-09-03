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
            <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            <nav>
                <a href="{{ route('admin-dashboard') }}" class="ml-4 hover:text-gray-200">Admin Dashboard</a>
                <a href="{{ route('admin.pending-leaves') }}" class="ml-4 hover:text-gray-200">Pending Leaves</a>
                <a href="{{ route('admin.approved-leaves') }}" class="ml-4 hover:text-gray-200">Approved Leaves</a>
                <a href="{{ route('admin.denied-leaves') }}" class="ml-4 hover:text-gray-200">Denied
                    Leaves</a>
                <a href="{{ route('logout') }}" class="ml-4 hover:text-gray-200">Logout</a>
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
