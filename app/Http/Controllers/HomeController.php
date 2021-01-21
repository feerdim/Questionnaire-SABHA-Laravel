<?php

namespace App\Http\Controllers;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $pertanyaan = Pertanyaan::first();
        return view('sabha', ['pertanyaan' => $pertanyaan]);
    }

    public function pertanyaan($id, $i)
    {
        $i++;
        if(is_numeric($id)){
            $pertanyaan = Pertanyaan::find($id);
            if($i==1){
                $pertanyaan['tombol'] = '<button id="'.$i.'" class="next">NEXT</button>';
            }
            else{
                $pertanyaan['tombol'] = '<button id="'.$i.'" class="next">NEXT</button>';
            }
            $pertanyaan['form'] = "
            <div id='form".$i."' class='form form-inner'>
                <div class='question'>
                    <h3>".$pertanyaan->pertanyaan."</h3>
                </div>
                <div>
                    <input id='jawaban[".$i."]' type='hidden' name='jawaban[".$i."]' value=''>
                    <button id='".$i."' href='".route('pertanyaan',[$pertanyaan->ya, $i])."' class='answer' answer='yes'>yes</button>
                    <button id='".$i."' href='".route('pertanyaan',[$pertanyaan->tidak, $i])."' class='answer' answer='no'>no</button>
                </div>
                <div class='page page".$i."'>
                    <button id='".$i."' class='back'>back</button>
                </div>
            </div>";
            return response()->json($pertanyaan);
        }
        else{
            $pertanyaan['tombol'] = '<button id="'.$i.'" class="next">SUBMIT</button>';
            $pertanyaan['form'] = "";
            return response()->json($pertanyaan);
        }
    }

}
