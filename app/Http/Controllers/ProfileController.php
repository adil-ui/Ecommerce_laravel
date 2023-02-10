<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }
    public function updateUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $picture = Auth::user()->picture;
            if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
                $picture = "storage/" . $request->picture->store('user/images');
            }
            User::where("id", Auth::user()->id)->update([
                "name" => $request->name,
                "email" => $request->email,
                "adress" => $request->address,
                "phone" => $request->phone,
                "password" => Auth::user()->password != $request->password ? Hash::make($request->password) : Auth::user()->password,
                "picture" => $picture,
            ]);
            return redirect("/profile");
        }
        return view('admin.profile');
    }

    public function updateUserApi(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $user = User::find($id);
            $picture = $user->picture;
            if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
                $picture = "storage/" . $request->picture->store('user/images');
            }
            User::where("id", $id)->update([
                "name" => $request->name,
                "email" => $request->email,
                "adress" => $request->address,
                "phone" => $request->phone,
                "password" => $user->password != $request->password ? Hash::make($request->password) : $user->password,
                "picture" => $picture,
            ]);
            $user = User::find($id);
            return response()->json(['success' => 'user updated', "user" => $user]);
        }
    }
}