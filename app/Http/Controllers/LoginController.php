<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index',[
            'users' => User::all()
        ]);
    }

    public function authenticate(Request $request){
        $validated =  $request->validate([
              'username' => 'required',
              'password' => 'required'
          ]);
          if(Auth::attempt($validated)){
              $request->session()->regenerate();
              return redirect()->intended('/dashboard');
          }
          return back()->with('loginFailed', 'Login Gagal Password atau Username Salah!');
      }
      
      public function logout(Request $request){
          Auth::logout();
      
          $request->session()->invalidate();
      
          $request->session()->regenerateToken();
      
          return redirect('/');
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
