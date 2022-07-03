<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id', 'id');
    }
}
