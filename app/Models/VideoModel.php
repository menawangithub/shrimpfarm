<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class VideoModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'kontenvideo';

    protected $fillable = [
        '_id',
        'judul_video',
        'deskripsi',
        'url',
        'tanggal_upload',
        'Owner',
        'comments'
    ];

    public function comments()
    {
        return $this->embedsMany(CommentModel::class);
    }
}
