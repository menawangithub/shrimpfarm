<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class InfoBudidayaModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'infobudidaya';

    protected $fillable = [
        '_id',
        'keterangan',
        'luas_kolam',
        'jumlah_ruas_kolam',
        'custom_id',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Calculate the total number of documents in the collection
            $totalDocuments = self::count();

            // Generate a 4-digit ID with leading zeros
            $fourDigitId = str_pad($totalDocuments + 1, 4, '0', STR_PAD_LEFT);

            // Set the custom_id field with the desired format
            $model->custom_id = "BSF-" . $fourDigitId;
        });
    }
}
