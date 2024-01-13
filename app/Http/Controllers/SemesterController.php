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
            'date' => $re->date,
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $field = Semester::find($id);

        $field->update([
            'field_id' => $re->field_id,
            'semester' => $re->semester,
            'date' => $re->date,
        ]);
        return back();
    }

    public function destroy($id) 
    {
        Semester::find($id)->delete();
        return back();
    }
}
