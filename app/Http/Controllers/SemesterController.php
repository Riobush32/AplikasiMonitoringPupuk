<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index ($id)
    {
        return view('page.semester.index', [
            'title' => 'Semester',
            'active' => 'semester',
            'field' => $id,
            'data' => Semester::where('field_id', $id)->latest()->get()
        ]);
    }

    public function create (Request $re)
    {
        Semester::create([
            'field_id' => $re->field_id,
            'semester' => $re->semester,
            'sph' => $re->sph,
            'matherial' => $re->matherial,
            'type_of_soil' => $re->tos,
            'slu' => $re->slu,
            'date' => $re->date,
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $data = Semester::find($id);

        $data->update([
            'field_id' => $re->field_id,
            'semester' => $re->semester,
            'sph' => $re->sph,
            'matherial' => $re->matherial,
            'type_of_soil' => $re->tos,
            'slu' => $re->slu,
            'date' => $re->date,
        ]);
        return back();
    }

    public function destroy($id) 
    {
        Semester::find($id)->delete();
        return back();
    }

    public function print()
    {
        return view('page.semester.laporan');
    }
}
