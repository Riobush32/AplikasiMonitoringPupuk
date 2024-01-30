<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Divisi;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index ($id)
    {
        $estate_id = Divisi::where('id', $id)->first()->estate_id;

        return view('page.field.index', [
            'title' => 'Field',
            'active' => 'field',
            'divisi' => $id,
            'estate_id' => $estate_id,
            'data' => Field::where('divisi_id', $id)->latest()->get()
        ]);
    }

    public function create (Request $re)
    {
        $treess = $re->treess;
        $hektar = $re->hektar;
        $sph = $treess / $hektar;

        Field::create([
            'estate_id' => $re->estate_id,
            'divisi_id' => $re->divisi,
            'field_no' => $re->field_no,
            'field_bantu' => $re->field_bantu,
            'jenis' => $re->jenis,
            'hektar' => $hektar,
            'treess' => $treess,
            'sph' => $sph
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $field = Field::find($id);

        $treess = $re->treess;
        $hektar = $re->hektar;
        $sph = $treess / $hektar;

        $field->update([
            'field_no' => $re->field_no,
            'field_bantu' => $re->field_bantu,
            'hektar' => $hektar,
            'treess' => $treess,
            'sph' => $sph,
            'jenis' => $re->jenis
        ]);
        return back();
    }

    public function destroy($id) 
    {
        Field::find($id)->delete();
        return back();
    }
}
