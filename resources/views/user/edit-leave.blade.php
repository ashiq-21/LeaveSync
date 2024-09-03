@extends('user.layout')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Edit Leave</h1>

    <form action="{{ route('leave.update', $leave->id) }}" method="POST" class="max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="type" class="block text-gray-700 mb-1">Leave Type</label>
            <input type="text" id="type" name="type"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('type') border-red-500 @enderror"
                value="{{ old('type', $leave->type) }}" required>
            @error('type')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="start_date" class="block text-gray-700 mb-1">Start Date</label>
            <input type="date" id="start_date" name="start_date"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('start_date') border-red-500 @enderror"
                value="{{ old('start_date', $leave->start_date) }}" required>
            @error('start_date')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="end_date" class="block text-gray-700 mb-1">End Date</label>
            <input type="date" id="end_date" name="end_date"
                class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('end_date') border-red-500 @enderror"
                value="{{ old('end_date', $leave->end_date) }}" required>
            @error('end_date')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded">
            Update Leave
        </button>
    </form>
@endsection
