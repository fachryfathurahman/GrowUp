<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function parents(){
        return $this->hasManyThrough('App\Parents', 'App\Keluarga');
    }
}
