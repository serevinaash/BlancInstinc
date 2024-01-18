<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(){
        if(request()->ajax()){
            $query=User::query();
            return DataTables::of($query)
            ->addColumn('action', function($item){
                return '
                    <a href="'.route('dashboard.user.edit', $item->id).'" class="px-2 py-1 m-2">
                        Edit
                    </a>
                    <form class="inline-block" action="'.route('dashboard.user.destroy', $item->id).'" method="POST">
                        <button class="px-2 py-1 m-2">
                            Hapus
                        </button>
                        '.method_field('delete').csrf_field().'
                    </form>
                ';
            })->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.user.index');
    }

    public function edit(User $user){
        return view('pages.dashboard.user.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user){
        $data=$request->all();
        $user->update($data);

        return redirect()->route('dashboard.user.index');
    }

    public function destroy(User $user){
        $user->delete();
        
        return redirect()->route('dashboard.user.index');
    }
}
