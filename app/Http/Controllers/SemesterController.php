<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index ($id)
    {
        $field = Field::where('id', $id)->first();

        return view('page.semester.index', [
            'title' => 'Semester',
            'active' => 'semester',
            'field' => $id,
            'divisi' => $field->divisi_id,
            'estate' => $field->estate_id,
            'data' => Semester::where('field_id', $id)->latest()->get()
        ]);
    }

    public function create (Request $re)
    {
        Semester::create([
            'estate_id' => $re->estate,
            'divisi_id' => $re->divisi,
            'field_id' => $re->field_id,
            'semester' => $re->semester,
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
