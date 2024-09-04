@extends('admin.layout')

@section('content')
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-blue-600 mb-6">Monthly Leave Report</h2>

        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-600 uppercase">
                        Employee Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-sm font-semibold text-gray-600 uppercase">
                        Leaves Taken</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($monthlyLeaveData as $user)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{ $user->leaves->count() }}</td>
                    </tr>
                @endforeach
                <div class="mt-4">
                    {{ $monthlyLeaveData->links() }}
                </div>
            </tbody>
        </table>
    </div>
@endsection
