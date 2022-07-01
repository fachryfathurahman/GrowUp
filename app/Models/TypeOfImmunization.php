<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfImmunization extends Model
{
    // use HasFactory;
    // protected $table = "typeofimmunization";

    protected $fillable = ['id', 'immunization_name', 'age'];

    public function immunization()
    {
        return $this->hasMany(Immunization::class, 'toi_id', 'id');
    }
}
