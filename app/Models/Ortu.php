<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    public function anak(){
        return $this->hasManyThrough('App\Ortu', 'App\Keluarga');
    }
}
