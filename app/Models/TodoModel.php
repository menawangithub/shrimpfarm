<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TodoModel extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'todo';

    protected $fillable = [
        '_id',
        'id_panen',
        'custom_id',
        'jenis_panen',
        'perkiraan_panen',
        'progress'
    ];

    public function infoPanen()
    {
        return $this->belongsTo(InfoPanenModel::class, '_id');
    }

    public function listTodoTotal()
    {
        return $this->hasMany(ListTodoTotalModel::class, 'id_panen', '_id');
    }

    public function listTodoParsial()
    {
        return $this->hasMany(ListTodoParsialModel::class, 'id_panen', '_id');
    }
}
