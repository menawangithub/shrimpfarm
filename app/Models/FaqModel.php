<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FaqModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'faq';

    protected $fillable = [
        '_id',
        'judul_faq',
        'isi_faq',
    ];
}
