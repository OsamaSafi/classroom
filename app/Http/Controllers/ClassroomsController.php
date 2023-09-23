<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    //
    public function index()
    {
        return view('classrooms.index');
    }

    public function create()
    {
        return view('classrooms.create');
    }
    public function show($id)
    {
        return view('classrooms.show');
    }
}
