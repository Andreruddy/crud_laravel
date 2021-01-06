<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        // $data = User::where('email',$request->email)->firstOrfail();
        // if($data){
        //     if(Hash::check($request->password, $data->password)){
        //         session(['berhasil_login' => true]);
        //         return redirect('crud');
        //     }
        // }
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //             return redirect('crud');
    //     }

    //     return redirect('/')->with('message','Email atau Password Salah !!');
    }

    public function logout(Request $request){
        // $request->session()->flush();
        // Auth::logout();
        // return redirect('/'); 
    }
}
