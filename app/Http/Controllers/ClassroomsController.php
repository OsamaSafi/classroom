<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClassroomsController extends Controller
{
    //
    public function index()
    {
        $classrooms = Classroom::orderBy('created_at', "DESC")->get();
        return view('classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('cover_image')) {
            $file = $request->cover_image;
            $path = $file->store('/covers', 'public');
            $request->merge([
                'cover_image' => $path
            ]);
        }
        $request->merge([
            'code' => Str::random(8),
        ]);
        Classroom::create($request->all());
        return redirect()->route('classrooms.index')->with('info', "Classroom is created!");
    }

    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, int $id)
    {
        // $classroom = $id;
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());

        return redirect()->route('classrooms.index')->with('info', 'Classroom is updated!');
    }



    public function show(int $id)
    {
        // $classroom = $id;
        $classroom = Classroom::findOrFail($id);

        return view('classrooms.show', compact('classroom'));
    }



    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('info', 'classroom is deleted');
    }
}
