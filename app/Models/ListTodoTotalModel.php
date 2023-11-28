<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ListTodoTotalModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'list_todo_total';

    protected $fillable = [
        '_id',
        'id_todo_total',
        'id_panen',
        'checked',
        'todo_id', // Add this line
    ];
    

    public function todo()
    {
        return $this->belongsTo(TodoModel::class, 'id_panen', '_id');
    }
    
    public function todo_total()
    {
        return $this->belongsTo(TodoTotalModel::class, 'id_todo_total', '_id');
    }
}
