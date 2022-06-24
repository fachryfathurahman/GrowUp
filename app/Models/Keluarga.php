<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    public function anak(){
        return $this->belongsTo('App\Anak');
    }

    public function ortu(){
        return $this->belongsTo('App\Ortu');
    }

}
