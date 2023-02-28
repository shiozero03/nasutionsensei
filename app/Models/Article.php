<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primarykey = 'id_article';
    protected $fillable = [
        'title',
        'feature_image',
        'content',
        'view',
        'category',
        'deleted_at',
        'created_at'
    ];
}
