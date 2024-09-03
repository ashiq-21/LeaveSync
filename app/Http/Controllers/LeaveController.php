<?php

namespace App\Http\Controllers;

use App\Models\Leave;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    // Show the form to create a new leave
    public function create()
    {
        return view('user.create-leave');
    }

    // Store the new leave in the database
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $leave = new Leave();
        $leave->type = $request->type;
        $leave->start_date = $request->start_date;
        $leave->end_date = $request->end_date;
        $leave->status = 'Pending'; // Default status
        $leave->user_id = auth()->id();
        $leave->user_name = auth()->user()->name;
        $leave->save();
        return redirect()->route('user.leaves')->with('status', 'Leave request submitted successfully!');
    }
    public function edit($id)
    {
        $leave = Leave::findOrFail($id);
        return view('user.edit-leave', compact('leave'));
    }

    public function update(Request $request, $id)
    {
        $form = $request->validate([
            'type' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $leave = Leave::findOrFail($id);
        $leave->update($form);

        return redirect()->route('user.leaves')->with('success', 'Leave updated successfully.');
    }

    public function destroy($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->delete();

        return redirect()->route('user.leaves')->with('success', 'Leave deleted successfully.');
    }
}
