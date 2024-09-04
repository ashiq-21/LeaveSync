<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layout')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Pending Leaves -->
        <div class="bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-blue-600 mb-6">Pending Leaves</h2>
            <p class="text-gray-600 text-lg mb-8">Number of Pending Leaves: <span
                    class="font-semibold">{{ $data['pendingLeavesCount'] }}</span></p>
            <a href="{{ route('admin.pending-leaves') }}"
                class="inline-block bg-blue-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-blue-700">
                View Details
            </a>
        </div>

        <!-- Approved Leaves -->
        <div class="bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-green-600 mb-6">Approved Leaves</h2>
            <p class="text-gray-600 text-lg mb-8">Number of Approved Leaves: <span
                    class="font-semibold">{{ $data['approvedLeavesCount'] }}</span></p>
            <a href="{{ route('admin.approved-leaves') }}"
                class="inline-block bg-green-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-green-700">
                View Details
            </a>
        </div>

        <!-- Denied Leaves -->
        <div class="bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-red-600 mb-6">Denied Leaves</h2>
            <p class="text-gray-600 text-lg mb-8">Number of Denied Leaves: <span
                    class="font-semibold">{{ $data['deniedLeavesCount'] }}</span></p>
            <a href="{{ route('admin.denied-leaves') }}"
                class="inline-block bg-red-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-red-700">
                View Details
            </a>
        </div>

        <!-- Monthly Leave Report -->
        <div class="bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">

            <h2 class="text-2xl font-bold text-purple-600 mb-6">Monthly Report</h2>
            <p class="text-gray-600 text-lg mb-8">Leaves This Month: <span
                    class="font-semibold">{{ $data['monthlyLeavesCount'] }}</span></p>
            <a href="{{ route('admin.monthly-report') }}"
                class="inline-block bg-purple-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-purple-700">
                View Monthly Report
            </a>
        </div>
    </div>
@endsection
