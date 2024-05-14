<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class AdminRegisteredUserController extends Controller
{
    /**
     * Display the admin registration view.
     */
    public function create(): Response
    {
        return Inertia::render('AdminAuth/Register', [
            'college' => [
                'COS' => 'College of Science',
                'COE' => 'College of Engineering',
                'CAFA' => 'College of Architecture and Fine Arts',
                'CIT' => 'College of Industrial Technology',
                'CIE' => 'College of Industrial Education',
                'CLA' => 'College of Liberal Arts',
            ]
        ]);
    }

    /**
     * Handle an incoming admin registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:' . Admin::class, // Check unique against admins table
                function ($attribute, $value, $fail) {
                    // Custom rule to check if email exists in users table
                    if (\App\Models\User::where('email', $value)->exists()) {
                        $fail('The email has already been taken.');
                    }
                },
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'college' => ['required', 'string', 'in:COS,COE,CAFA,CIT,CIE,CLA'], // Validate college selection
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'college' => $request->college,
        ]);

        event(new Registered($admin));

        Auth::guard('admin')->login($admin);

        return redirect(route('admin.dashboard'));
    }
}
