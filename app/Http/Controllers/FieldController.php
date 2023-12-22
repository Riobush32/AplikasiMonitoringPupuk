<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index ($id)
    {
        return view('page.field.index', [
            'title' => 'Field',
            'active' => 'field',
            'estate' => $id,
            'data' => Field::where('estate_id', $id)->latest()->get()
        ]);
    }

    public function create (Request $re)
    {
        Field::create([
            'estate_id' => $re->estate,
            'field_no' => $re->field_no,
            'field_bantu' => $re->field_bantu,
            'hektar' => $re->hektar,
            'treess' => $re->treess,
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $field = Field::find($id);

        $field->update([
            'field_no' => $re->field_no,
            'field_bantu' => $re->field_bantu,
            'hektar' => $re->hektar,
            'treess' => $re->treess,
        ]);
        return back();
    }

    public function destroy($id) 
    {
        Field::find($id)->delete();
        return back();
    }
}
