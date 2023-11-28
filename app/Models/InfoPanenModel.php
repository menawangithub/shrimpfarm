<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class InfoPanenModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'infopanen';

    protected $fillable = [
        '_id',
        'jenis_panen',
        'perkiraan_panen',
        'ukuran_panen',
        'tonase_panen',
        'usia_budidaya',
        'harga_harapan',
        'lokasi_budidaya',
        'user_id',
        'custom_id'
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
            $model->custom_id = "SF-" . $fourDigitId;
        });
    }

    public function todo()
    {
        return $this->hasOne(TodoModel::class, 'id_panen', '_id');
    }

    public function createTodoEntry()
    {
        $todo = new TodoModel;
        $todo->custom_id = $this->custom_id;
        $todo->jenis_panen = $this->jenis_panen;
        $todo->perkiraan_panen = $this->perkiraan_panen;
        $todo->progress = 0; 

        $this->todo()->save($todo);

}
}
