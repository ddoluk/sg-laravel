<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'full_name', 'birthday', 'e_mail', 'phone', 'github', 'about',
    ];
}
