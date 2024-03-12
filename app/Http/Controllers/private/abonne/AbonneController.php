<?php

namespace App\Http\Controllers\private\abonne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    function abonneTableaudebord () {
        return view('private.abonne.abonneTableaudebord');
    }
}
