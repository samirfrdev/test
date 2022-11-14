<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concerne extends Model
{
    
    use HasFactory;
    protected $fillable = [
   
        'name',
        'constat_id'
        
    ];
    public function constat()
    {
        return $this->belongsTo('App\Models\Constat');
    }

    public function descriptions()
    {
        return $this->hasMany('App\Models\Description');
    }

    

}
