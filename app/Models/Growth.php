<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Growth extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'height',
        'weight',
        'zScore'
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id', 'id');
    }
}
