<?php

// AdminProfileController

namespace App\Http\Controllers;

use App\Http\Requests\AdminProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class AdminProfileController extends Controller
{
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/AdminEdit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    public function update(AdminProfileUpdateRequest $request): RedirectResponse
    {
        $admin = $request->user();
        $admin->fill($request->validated());

        if ($admin->isDirty('email')) {
            $admin->email_verified_at = null;
        }

        $admin->save();

        return Redirect::route('adminprofile.edit')->with('status', 'Profile updated successfully.');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $admin = $request->user();

        Auth::guard('admin')->logout();

        $admin->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('faculty/login')->with('status', 'Account deleted successfully.');
    }
}

