<?php

namespace App\Http\Controllers;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index()
    {
        //get posts
        $prodi = ProgramStudi::latest()->paginate(5);

        //render view with posts
        return view('program_studi/index', compact('prodi'));
    }
}
