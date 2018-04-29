<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users()
    {
        return $this->belongstoMany(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
