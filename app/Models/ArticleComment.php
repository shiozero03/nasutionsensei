<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;

    protected $table = 'article_comments';
    protected $primarykey = 'id_comments';
    protected $fillable = [
        'id_article',
        'name',
        'feedback'
    ];
}
