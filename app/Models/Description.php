<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $fillable = [
   
        'name',
        'concerne_id'
        
    ];
   

    public function concerne()
    {
        return $this->belongsTo('App\Models\Concerne');
    }
}
