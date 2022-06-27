<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'birthday',
        'asi'
    ];

    public function parents()
    {
        return $this->hasManyThrough('App\Parents', 'App\Keluarga');
    }

    public function MedicalRecord()
    {
        return $this->hasOne(MedicalRecord::class);
    }
}
