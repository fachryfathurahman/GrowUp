<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = [
        'name',
        'age',
        'phone',
        'email'
    ];

    public function child()
    {
        return $this->hasManyThrough('App\Child', 'App\Keluarga');
    }
}
