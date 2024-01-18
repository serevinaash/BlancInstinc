<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product,ProductGallery};
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ProductGalleryController extends Controller
{
    public function index(Product $product)
    {
        if(request()->ajax()){
            $query=ProductGallery::query();
            return DataTables::of($query)
            ->addColumn('action', function($item){
                return '
                    <form class="inline-block" action="'.route('dashboard.gallery.destroy', $item->id).'" method="POST">
                        <button class="bg-red-600 text-white rounded-md px-2 py-1 m-2">
                            Hapus
                        </button>
                        '.method_field('delete').csrf_field().'
                    </form>
                ';
            })
            ->editColumn('url', function($item){
                return '<img style="max-width:150px" src="'.Storage::url($item->url).'"/>';
            })->editColumn('is_featured', function($item){
                return $item->is_featured ? 'Yes' : 'No';
            })
            ->rawColumns(['action','url'])
            ->make();
        }
        return view('pages.dashboard.gallery.index', compact("product"));
    }

    public function create(Product $product)
    {
        return view('pages.dashboard.gallery.create', compact("product"));
    }

    public function store(Request $request, Product $product)
    {
        $files=$request->file('files');

        if($request->hasFile('files')){
            foreach($files as $file){
                $path=$file->store('public/gallery');

                ProductGallery::create([
                    'products_id' => $product->id,
                    'url' => $path
                ]);
            }
        }
        return redirect()->route('dashboard.product.gallery.index', $product->id);
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(ProductGallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('dashboard.product.gallery.index', $gallery->products_id);
    }
}
