<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name', 'slug', 'percentage', 'personal_id',
    ];

    public function author()
    {
        return $this->belongsToMany(USer::class);
    }

    public function getRouteKeyName()
    {
          return 'slug';
    }
}
