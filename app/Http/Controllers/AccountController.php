<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function home() {
        $title = 'Account';

        return view('components.account.home', compact('title'));
    }

    public function orders(Request $request) {
        $title = 'Orders';

        $user = $request->user();

        $orders = Order::query()
                ->where('user_id', '=', $user->id)
                ->get();

        return view('components.account.orders', compact('title', 'orders'));
    }
    }

    public function cart() {
        $title = 'Cart';

        return view('components.account.cart', compact('title'));
    }

    public function wishlist() {
        $title = 'Wishlist';

        return view('components.account.wishlist', compact('title'));
    }

    public function twoFactor() {
        $title = 'Two Factor Authentication';

        return view('components.account.two-factor', compact('title'));
    }

    public function browserSessions() {
        $title = 'Browser Sessions';

        return view('components.account.browser-sessions', compact('title'));
    }

    public function closeAccount() {
        $title = 'Close Account';

        return view('components.account.close-account', compact('title'));
    }
}
