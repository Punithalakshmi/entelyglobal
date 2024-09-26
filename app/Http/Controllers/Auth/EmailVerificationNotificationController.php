<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
<<<<<<< HEAD
<<<<<<< HEAD
            return redirect()->intended(route('admin/dashboard', absolute: false));
=======
            return redirect()->intended(route('dashboard', absolute: false));
>>>>>>> 9ba24f8 (Authentication Design migration)
=======
            return redirect()->intended(route('admin/dashboard', absolute: false));
>>>>>>> 8195b83 (Theme Integration)
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
