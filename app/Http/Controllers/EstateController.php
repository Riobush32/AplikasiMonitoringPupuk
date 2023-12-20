<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    public function index ()
    {
        return view('page.estate.index', [
            'title' => 'Estate',
            'active' => 'estate',
            'data' => Estate::all()
        ]);
    }

    public function create(Request $re)
    {
        Estate::create([
            'estate' => $re->estate
        ]);

        return back();
    }

    public function update(Request $re, $id)
    {
        $estate = Estate::find($id);

        $estate->update([
            'estate' => $re->estate,
        ]);

        return back();
    }


    public function destroy($id)
    {
        $estate = Estate::find($id);

        $estate->delete();
        return back();

    }

}


