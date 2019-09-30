<?php

namespace Lavel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
    $this->middleware('auth')->only('profile', 'update_profile');
  }
 
  public function profile() {
    $user = Auth::user();
    return view('profile', ['user' => $user]);
  }
 
  public function update_profile(Request $request) {
    $this->validate($request, ['avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
 
    $filename = Auth::id().'_'.time().'.'.$request->avatar->getClientOriginalExtension();
    $request->avatar->move(public_path().'/images/ae/', $filename);
 
    $user = Auth::user();
    $user->avatar = $filename;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();
 
    return redirect()->route('user.profile');
}
}