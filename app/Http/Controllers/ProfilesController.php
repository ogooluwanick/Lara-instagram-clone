<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
        public function index(User $user)
        {
                return view('profiles.index',[
                        "user"=>$user,
                ]);
        }
        
        public function edit(User $user)
        {
                return view('profiles.edit',compact("user"));
        }

        public function update(User $user,Request $request)
        {
                // dd($request->url);
                $formdata=$request->validate([
                        "title"=>"required",
                        "desc"=>"required | min:33 | max:1000",
                        "url"=>"url",
                        "image"=>"",
                ]);

                // dd($formdata["url"]);
                auth()->user()->profile->update($formdata);

                return redirect('/profile/' . $user->id);
        }
}
