<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = ['id','respondens_id','questions_id','answer'];
    public function questions(){
        return $this->belongsTo('App\Models\Question');
    }
    public function respondens(){
        return $this->belongsTo('App\Models\Responden');
    }
}
