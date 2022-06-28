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

    public function parents(){
        return $this->belongsTo(User::class);
    }

    public function childs(){
        return $this->HasOne(Growth::class);
    }

}
