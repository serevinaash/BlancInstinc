<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ItemTransaction;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
    public function index()
    {
        if(request()->ajax()){
            $query=Transaction::query();
            return DataTables::of($query)
            ->addColumn('action', function($item){
                return '
                    <a href="'.route('dashboard.transaction.show', $item->id).'" class=" px-2 py-1 m-2">
                        Show
                    </a>
                    <a href="'.route('dashboard.transaction.edit', $item->id).'" class="px-2 py-1 m-2">
                        Edit
                    </a>
                ';
            })
            ->editColumn('total_price', function($item){
                return number_format($item->total_price);
            })->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.transaction.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Transaction $transaction)
    {
        if(request()->ajax()){
            $query=ItemTransaction::with(['product'])->where('transactions_id', $transaction->id);
            return DataTables::of($query)
            ->editColumn('product.price', function($item){
                return number_format($item->product->price);
            })->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.transaction.show', compact('transaction'));

    }

    public function edit(Transaction $transaction)
    {
        return view('pages.dashboard.transaction.edit', compact('transaction'));
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $data=$request->all();
        $transaction->update($data);

        return redirect()->route('dashboard.transaction.index');
    }

    public function destroy($id)
    {
        //
    }
}
