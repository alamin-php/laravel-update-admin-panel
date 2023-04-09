<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $user = User::latest()->get();
            return DataTables::of($user)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                return '
                <a href="" class="btn btn-xs btn-primary edit" data-toggle="modal"
                                                data-id="'.$row->id.'" data-target="#editModal"><i
                                                    class="fa fa-edit"></i></a>
                <a href="'.route('cupon.destroy', [$row->id]).'" class="btn btn-xs btn-danger" id="delete_cupon"><i class="fa fa-trash"></i></a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('backend.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
