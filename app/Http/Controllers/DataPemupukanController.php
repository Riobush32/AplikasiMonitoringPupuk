<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use Illuminate\Http\Request;
use App\Models\DataPemupukan;

class DataPemupukanController extends Controller
{
    public function index($id)
    {
        $pupuk = Pupuk::all();
        $actual = DataPemupukan::where('status', 'actual')->get();
        $recomendation = DataPemupukan::where('status', 'recomendation')->get();

        return view('page.pemupukan.index', [
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
        DataPemupukan::create([
            'semester_id' => $re->semester,
            'status' => $re->status,
            'pupuk_id' => $re->pupuk,
            'total' => $re->total
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $data = DataPemupukan::find($id);

        $data->update([
            'pupuk_id' => $re->pupuk,
            'total' => $re->total,
        ]);
        return back();
    }
        
    public function destroy($id) 
    {
        DataPemupukan::find($id)->delete();
        return back();
    }
}
