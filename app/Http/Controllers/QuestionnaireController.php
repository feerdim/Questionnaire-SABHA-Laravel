<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Responden;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class QuestionnaireController extends Controller
{
    public function index()
    {
        $questions = Question::get();
        return view('questionnaire', ['questions' => $questions]);
    }

    public function form($id, $i)
    {
        $i++;
        if(is_numeric($id)){
            $question = Question::find($id);
            if($i==1){
                $question['tombol'] = '<button id="'.$i.'" class="next">Next</button>';
            }
            else{
                $question['tombol'] = '<button id="'.$i.'" class="next">Next</button>';
            }
            $question['form'] = "
            <div id='form".$i."' class='form form-inner'>
                <div class='question'>
                    <h3>".$question->question."</h3>
                </div>
                <div>
                    <input id='answer[".$i."]' type='hidden' name='answer[".$i."]' value=''>
                    <button id='".$i."' href='".route('questionnaire.form',[$question->yes, $i])."' class='answer answer-yes' answer='yes'>iya</button>
                    <button id='".$i."' href='".route('questionnaire.form',[$question->no, $i])."' class='answer answer-no' answer='no'>tidak</button>
                </div>
                <div class='page page".$i."'>
                    <button id='".$i."' class='back'>Back</button>
                </div>
            </div>";
            return response()->json($question);
        }
        else{
            $question['tombol'] = '<button type="submit" id="submit" class="next">SUBMIT</button>';
            $question['form'] = "";
            return response()->json($question);
        }
    }

    public function result(Request $request)
    {
        Responden::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        $id = DB::getPdo()->lastInsertId();
        $i = 1;
        foreach($request->answer as $answer){
            Answer::create([
                'respondens_id' => $id,
                'questions_id' => $i,
                'answer' => $answer
            ]);
            $i = Question::find($i);
            if($answer==1){
                $i = $i->yes;
            }
            else{
                $i = $i->no;
            }
        }
        $result['bentuk'] = $i;
        $result['chat'] = 'Halo%20saya%20'.$request->name.'.%20Bentuk%20tubuh%20saya%20adalah%20'.$i.'.%0ASaya%20ingin%20berkonsultasi%20mengenai%20produk%20SABHA%20yang%20sesuai%20dengan%20bentuk%20tubuh%20saya';
        return response()->json($result);
    }
}
