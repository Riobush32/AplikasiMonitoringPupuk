<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="{{ asset('/build/assets/app-46acd385.css') }}">
</head>

<body class="p-2">

    <h1 class="font-bold">PT. BAKRIE SUMATERA PLANTATION Tbk.</h1>
    <h1 class="font-bold">BAKERIE AGRIKULTURE REASEARCH INSTITUTE</h1>
    <h1 class="font-bold">Mature Oil Palm Fertilizer Recomendation {{ $tahunAwal }} - {{ $tahunAkhir }} Unit Sumut 1 Kisaran - Bugedge1 revision 1</h1>
    <h1 class="font-bold">{{ $estate }}</h1>

    <table class="border-collapse border border-slate-500 mt-5">
        <thead class="bg-slate-400 border border-black">
            <tr>
                <th class="border-2 border-black p-2" rowspan="2">Divisi</th>
                <th class="border-2 border-black p-2 " rowspan="2">Field No.</th>
                <th class="border-2 border-black p-2 " rowspan="2">Ha</th>
                <th class="border-2 border-black p-2 " rowspan="2">Total Palm</th>
                <th class="border-2 border-black p-2 " rowspan="1" colspan="{{ $totalPupuk+1 }}">Fertilizer
                    Recomendation
                    2023
                    (Kg/palm/year)</th>
                <th class="border-2 border-black p-2 " rowspan="1" colspan="{{ $totalPupuk+1 }}">Actual Fertilizer
                    2023 (Ton)</th>
                <th class="border-2 border-black p-2 " rowspan="1" colspan="{{ $totalPupuk+1 }}">Recomendation Vs Actual (%)</th>
            </tr>
            <tr>
                @foreach ($pupuks as $pupuk)
                <th class="border-2 border-black p-2" rowspan="1">{{ $pupuk->pupuk }}</th>
                @endforeach
                <th class="border-2 border-black p-2" rowspan="1">Total</th>
                @foreach ($pupuks as $pupuk)
                <th class="border-2 border-black p-2" rowspan="1">{{ $pupuk->pupuk }}</th>
                @endforeach
                <th class="border-2 border-black p-2" rowspan="1">Total</th>
                @foreach ($pupuks as $pupuk)
                <th class="border-2 border-black p-2" rowspan="1">{{ $pupuk->pupuk }}</th>
                @endforeach
                <th class="border-2 border-black p-2" rowspan="1">Total</th>
            </tr>
        </thead>
        <tbody class="border-2 border-black text-sm">
            @foreach ($divisis as $divisi)
            @php
            $totalHektar = 0;
            $totalTrees = 0;
            $totalSph = 0;
            $totrecom = 0;
            $totRequest = 0;
            @endphp
            @foreach ($semester->where('divisi_id', $divisi) as $item)
            <tr>
                <td class="border border-slate-700 text-center px-1">{{ $item->divisis->divisi }}</td>
                <td class="border border-slate-700 text-center px-1">{{ $item->fields->field_no }}</td>
                <td class="border border-slate-700 text-center px-1">{{ $item->fields->hektar }}</td>
                <td class="border border-slate-700 text-center px-1">{{ $item->fields->treess }}</td>

                {{-- ----------------------------------------------------------------------------------------- --}}
                {{-- Recomendation --}}
                @php
                $total = 0;
                $totReq = 0;
                $totalHektar += $item->fields->hektar;
                $totalTrees += $item->fields->treess;
                $totalSph += $item->sph;
                @endphp
                @foreach ($pupuks as $pupuk)
                @php
                // /////////////////////////////////////////////////////////////////////////////////
                $dataPemupukan = $pemupukan->where('semester_id', $item->id)
                ->where('status', 'recomendation')
                ->where('pupuk_id', $pupuk->id)
                ->first();


                @endphp
                @if ($dataPemupukan != null)
                @php
                $total += $dataPemupukan->req;

                @endphp
                <td class="border border-slate-700 text-center px-1">{{ number_format($dataPemupukan->req, 2) }}</td>
                @else
                <td class="border border-slate-700 text-center px-1"> 0 </td>
                @endif

                @endforeach
                <td class="border border-slate-700 text-center px-1">{{ number_format($total, 2) }}</td>


                @foreach ($pupuks as $pupuk)
                @php
                ////////////////////////////////////////////////////////////////////////////////////////////////
                $dataPemupukan = $pemupukan->where('semester_id', $item->id)
                ->where('status', 'actual')
                ->where('pupuk_id', $pupuk->id)
                ->first();


                @endphp
                @if ($dataPemupukan != null)
                @php
                $totReq += $dataPemupukan->total;

                @endphp
                <td class="border border-slate-700 text-center px-1">{{ number_format($dataPemupukan->total, 2) }}</td>
                @else
                <td class="border border-slate-700 text-center px-1"> 0 </td>
                @endif

                @endforeach
                <td class="border border-slate-700 text-center px-1">{{ number_format($totReq, 2) }}</td>

                @foreach ($pupuks as $pupuk)
                @php
                ////////////////////////////////////////////vs////////////////////////////////////////////////////
                $id_pupuk = $pupuk->id;
                $id_semester = $item->id;
                $dataXvs = collect($dataVs);
                $dataVss = $dataXvs->filter(function($v) use ($id_pupuk, $divisi, $id_semester) {
                return $v['pupuk'] == $id_pupuk && $v['divisi'] == $divisi && $v['semester'] == $id_semester;
                });
                

                
                @endphp
                @if ($dataVss != null)
                @foreach ($dataVss as $vss)
                    <td class="border border-slate-700 text-center ">{{ number_format($vss['dataVs'], 2) }} %</td>
                @endforeach
                @else
                <td class="border border-slate-700 text-center px-1"> 0 </td>
                @endif
                
                @endforeach
                @if ($totReq != 0)
                <td class="border border-slate-700 text-center px-1">{{ number_format($total / $totReq * 100, 2) }}%</td>
                @else
                <td class="border border-slate-700 text-center px-1"> - </td>
                @endif
                
                @php
                /////////////////////////////////////////////////////////////////////////////////////////////////

                $totrecom += $total;
                $totRequest += $totReq;
                @endphp
            </tr>
            @endforeach

            {{-- --------------------------------------------------------------------------------- --}}
            {{-- SubTotal --}}

            <tr class="border-2 border-black">
                <th class="border-2 border-black text center px-2" colspan="2">Sub Total</th>
                <th class="border-2 border-black text center px-2">{{ $totalHektar }}</th>
                <th class="border-2 border-black text center px-2">{{ $totalTrees }}</th>
                @foreach ($dataPcs as $item)
                @if ($item['divisi'] == $divisi)
                <th class="border-2 border-black text center px-2">{{ number_format($item['totalReq'], 2) }}</th>
                @endif
                @endforeach
                <th class="border-2 border-black text center px-2">{{ number_format($totrecom, 2) }}</th>

                @foreach ($dataPcs as $item)
                @if ($item['divisi'] == $divisi)
                <th class="border-2 border-black text center px-2">{{ number_format($item['totalActual'], 2) }}n</th>
                @endif
                @endforeach
                <th class="border-2 border-black text center px-2">{{ number_format($totRequest, 2) }}</th>



            </tr>
            @endforeach
        </tbody>
    </table>

    
    <script>
        window.print()
    </script>
</body>

</html>