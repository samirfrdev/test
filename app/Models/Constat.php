<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constat extends Model
{
    use HasFactory;
    protected $fillable = [
   
        'name'
        
    ];
    public function concernes()
    {
        return $this->hasMany('App\Models\Concerne');
    }

}
