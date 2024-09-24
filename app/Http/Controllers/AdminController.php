<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use App\Mail\LeaveStatusNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manageLeaves()
    {
        $data = [
            'pendingLeavesCount' => Leave::where('status', 'Pending')->count(),
            'approvedLeavesCount' => Leave::where('status', 'Approved')->count(),
            'deniedLeavesCount' => Leave::where('status', 'Denied')->count(),
        ];

        return view('admin.manage-leaves', compact('data'));
    }

    public function manageUsers()
    {
        $nonAdminUsers = User::where('is_admin', 0)->paginate(10);

        return view('admin.manage-users', compact('nonAdminUsers'));
    }

    public function pendingLeaves()
    {
        $leaves = Leave::where('status', 'Pending')->latest()->paginate(10); // Fetch all pending leave requests
        return view('admin.pending-leaves', compact('leaves'));
    }

    public function approveLeave($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->status = 'Approved';
        $leave->save();

        // Send email notification
        //undo the comments after setting your mail variables correctly in the env file
        // Mail::to($leave->user->email)->send(new LeaveStatusNotification($leave, $leave->user, 'Approved'));

        return redirect()->back()->with('success', 'Leave approved successfully!');
    }

    public function denyLeave($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->status = 'Denied';
        $leave->save();

        // Send email notification
        //undo the comments after setting your mail variables correctly in the env file
        // Mail::to($leave->user->email)->send(new LeaveStatusNotification($leave, $leave->user, 'Denied'));

        return redirect()->back()->with('success', 'Leave denied successfully!');
    }
    public function approvedLeaves()
    {
        $leaves = Leave::where('status', 'Approved')->latest()->paginate(10); // Fetch all approved leave requests
        return view('admin.approved-leaves', compact('leaves'));
    }
    public function deniedLeaves()
    {
        $leaves = Leave::where('status', 'Denied')->latest()->paginate(10); // Fetch all denied leave requests
        return view('admin.denied-leaves', compact('leaves'));
    }
    public function monthlyReport()
    {
        $currentMonth = now()->month;

        $monthlyLeaveData = User::withCount([
            'leaves' => function ($query) use ($currentMonth) {
                $query->whereMonth('start_date', $currentMonth)
                    ->where('status', 'Approved');
            }
        ])->having('leaves_count', '>', 0)
            ->orderBy('leaves_count', 'desc')
            ->paginate(10);

        return view('admin.monthly-report', compact('monthlyLeaveData'));


    }

    public function deleteUser($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        return redirect()->route('admin.manage-users')->with('success', 'User deleted successfully.');
    }

}

