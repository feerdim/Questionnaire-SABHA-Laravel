<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $fillable = ['id','pengisis_id','pertanyaans_id','jawaban'];
    public function pertanyaans(){
        return $this->belongsTo('App\Pertanyaan');
    }
    public function pengisis(){
        return $this->belongsTo('App\Pengisi');
    }
}
