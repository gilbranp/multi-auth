<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login(){
        return view('auth.login');
     }

     public function doLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        if (Auth::attempt($credentials)){
            return redirect()->intended('/');
        }

        return back()->withErrors(['error' => 'email atau password salah!!!']);

     }

     public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
     }



    public function index()
    {
        //
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
