<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegisterModel;
use Illuminate\Support\Facades\Hash;

class UserRegisterControllers extends Controller
{

    public function UserRegister(Request $request){
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:user_regsiter',
            'password' => 'required|string|min:6',
        ]);
        
        $user = UserRegisterModel::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,  
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);


        return response()->json(['message' => 'Thank you for filling out our sign up form'], 201);

    }
}
