<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class AdminuserauthController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
    /**
     * Display registered users from the Registration model
     */
    public function adminRegisteredUsers()
    {
        $users = Registration::latest()->paginate(10);
        return view('admin.registered-users', compact('users'));
    }
    
    /**
     * Show the form for editing the specified registration.
     */
    public function editUser(Registration $user)
    {
        return view('admin.edit-user', compact('user'));
    }

    /**
     * Update the specified registration in storage.
     */
    public function updateUser(Request $request, Registration $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registrations,email,' . $user->id,
            'phone' => 'required|string|max:20',
            'institution' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'institution' => $request->institution,
            'designation' => $request->designation,
        ]);

        return redirect()->route('admin.registered-users')->with('success', 'Registration updated successfully');
    }

    /**
     * Remove the specified registration from storage.
     */
    public function destroyUser(Registration $user)
    {
        $user->delete();
        return redirect()->route('admin.registered-users')->with('success', 'Registration deleted successfully');
    }
}
