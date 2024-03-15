<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
                'nomcomplet' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'siege' => 'required',
                'activites' => 'required',
                'adresse' => 'required',
                'telephone' => 'required',
                'password' => 'required|min:4',
            ],
            [
                'nomcomplet.required' => 'Le champ nom complet est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'siege.required' => 'Le champ siege est requis.',
                'adresse.required' => 'Le champ adresse est requis.',
                'telephone.required' => 'Le champ telephone est requis.',
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
    public function connexion() {
        return view('public.auth.connexion');
    }
}
