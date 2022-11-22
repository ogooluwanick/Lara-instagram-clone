<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
                $this->authorize('update', $user->profile);                                              //Policy auth for User to Profile update
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

                
                if($request->file("image")){
                        $formdata["image"]=$formdata["image"]->store("profile","public");

                        $image=Image::make(public_path("storage/{$formdata["image"]}"))->fit(1000,1000);                  #resize all incoming images
                        $image->save();
                }

                // dd($formdata);
                auth()->user()->profile->update($formdata);

                return redirect('/profile/' . $user->id);
        }
}
