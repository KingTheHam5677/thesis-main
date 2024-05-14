<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminPasswordController extends Controller
{
    /**
     * Update the admin user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'password'], // Adjust validation rules for admin users
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        // Verify the admin user's current password
        if (!Hash::check($validated['current_password'], $request->user()->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the admin user's password
        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'Password updated successfully.'); // Adjust the redirection or status message as needed
    }
}

