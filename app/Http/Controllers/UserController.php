<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datauser = User::all();
        $namatable = (new User)->getTable(); // otomatis akan menjadi 'users'
        return view('user.index', compact('datauser', 'namatable'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.regist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|Unique:Users',
            'password' => 'required',
            'status' => 'required',
        ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);
        // User::create($validatedData);

        $data = new User();
        $data->name = $request->name;
        $data->password = Hash::make($request->password);
        $data->status = $request->status;
        $data->save();

        // dd($data);

        $request->session()->flash('success', 'Register berhasil, Kamu bisa login sekarang!!');
        return back;
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
