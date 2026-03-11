<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'tenant_id',
        'status'
    ];

    protected static function booted()
    {
        static::creating(function ($task) {
            $task->tenant_id = currentTenant()->id;
        });
    }
}
