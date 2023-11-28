<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'user_comments_video';

   protected $fillable = [
        '_id',
        'id_video',
        'isi_komentar',
        'tanggal_post',
        'id',
        'nama_user',
    ];
}
