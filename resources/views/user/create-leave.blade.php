@extends('user.layout')

@section('content')
    <h1 class="text-3xl font-bold mb-8 text-center">Create Leave Request</h1>

    <form action="{{ route('leave.store') }}" method="POST" class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
        @csrf

        <div class="mb-6">
            <label for="type" class="block text-gray-700 mb-2 font-semibold">Leave Type</label>
            <input type="text" id="type" name="type"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('type') border-red-500 @enderror"
                value="{{ old('type') }}" required placeholder="Enter leave type (e.g., Vacation)">
            @error('type')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="start_date" class="block text-gray-700 mb-2 font-semibold">Start Date</label>
            <input type="date" id="start_date" name="start_date"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('start_date') border-red-500 @enderror"
                value="{{ old('start_date') }}" required>
            @error('start_date')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="end_date" class="block text-gray-700 mb-2 font-semibold">End Date</label>
            <input type="date" id="end_date" name="end_date"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('end_date') border-red-500 @enderror"
                value="{{ old('end_date') }}" required>
            @error('end_date')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 rounded-lg transition duration-200">
            Submit Leave Request
        </button>
    </form>
@endsection
