<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home() {
        $title = 'Account';

        return view('components.account.home', compact('title'));
    }

    public function orders() {
        $title = 'Orders';

        return view('components.account.orders', compact('title'));
    }
    public function twoFactor() {
        $title = 'Two Factor Authentication';

        return view('components.account.two-factor', compact('title'));
    }
}
