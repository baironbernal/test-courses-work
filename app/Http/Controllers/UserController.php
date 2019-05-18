<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile() {
        $user = Auth::user();

        return view('profile', compact('user'));
    }
}
