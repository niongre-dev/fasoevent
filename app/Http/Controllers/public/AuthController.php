<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function inscriptionOption() {
        return view('public.auth.inscription-option');
    }

    public function inscriptionPromoteur() {
        return view('public.auth.inscription-promoteur');
    }
    
    public function inscriptionAbonné() {
        return view('public.auth.inscription-abonné');
    }
}
