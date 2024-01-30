<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    public function index()
    {
        return view('page.pupuk.index', [
            'title' => 'Pupuk',
            'active' => 'pupuk',
            'data' => Pupuk::all()
        ]);
    }
    
    public function create(Request $re)
    {
        Pupuk::create([
            'pupuk' => $re->pupuk,
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $data = Pupuk::find($id);

        $data->update([
            'pupuk' => $re->pupuk,
        ]);
        return back();
    }

    public function destroy($id) 
    {
        $pupuk = Pupuk::find($id);
        $pupuk->delete();
        return back();
    }
}
