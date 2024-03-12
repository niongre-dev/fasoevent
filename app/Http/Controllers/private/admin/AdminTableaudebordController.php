<?php

namespace App\Http\Controllers\private\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTableaudebordController extends Controller
{
    public function adminTableaudebord () {
        return view('private.admin.adminTableaudebord');
    }
}
