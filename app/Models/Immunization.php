<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    // use HasFactory;

    // protected $table = "immunization";
    protected $fillable = ['child_id', 'toi_id'];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function typeofimmunization()
    {
        return $this->belongsTo(TypeOfImmunization::class, 'toi_id', 'id');
    }
}
