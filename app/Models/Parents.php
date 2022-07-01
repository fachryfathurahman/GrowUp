<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'phone',
        'email'
    ]; 

    public function family(){
        return $this->belongsTo(User::class);
    }

}
