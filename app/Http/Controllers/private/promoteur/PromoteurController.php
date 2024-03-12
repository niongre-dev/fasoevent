<?php

namespace App\Http\Controllers\private\promoteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoteurController extends Controller
{
    function promoteurTableaudebord () {
        return view ('private.promoteur.promoteurTableaudebord');
    }
}
