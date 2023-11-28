<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CommentArticleModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'user_comments_article';

   protected $fillable = [
        '_id',
        'id_article',
        'isi_komentar',
        'tanggal_post',
        'id',
        'nama_user',
    ];
}
