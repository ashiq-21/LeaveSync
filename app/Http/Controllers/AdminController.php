<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Mail\LeaveStatusNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $data['pendingLeavesCount'] = Leave::where('status', 'Pending')->count();
        $data['approvedLeavesCount'] = Leave::where('status', 'Approved')->count();
        $data['deniedLeavesCount'] = Leave::where('status', 'Denied')->count();
        return view('admin.dashboard', compact('data'));
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

}

