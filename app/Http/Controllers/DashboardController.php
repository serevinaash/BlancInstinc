<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->roles == "ADMIN") {
            $totalProducts = Product::count();
            $totalTransactions = Transaction::count();
            $totalUsers = User::count();

            return view("dashboard", compact('totalProducts', 'totalTransactions', 'totalUsers'));
        }

        return redirect("/");
    }
}
