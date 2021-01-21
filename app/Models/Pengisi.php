<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengisi extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','email'];
    public function jawabans(){
        return $this->hasMany('App\Models\Jawaban');
    }
}
