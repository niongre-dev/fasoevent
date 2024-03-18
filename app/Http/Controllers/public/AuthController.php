<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function inscriptionOption() {
        return view('public.auth.inscription-option');
    }

    public function inscriptionPromoteur() {
        return view('public.auth.inscription-promoteur');
    }

    # fonction de gestion des inscriptions pour les promoteurs
    public function inscriptionPromoteurAction(Request $request) {
        # Validation du formulaire
        $validator = Validator::make(
            $request->all(),
            [
                'nomComplet' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'siege' => 'required',
                'activites' => 'required',
                'adresse' => 'required',
                'telephone' => 'required|min:8|max:10',
                'password' => 'required|min:4',
            ],
            [
                'nomComplet.required' => 'Le champ nom complet est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'siege.required' => 'Le champ siege est requis.',
                'adresse.required' => 'Le champ adresse est requis.',
                'telephone.required' => 'Le champ telephone est requis.',
                'telephone.min' => 'Le telephone doit dépasser :min caractères.',
                'telephone.max' => 'Le telephone ne doit pas dépasser :max caractères.',
                'activites.required' => 'Le champ domaines d\'activites est requis.',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $promoteur = User::create([
            'nomComplet' => $request->nomComplet,
            'email' => $request->email,
            'password' => $request->password,
            'siege' => $request->siege,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'activites' => $request->activites,
            'role' => "promoteur",
            'status' => "en_attente",
        ]);
        return redirect()->route('public.connexion')->with('success', 'Inscription réussie ! Veuillez vous connecter');
    }
    
    public function inscriptionAbonné() {
        return view('public.auth.inscription-abonné');
    }
    # fonction de gestion des inscriptions pour les abonnés
    public function inscriptionAbonnéAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required',
                'adresse' => 'required',
                'telephone' => 'required|min:8|max:10',
                'preferences' => 'required',
            ],
            [
                'nom.required' => 'Le champ nom et prénom est requis.',
                'prenom.required' => 'Le champ nomcomplet et prénom est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'adresse.required' => 'Le champ adresse est requis.',
                'telephone.required' => 'Le champ telephone est requis.',
                'telephone.min' => 'Le telephone doit dépasser :min caractères.',
                'telephone.max' => 'Le telephone ne doit pas dépasser :max caractères.',
                'preferences.required' => 'Le champ preferences est requis.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $abonne = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'password' => $request->password,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'preferences' => $request->preferences,
            'role' => "abonne",
        ]);

        $abonne->save();

        return redirect()->route('public.connexion')->with('success','Inscription réussie ! Connectez-vous maintenant.');
    }
    public function connexion() {
        return view('public.auth.connexion');
    }
    public function connexionAction(Request $request) {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'password.required' => 'Le champ mot de passe est requis.',
            ]
        );

        //On retourne tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Vérifier si un utilisateur avec cet email existe
        $user = User::where('email', $request->email)->first();


        if (!$user) {
            return redirect()->back()
                ->withErrors(['login' => "Cet email n'a pas de compte"])
                ->withInput();
        }

        //On le connecte ici
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()->back()
                ->withErrors(['login' => 'Mot de passe est incorrect'])
                ->withInput();
        }

        $request->session()->regenerate();

        //On voie sur quel page on dois le redirigé
        $user = Auth::user();
        $redirectRoute = '';

        if ($user->role == 'admin') {
            $redirectRoute = 'private.adminTableaudebord';
        } elseif ($user->role == 'promoteur') {
            $redirectRoute = 'private.promoteurTableaudebord';
        } elseif ($user->role == 'abonne') {
            $redirectRoute = 'private.abonneTableaudebord';
        }

        if (!empty($redirectRoute)) {
            return redirect()->route($redirectRoute)->withMessage("Connexion réussie !");
        }
    }
}
