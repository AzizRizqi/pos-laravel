<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderby('id','desc')->get();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = user::orderBy('id','desc')->get();
        return view('user.create', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password) // Hash password before storing it in database
        ]);
        return redirect()->to('user')->with('massage', 'Data Berhasil di simpan');
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
        $edit = user::findOrFail($id);
        return view('user.edit', compact('edit'));
        // $edit = User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::find($id);
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password ? Hash::make($request->password) : $user->password) // Hash password before updating it in database
        ]);
        return redirect()->to('user')->with('massage', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->to('user')->with('massage', 'Data Berhasil di hapus');
    }
}
