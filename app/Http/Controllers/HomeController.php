<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Responden;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $question = Question::first();
        return view('sabha', ['question' => $question]);
    }

    public function questionnaire($id, $i)
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
                    <button id='".$i."' href='".route('questionnaire',[$question->yes, $i])."' class='answer answer-yes' answer='yes'>yes</button>
                    <button id='".$i."' href='".route('questionnaire',[$question->no, $i])."' class='answer answer-no' answer='no'>no</button>
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
        return response()->json($i);
    }
}
