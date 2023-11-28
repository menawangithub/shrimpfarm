<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'user';

    protected $fillable = [
        '_id',
        'nama',
        'kategori',
        'email',
        'phone',
        'address',
        'kota',
        'provinsi',
        'zipcode',
        'password',
        
    ];
    
}
