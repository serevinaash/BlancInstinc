<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ItemTransaction;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MyTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Transaction::with(['user'])->where('users_id', Auth::user()->id);
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <a href="' . route('dashboard.my-transaction.show', $item->id) . '" class=" px-2 py-1 m-2">
                        Show
                    </a>
                ';
                })
                ->editColumn('total_price', function ($item) {
                    return number_format($item->total_price);
                })->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.transaction.index');
    }

    public function show(Transaction $myTransaction)
    {
        if (request()->ajax()) {
            $query = ItemTransaction::with(['product'])->where('transactions_id', $myTransaction->id);
            return DataTables::of($query)
                ->editColumn('product.price', function ($item) {
                    return number_format($item->product->price);
                })->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.transaction.show', ['transaction' => $myTransaction]);
    }
}
