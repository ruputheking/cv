<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'knowledge', 'address', 'image', 'phone', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function language()
    {
      return $this->belongsToMany(Language::class);
    }

    public function skill()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function education()
    {
        return $this->belongsToMany(Education::class);
    }

    public function experience()
    {
        return $this->hasMany(Experience::class, 'user_id');
    }

    public function gravatar()
    {
        $email = $this->email;
        $default = "https://upload.wikimedia.org/wikipedia/commons/3/38/Wikipedia_User-ICON_byNightsight.png";
        $size = 40;

        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    }

}
