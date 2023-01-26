<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    
    public function updateUser(Request $request) {
       if($request->isMethod('post')){
        $picture = Auth::user()->picture;
        if($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $picture = "storage/" . $request->picture->store('user/images');
        } 
        User::where("id", Auth::user()->id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "adress" => $request->address,
            "phone" => $request->phone,
            "password" => Hash::make($request->password),
            "picture" => $picture,
        ]);
        return redirect("/profile");
       }
        return view('admin.profile');
    }
}
