<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DataTables;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.question.index');
    }

    public function create()
    {
        $model = new Question;
        return view('admin.question.form', ['model' => $model]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => ['required', 'integer', 'unique:questions,id'],
            'question' => ['required', 'string'],
            'yes' => ['required'],
            'no' => ['required']
        ]);
        $model = Question::create($request->all());
        return response()->json($model);
    }

    public function edit($id)
    {
        $model = Question::findOrFail($id);
        return view('admin.question.form', ['model' => $model]);
    }

    public function update(Request $request, $id)
    {
        $model = Question::findOrFail($id);
        if($request->id!=$model->id){
            $this->validate($request, [
                'id' => ['required', 'integer', 'unique:questions,id']
            ]);
        }
        $this->validate($request, [
            'question' => ['required', 'string'],
            'yes' => ['required'],
            'no' => ['required']
        ]);
        $model = Question::findOrFail($id)->update($request->all());
        return response()->json($model);
    }

    public function delete($id)
    {
        $model = Question::findOrFail($id)->delete();
        return response()->json($model);
    }

    public function data()
    {
        $model = Question::get();
        return DataTables::of($model)
            ->addColumn('action', function($model){
                return
'<div class="btn-group" role="group">
    <button type="button" href="'.route('question.edit', $model->id).'" class="btn btn-primary btn-sm modal-show edit" name="Edit Data ke-'.$model->id.'">Edit</button>
    <button type="button" href="'.route('question.delete', $model->id).'" class="btn btn-danger btn-sm delete">Delete</button>
</div>';
            })
            ->addIndexColumn()
            ->removeColumn([])
            ->rawColumns([])
            ->make(true);
    }
}
