<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Responden;
use App\Models\Answer;
use DataTables;
use Rap2hpoutre\FastExcel\FastExcel;
use Rap2hpoutre\FastExcel\SheetCollection;

class ResultController extends Controller
{
    public function index()
    {
        return view('admin.result.index');
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
                        $return[$i] = 'iya';
                    }
                    else{
                        $return[$i] = 'tidak';
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
    <button type="button" href="'.route('result.delete', $model->id).'" class="btn btn-danger btn-sm delete">Delete</button>
</div>';
            })
            ->addIndexColumn()
            ->removeColumn([])
            ->make(true);
    }

    public function export()
    {
        $answers = Answer::get();
        $i = 0;
        foreach($answers as $answer){
            $model[$i]['no'] = $i+1;
            $model[$i]['name'] = Responden::find($answer->respondens_id)->name;
            $model[$i]['email'] = Responden::find($answer->respondens_id)->email;
            $model[$i]['question'] = Question::find($answer->questions_id)->question;
            if($answer->answer){
                $model[$i]['answer'] = 'iya';
            }
            else{
                $model[$i]['answer'] = 'tidak';
            }
            $model[$i]['created_at'] = date($answer->created_at);
            $model[$i]['updated_at'] = date($answer->updated_at);
            $i++;
        }
        $responden = Responden::get();
        $sheets = new SheetCollection([
            $model,
            $responden
        ]);
        return (new FastExcel($sheets))->download('file.xlsx');
    }
}
