<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'slug', 'percentage'
    ];

    public function author()
    {
        return $this->belongsToMany(User::class);
    }

}
