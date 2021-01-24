<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Pertanyaan;
use App\Models\Pengisi;
use App\Models\Jawaban;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function responden()
    {
        return view('admin.responden.index');
    }

    public function answer()
    {
        return view('admin.answer.index');
    }
}
