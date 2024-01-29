<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Pupuk;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\DataPemupukan;
use App\Models\RequRequirement;

class DataPemupukanController extends Controller
{
    public function index($id)
    {
        $pupuk = Pupuk::all();
        $actual = DataPemupukan::where('semester_id', $id)->where('status', 'actual')->get();
        $recomendation = DataPemupukan::where('semester_id', $id)->where('status', 'recomendation')->get();

        $semester = Semester::find($id);

        return view('page.pemupukan.index', [
            'field' => $semester->field_id,
            'divisi' => $semester->divisi_id,
            'estate' => $semester->estate_id,
            'title' => 'Pemupukan',
            'active' => 'pemupukan',
            'semester' => $id,
            'pupuks' => $pupuk,
            'actual' => $actual,
            'recomendation' => $recomendation,
            'data' => DataPemupukan::all()
        ]);
    }

    public function create(Request $re)
    {
        $trees = Field::find($re->field)->treess;

        DataPemupukan::create([
            'estate_id' => $re->estate,
            'divisi_id' => $re->divisi,
            'field_id' => $re->field,
            'semester_id' => $re->semester,
            'status' => $re->status,
            'pupuk_id' => $re->pupuk,
            'total' => $re->total,
            'req' => $re->total * $trees / 1000
        ]);


        return back();
    }

    public function update(Request $re, $id)
    {
        $data = DataPemupukan::find($id);
        $trees = Field::find($data->field_id)->treess;

        $data->update([
            'pupuk_id' => $re->pupuk,
            'total' => $re->total,
            'req' => $re->total*$trees/1000
        ]);
        return back();
    }
        
    public function destroy($id) 
    {
        DataPemupukan::find($id)->delete();
        return back();
    }
}
