<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
<<<<<<< HEAD
use App\Mail\RegistrationMail;
use Mail;
=======
>>>>>>> 9ba24f8 (Authentication Design migration)

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
<<<<<<< HEAD
            'password' => ['required','confirmed', Rules\Password::defaults()],
=======
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
>>>>>>> 9ba24f8 (Authentication Design migration)
            'address' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required','regex:/^[0-9]{10,15}$/'], 
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phonenumber' => $request->phonenumber
        ]);

        event(new Registered($user));

<<<<<<< HEAD
        $mailData = array(
            'title' => 'Registration',
            'name' => $request->firstname
        );
           
        Mail::to($request->email)->send(new RegistrationMail($mailData));

        //Auth::login($user);

        return redirect(route('login', absolute: false));
=======
        Auth::login($user);

<<<<<<< HEAD
        return redirect(route('dashboard', absolute: false));
>>>>>>> 9ba24f8 (Authentication Design migration)
=======
        return redirect(route('admin/dashboard', absolute: false));
>>>>>>> 8195b83 (Theme Integration)
    }
}
