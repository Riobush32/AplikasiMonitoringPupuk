<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Pupuk;
use App\Models\Divisi;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\DataPemupukan;

class LaporanController extends Controller
{
    public function index(Request $re)
    {
        $varSemester = Semester::whereBetween('date', [$re->start, $re->end])->where('estate_id', $re->estate);
        $semester = $varSemester->get();
        $divisi = $varSemester->distinct('divisi_id')->orderBy('divisi_id')->pluck('divisi_id')->toArray();

        $pemupukan = DataPemupukan::all();
        $pupuks = Pupuk::all();
        $totalPupuk = $pupuks->count();

        if($re->status == 'recomendation'){
            ///////////////////////////////////
            $dataPcs = array();
            foreach($divisi as $key => $div){
                foreach ($pupuks as $key => $pupuk) {
                    
                    $data = DataPemupukan::where('divisi_id', $div)->where('pupuk_id', $pupuk->id)->where('status', 'recomendation')->get();

                    $total = $data->sum('total');
                    $req = $data->sum('req');
                    
                    $dataPcs[] = ['divisi' => $div, 'total' => $total, 'req' => $req];
                    }
                }
            //////////////////////////////////
            // return dd($dataPcs);


            
            return view('page.laporan.laporan',[
                'divisis' => $divisi,
                'pemupukan' => $pemupukan,
                'semester' => $semester,
                'pupuks' => $pupuks,
                'totalPupuk' => $totalPupuk,
                'dataPcs' => $dataPcs
            ]);
        }
    }
}
