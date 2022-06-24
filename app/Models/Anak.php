<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    public function ortu(){
        return $this->hasManyThrough('App\ortu', 'App\Keluarga');
    }
}
