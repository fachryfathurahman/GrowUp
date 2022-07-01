<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
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

    public function medical_record()
    {
        return $this->hasOne(MedicalRecord::class, 'child_id', 'id');
    }

    public function immunization()
    {
        return $this->hasMany(Immunization::class, 'toi_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}