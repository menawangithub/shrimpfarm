<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class TodoTotalModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'todo_total';

    protected $fillable = [
        '_id',
        'title',
        'content'
    ];

    public function listTodoTotal()
    {
        return $this->hasMany(ListTodoTotalModel::class, 'id_todo_total', '_id');
    }

    
}