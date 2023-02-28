<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $primarykey = 'id_portfolio';
    protected $fillable = [
        'id_admin',
        'category',
        'title',
        'thumbnail',
        'link',
        'content',
        'created_at'
    ];
}
