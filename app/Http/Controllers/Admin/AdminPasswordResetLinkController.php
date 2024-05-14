<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class AdminPasswordResetLinkController extends Controller
{
    /**
     * Display the admin password reset link request view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Admin/ForgotPassword', [
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming admin password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send the password reset link specifically for admin users
        $status = Password::broker('admin')->sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }
}
