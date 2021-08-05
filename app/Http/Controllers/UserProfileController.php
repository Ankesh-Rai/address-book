<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    function userProfile()
    {
        return view('user_profile');
    }
}
