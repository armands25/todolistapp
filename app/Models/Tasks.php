<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $casts = [
        'title' =>  'string',
        'description'   =>  'string',
        'created_at'    =>  'datetime',
        'updated_at'    =>  'datetime'
    ];

    protected $fillable = [
        'title',
        'description',
        'priority_id',
        'created_at',
        'updated_at'
    ];

    public function priority()
    {
        return $this->belongsTo(Priority::class, 'priority_id');
    }

    public function status()
    {
        return $this->belongsTo(TodoStatus::class, 'status_id');
    }

}
