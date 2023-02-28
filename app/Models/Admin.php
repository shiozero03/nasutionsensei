<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primarykey = 'id';
    protected $fillable = [
        'profile_picture',
        'name',
        'username',
        'password',
        'address',
        'phone',
        'email',
        'url',
        'about',
        'whatsapp',
        'github',
        'instagram',
        'facebook',
        'youtube'
    ];
}
