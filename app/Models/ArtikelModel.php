<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'kontenartikel';

    protected $fillable = [
        'judul_artikel',
        'penulis',
        'penerbit',
        'tanggal_terbit',
        'link',
        'gambar',
        'isi_artikel',
        'comments'
    ];

    public function comments()
    {
        return $this->embedsMany(CommentArticleModel::class);
    }
}
