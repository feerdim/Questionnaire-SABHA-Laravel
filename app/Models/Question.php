<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['id','question','yes','no'];
    public function answers(){
        return $this->hasMany('App\Models\Answer', 'questions_id');
    }
}
