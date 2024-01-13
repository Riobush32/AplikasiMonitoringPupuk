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

        return view('page.pemupukan.index', [
            'title' => 'pemupukan',
            'active' => 'pemupukan',
            'semester' => $id,
            'pupuks' => $pupuk,
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
}
