<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','email'];
    public function answers(){
        return $this->hasMany('App\Models\Answer', 'respondens_id');
    }
}
