<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminEmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt for admin users.
     */
    public function __invoke(Request $request): RedirectResponse|Response
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect()->intended(route('admin.dashboard', [], false))
            : Inertia::render('AdminAuth/VerifyEmail', ['status' => session('status')]);
    }
}
