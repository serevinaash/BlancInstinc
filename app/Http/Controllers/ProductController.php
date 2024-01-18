<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        if(request()->ajax()){
            $query=Product::query();
            return DataTables::of($query)
            ->addColumn('action', function($item){
                return '
                    <a href="'.route('dashboard.product.gallery.index', $item->id).'" class=" px-2 py-1 m-2">
                        Gallery
                    </a>
                    <a href="'.route('dashboard.product.edit', $item->id).'" class="px-2 py-1 m-2">
                        Edit
                    </a>
                    <form class="inline-block" action="'.route('dashboard.product.destroy', $item->id).'" method="POST">
                        <button class="px-2 py-1 m-2">
                            Hapus
                        </button>
                        '.method_field('delete').csrf_field().'
                    </form>
                ';
            })
            ->editColumn('price', function($item){
                return number_format($item->price);
            })->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.product.index');
    }

    public function create()
    {
        return view('pages.dashboard.product.create');
    }

    public function store(ProductRequest $request)
    {
        $data=$request->all();
        $data['slug']=Str::slug($request->name);
        
        Product::create($data);

        return redirect()->route('dashboard.product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('pages.dashboard.product.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        
        $data=$request->all();
        $data['slug']=Str::slug($request->name);
        
        $product->update($data);

        return redirect()->route('dashboard.product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.product.index');
    }
}
