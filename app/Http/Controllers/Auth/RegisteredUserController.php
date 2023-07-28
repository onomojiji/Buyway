<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $pays = Pays::orderBy("nom")->get();

        return view('auth.register', compact("pays"));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        dd($request->all());

        $request->validate([
            'prenom' => ['string', 'max:255'],
            'nom' => ['required', 'string', 'min:3', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'telephone' => ['required', 'string', 'unique:'.User::class],
            'pays_id' => ['required', 'integer', 'exists:'.Pays::class.',id'],
            'password' => ['required',  Rules\Password::defaults()],
            'confirmation' => ['required',  Rules\Password::defaults()],
        ]);

        if ($request->password != $request->confirmation) {
            return back()->withErrors([
                'fail' => 'Les mots de passe ne correspondent pas',
            ]);
        }

        $user = User::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'pays_id' => $request->pays_id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
