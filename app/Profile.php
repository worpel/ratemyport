<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'description', 'portfolio', 'github', 'twitter', 'php', 'sql', 'css', 'javascript', 'html'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
