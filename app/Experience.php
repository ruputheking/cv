<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function author()
    {
        return $this->belongsToMany(User::class);
    }
}
