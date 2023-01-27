<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        /**if($request->isMethod("post")) {
        $email = $request->email;
        $password = $request->password;
        $user = User::where("email", "=", $email)->getQuery();
        if($user->exists()) {
        $user = $user->first();
        if(Hash::check($password, $user->password)) {
        return redirect()->route('home');
        }
        }
        $request->session()->flash("error", "User not found");
        return back()->withInput();
        } */
        return view('auth.login');
    }

    public function logUser(Request $request)
    {
        /*$email = $request->email;
        $password = $request->password;
        $user = User::where("email", "=", $email)->getQuery();
        if($user->exists()) {
        $user = $user->first();
        if(Hash::check($password, $user->password)) {
        return redirect()->route('home');
        }
        }*/
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        session()->flash("error", "User not found");
        return back()->withInput();
    }

    public function register(Request $request)
    {
        if ($request->isMethod("post")) {
            $user = new User;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->name = $request->name;
            $user->adress = $request->address;
            $user->phone = $request->phone;
            $user->created_at = Carbon::now();
            $user->updated_at = Carbon::now();
            $user->role = 'customer';
            if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
                $user->picture = 'storage/' . $request->picture->store('user/images');
            }
            $user->save();
            return redirect()->route('login');
        }
        return view('auth.register');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('home');
    }
}
