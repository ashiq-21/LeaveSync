<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function leaves()
    {
        $leaves = auth()->user()->leaves()->latest()->paginate(10); // Assumes a one-to-many relationship
        return view('user.leaves', compact('leaves'));
    }

}
