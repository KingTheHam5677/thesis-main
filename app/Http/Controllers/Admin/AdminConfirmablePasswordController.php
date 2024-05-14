<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class AdminConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view for admin users.
     */
    public function show(): Response
    {
        return Inertia::render('AdminAuth/ConfirmPassword');
    }

    /**
     * Confirm the admin user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate admin user's password
        if (
            !Auth::guard('admin')->validate([
                'email' => $request->user()->email,
                'password' => $request->password,
            ])
        ) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        // Store confirmation timestamp in session
        $request->session()->put('admin_auth.password_confirmed_at', now());

        // Redirect to admin dashboard (adjust route name accordingly)
        return redirect()->intended(route('admin.dashboard', [], false));
    }
}
