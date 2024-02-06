<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home() {
        $title = 'Account';

        return view('components.account.home', compact('title'));
    }
}
