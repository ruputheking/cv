<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsToMany(Language::class);
    }

    public function skill()
    {
        return $this->belongsToMany(Skill::class);
    }
}
