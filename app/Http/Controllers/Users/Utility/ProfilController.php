<?php

namespace App\Http\Controllers\Users\Utility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        return view('users.utility.profil');
    }
}
