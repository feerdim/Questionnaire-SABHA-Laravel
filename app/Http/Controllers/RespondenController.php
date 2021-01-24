<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Responden;
use App\Models\Answer;
use DataTables;

class RespondenController extends Controller
{
    public function index()
    {
        return view('admin.responden.index');
    }

    public function delete($id)
    {
        $model = Responden::findOrFail($id)->delete();
        return response()->json($model);
    }

    public function data()
    {
        $model = Responden::get();
        return DataTables::of($model)
        ->addColumn('result', function($model){
            $answer = Answer::where('respondens_id', $model->id)->latest('id')->first();
            if($answer==null){
                return '';
            }
            $question = Question::find($answer->questions_id);
            if($answer->answer){
                return $question->yes;
            }
            else{
                return $question->no;
            }
        })
        ->addColumn('question', function($model){
                $i=0;
                foreach($model->answers as &$answer){
                    $i++;
                    $many=$i;
                }
                $i=0;
                foreach($model->answers as &$answer){
                    $return[$i]=$answer->questions->question;
                    $i++;
                    if($many==$i){
                        return $return;
                    }
                }
            })
            ->addColumn('answer', function($model){
                $i=0;
                foreach($model->answers as $answer){
                    $i++;
                    $many=$i;
                }
                $i=0;
                foreach($model->answers as $answer){
                    if($answer->answer){
                        $return[$i] = 'yes';
                    }
                    else{
                        $return[$i] = 'no';
                    }
                    $i++;
                    if($many==$i){
                        return $return;
                    }
                }
            })
            ->addColumn('action', function($model){
                return 
'<div class="btn-group" role="group">
    <button type="button" href="#" class="btn btn-primary btn-sm detail">Detail</button>
    <button type="button" href="'.route('responden.delete', $model->id).'" class="btn btn-danger btn-sm delete">Delete</button>
</div>';
            })
            ->addIndexColumn()
            ->removeColumn([])
            ->make(true);
    }
}
