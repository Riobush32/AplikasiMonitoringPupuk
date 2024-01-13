<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index ($id)
    {
        return view('page.divisi.index', [
            'title' => 'Divisi',
            'active' => 'divisi',
            'estate' => $id,
            'data' => Divisi::where('estate_id', $id)->latest()->get()
        ]);
    }

    public function create(Request $re)
    {
        Divisi::create([
            'divisi' => $re->devisi,
            'estate_id' => $re->estate,
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $devisi = Divisi::find($id);

        $devisi->update([
            'divisi' => $re->devisi,
        ]);
        return back();
    }

    public function destroy($id) 
    {
        Divisi::find($id)->delete();
        return back();
    }
}
