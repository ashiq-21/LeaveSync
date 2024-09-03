@extends('user.layout')

@section('title', 'User Dashboard | ')

@section('content')
    <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0 md:space-x-6">
        <!-- Create Leave -->
        <div class="flex-1 bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-blue-600 mb-6">Create Leave</h2>
            <p class="text-gray-600 text-lg mb-8">Submit a new leave request.</p>
            <a href="{{ route('leave.create') }}"
                class="inline-block bg-blue-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-blue-700">
                Create Leave
            </a>
        </div>

        <!-- Your Leaves -->
        <div class="flex-1 bg-white shadow-lg rounded-lg p-8 transition-transform transform hover:scale-105">
            <h2 class="text-2xl font-bold text-green-600 mb-6">Your Leaves</h2>
            <p class="text-gray-600 text-lg mb-8">View and manage your leave requests.</p>
            <a href="{{ route('user.leaves') }}"
                class="inline-block bg-green-600 text-white text-sm px-6 py-3 rounded-full transition-colors hover:bg-green-700">
                View Your Leaves
            </a>
        </div>
    </div>
@endsection
