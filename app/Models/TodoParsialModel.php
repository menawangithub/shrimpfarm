<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TodoParsialModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'todo_parsial';

    protected $fillable = [
        '_id',
        'title',
        'content'
    ];

    public function listTodoParsial()
    {
        return $this->hasMany(ListTodoParsialModel::class, 'id_todo_total', '_id');
    }

}
