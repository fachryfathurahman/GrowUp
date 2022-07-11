<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'gender',
        'birthday',
        'asi',
        'user_id'
    ];

    public function parent()
    {
        return $this->hasManyThrough('App\Parents', 'App\Keluarga');
    }

    public function immunization()
    {
        return $this->hasMany(Immunization::class);
    }

    public function growth()
    {
        return $this->hasMany(Growth::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
