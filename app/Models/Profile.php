<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model


{
        use HasFactory;

        protected $fillable = [
                'title',
                "desc",
                "url",
                'image',
        ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class,);
    }
}
