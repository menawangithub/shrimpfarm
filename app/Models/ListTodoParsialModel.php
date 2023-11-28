<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ListTodoParsialModel extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'list_todo_parsial';

    protected $fillable = [
        '_id',
        'id_todo_parsial',
        'id_panen',
        'checked',
        'todo_id', 
    ];
    

    public function todo()
    {
        return $this->belongsTo(TodoModel::class, 'id_panen', '_id');
    }
    
    public function todo_parsial()
    {
        return $this->belongsTo(TodoParsialModel::class, 'id_todo_parsial', '_id');
    }
}
