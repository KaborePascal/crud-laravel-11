<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index(){
        return view('register');
    }
    public function admin (Request $request)
    {
    $request->validate([
        'nom'=>'required',
        'email'=>'required',
        'date_de_naissance'=>'required',
    ]);  
     $admin=new admin ();
     $admin->nom = $request->nom;
     $admin->email = $request->email;
     $admin->date_de_naissance = $request->date_de_naissance;
     $admin->save();

    return redirect('etudiant');


    }
    public function logout()
    {
        // Auth::guard('register')->logout();
        return redirect('register');
    }
}
