<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
<<<<<<< HEAD
<<<<<<< HEAD
            return redirect()->intended(route('admin/dashboard', absolute: false).'?verified=1');
=======
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
>>>>>>> 9ba24f8 (Authentication Design migration)
=======
            return redirect()->intended(route('admin/dashboard', absolute: false).'?verified=1');
>>>>>>> 8195b83 (Theme Integration)
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->intended(route('admin/dashboard', absolute: false).'?verified=1');
=======
        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
>>>>>>> 9ba24f8 (Authentication Design migration)
=======
        return redirect()->intended(route('admin/dashboard', absolute: false).'?verified=1');
>>>>>>> 8195b83 (Theme Integration)
    }
}
