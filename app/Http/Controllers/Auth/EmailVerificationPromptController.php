<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
<<<<<<< HEAD
<<<<<<< HEAD
                    ? redirect()->intended(route('admin/dashboard', absolute: false))
=======
                    ? redirect()->intended(route('dashboard', absolute: false))
>>>>>>> 9ba24f8 (Authentication Design migration)
=======
                    ? redirect()->intended(route('admin/dashboard', absolute: false))
>>>>>>> 8195b83 (Theme Integration)
                    : view('auth.verify-email');
    }
}
