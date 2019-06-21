<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
      'school', 'start_date', 'end_date', 'qualification', 'slug',
    ];
    
    public function author()
    {
        return $this->belongsToMany(User::class);
    }
}
