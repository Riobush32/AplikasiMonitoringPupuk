<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Field;
use App\Models\Pupuk;
use App\Models\Divisi;
use App\Models\Estate;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\DataPemupukan;

class LaporanController extends Controller
{
    public function index(Request $re)
    {
        $fieldSelection = Field::where('jenis', $re->jenis)->distinct('id')->orderBy('id')->pluck('id')->toArray();

        $varSemester = Semester::whereBetween('date', [$re->start, $re->end])->where('estate_id', $re->estate)->whereIn('field_id', $fieldSelection);
        $semester = $varSemester->get();
        $divisi = $varSemester->distinct('divisi_id')->orderBy('divisi_id')->pluck('divisi_id')->toArray();

        $pemupukan = DataPemupukan::all();
        $pupuks = Pupuk::all();
        $totalPupuk = $pupuks->count();

        $estate = Estate::find($re->estate)->estate;

        $tahunAwal = Carbon::parse($re->start)->format('Y');
        $tahunAkhir = Carbon::parse($re->end)->format('Y');

        // Start Recomendation
        if($re->status == 'recomendation'){
        //////////////////////////////////////////////////////////
            $dataPcs = array();
            foreach($divisi as $key => $div){
                foreach ($pupuks as $key => $pupuk) {
                    
                    $data = DataPemupukan::where('divisi_id', $div)
                                ->where('pupuk_id', $pupuk->id)
                                ->where('status', 'recomendation')
                                ->whereIn('field_id', $fieldSelection)->get();

                    $total = $data->sum('total');
                    $req = $data->sum('req');
                    
                    $dataPcs[] = ['divisi' => $div, 'total' => $total, 'req' => $req];
                    }
                }
        //////////////////////////////////////////////////////////
        // return dd($dataPcs);


            
            return view('page.laporan.laporan-recomendasi',[
                'divisis' => $divisi,
                'pemupukan' => $pemupukan,
                'semester' => $semester,
                'pupuks' => $pupuks,
                'totalPupuk' => $totalPupuk,
                'dataPcs' => $dataPcs,
                'estate' => $estate,
                'tahunAwal' => $tahunAwal,
                'tahunAkhir' => $tahunAkhir,
            ]);
        }

        // End Recomendation

        // Start Actual

        if ($re->status == 'actual') {
            // divisi
            // pemupukan
            // semester
            // pupuk
            // total pupuk

            //////////////////////////////////////////////////////////////
            $dataPcs = array();
            foreach($divisi as $key => $div){
                foreach ($pupuks as $key => $pupuk) {
                    
                    $data = DataPemupukan::where('divisi_id', $div)
                                ->whereIn('field_id', $fieldSelection)
                                ->where('pupuk_id', $pupuk->id)
                                ->where('status', 'actual')->get();

                    $total = $data->sum('total');
                    
                    $dataPcs[] = ['divisi' => $div, 'total' => $total];
                    }
                }
            //////////////////////////////////////////////////////////////


            return view('page.laporan.laporan-actual',[
                'divisis' => $divisi,
                'semester' => $semester,
                'totalPupuk' => $totalPupuk,
                'pupuks' => $pupuks,
                'pemupukan' => $pemupukan,
                'dataPcs' => $dataPcs,
                'estate' => $estate,
                'tahunAwal' => $tahunAwal,
                'tahunAkhir' => $tahunAkhir,
            ]);
        }

        if ($re->status == 'vs') {

            //////////////////////////////////////////////////////////////
            $dataPcs = array();
            foreach($divisi as $key => $div){
                foreach ($pupuks as $key => $pupuk) {
                    
                    $requairetment = DataPemupukan::where('divisi_id', $div)
                                        ->whereIn('field_id', $fieldSelection)
                                        ->where('pupuk_id', $pupuk->id)
                                        ->where('status', 'recomendation')->get();
                    $totalReq = $requairetment->sum('req');

                    $actual = DataPemupukan::where('divisi_id', $div)
                                ->whereIn('field_id', $fieldSelection)
                                ->where('pupuk_id', $pupuk->id)
                                ->where('status', 'actual')->get();
                    $totalActual = $actual->sum('total');
                    
                    
                    $dataPcs[] = ['divisi' => $div, 'totalReq' => $totalReq, 'totalActual' => $totalActual];
                    }
                }
            //////////////////////////////////////////////////////////////
            $vs = array();
            foreach ($divisi as $key => $div) {
                foreach ($semester as $key => $sem) {
                    foreach ($pupuks as $key => $pupuk) {
                        $dataReqObject = DataPemupukan::where('divisi_id', $div)
                                        ->where('semester_id', $sem->id)
                                        ->where('pupuk_id', $pupuk->id)
                                        ->where('status', 'recomendation')
                                        ->first();
                        $dataActualObject = DataPemupukan::where('divisi_id', $div)
                                        ->where('semester_id', $sem->id)
                                        ->where('pupuk_id', $pupuk->id)
                                        ->where('status', 'actual')
                                        ->first();

                        $dataReq = $dataReqObject ? $dataReqObject->req : 0;
                        $dataActual = $dataActualObject && $dataActualObject->total ? $dataActualObject->total : 0;


                        if ($dataReq != 0 && $dataActual != 0) {
                            $dataVs = $dataReq / $dataActual * 100;
                        }else{
                            $dataVs = '0';
                        }
                        $vs[] = ['divisi' => $div, 'semester' => $sem->id, 'pupuk' => $pupuk->id, 'dataVs' => $dataVs];

                    }
                }
            }
            /////////////////////////////////////////////////////////////
            // return dd($vs);

                return view('page.laporan.laporan-vs',[
                'divisis' => $divisi,
                'semester' => $semester,
                'totalPupuk' => $totalPupuk,
                'pupuks' => $pupuks,
                'pemupukan' => $pemupukan,
                'dataPcs' => $dataPcs,
                'estate' => $estate,
                'tahunAwal' => $tahunAwal,
                'tahunAkhir' => $tahunAkhir,
                'dataVs' => $vs,
            ]);
        }
    }
}
