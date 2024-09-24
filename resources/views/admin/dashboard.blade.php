@extends('admin.layout')

@section('title', 'Admin Dashboard | ')

@section('content')
    <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0 md:space-x-6">
        <!-- Manage Leaves -->
        <div class="flex-1 bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-blue-600 mb-6">Manage Leaves</h2>
            <p class="text-gray-600 text-lg mb-4">View, approve, or deny leave requests.</p>
            <a href="{{ route('admin.manage-leaves') }}"
                class="inline-block bg-blue-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-blue-700">
                Manage Leaves
            </a>
        </div>

        <!-- Manage Users -->
        <div class="flex-1 bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-green-600 mb-6">Manage Employees</h2>
            <p class="text-gray-600 text-lg mb-4">View and manage non-admin employees.</p>
            <a href="{{ route('admin.manage-users') }}"
                class="inline-block bg-green-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-green-700">
                Manage Users
            </a>
        </div>

        <!-- Monthly Leave Report -->
        <div class="flex-1 bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-purple-600 mb-6">Monthly Report</h2>
            <p class="text-gray-600 text-lg mb-4">Get insights into monthly leave patterns.</p>
            <a href="{{ route('admin.monthly-report') }}"
                class="inline-block bg-purple-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-purple-700">
                View Monthly Report
            </a>
        </div>
    </div>
@endsection
