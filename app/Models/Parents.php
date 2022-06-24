<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public function child(){
        return $this->hasManyThrough('App\Child', 'App\Keluarga');
    }

}
