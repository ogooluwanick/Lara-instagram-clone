<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function create(){
        return view("posts.create");
    }

    public function store(Request $request){
        // dd($request->all());

        $formFields = $request->validate([
                'caption' =>['required', 'string', 'max:255'],
                'image' => 'required | image',
            ]);

            $formFields["image"]=$formFields["image"]->store("posts","public");
                // Post::create($formFields);
            
                auth()->user()->posts()->create($formFields);
            return redirect("/profile/" . auth()->user()->id);
    }
}
