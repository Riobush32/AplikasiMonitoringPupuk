<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="p-2">

    <h1 class="font-bold">PT. BAKRIE SUMATERA PLANTATION Tbk.</h1>
    <h1 class="font-bold">BAKERIE AGRIKULTURE REASEARCH INSTITUTE</h1>
    <h1 class="font-bold">Mature Oil Palm Fertilizer Recomendation 2023 Unit Sumut 1 Kisaran - Bugedge1 revision 1</h1>
    <h1 class="font-bold">Serbangan Estate</h1>

    <table class="border-collapse border border-slate-500 mt-5">
        <thead class="bg-slate-400 border border-black">
            <tr>
                <th class="border-2 border-black p-2" rowspan="2">Divisi</th>
                <th class="border-2 border-black p-2 " rowspan="2">Field No.</th>
                <th class="border-2 border-black p-2 " rowspan="2">Ha</th>
                <th class="border-2 border-black p-2 " rowspan="2">Total Palm</th>
                <th class="border-2 border-black p-2 " rowspan="2">SPH</th>
                <th class="border-2 border-black p-2 " rowspan="2">Matherial</th>
                <th class="border-2 border-black p-2 " rowspan="2">LSU No. Ref</th>
                <th class="border-2 border-black p-2 " rowspan="2">Type of Soil</th>
                <th class="border-2 border-black p-2 " rowspan="1" colspan="7">Fertilizer Recomendation 2023
                    (Kg/palm/year)</th>
                <th class="border-2 border-black p-2 " rowspan="1" colspan="7">Fertilizer Requirement 2023 (Ton)</th>
            </tr>
            <tr>
                <th class="border-2 border-black p-2" rowspan="1">NPK</th>
                <th class="border-2 border-black p-2" rowspan="1">Urea</th>
                <th class="border-2 border-black p-2" rowspan="1">Rp</th>
                <th class="border-2 border-black p-2" rowspan="1">Kies</th>
                <th class="border-2 border-black p-2" rowspan="1">Borate</th>
                <th class="border-2 border-black p-2" rowspan="1">CuSO4</th>
                <th class="border-2 border-black p-2" rowspan="1">Total</th>
                <th class="border-2 border-black p-2" rowspan="1">NPK</th>
                <th class="border-2 border-black p-2" rowspan="1">Urea</th>
                <th class="border-2 border-black p-2" rowspan="1">Rp</th>
                <th class="border-2 border-black p-2" rowspan="1">Kies</th>
                <th class="border-2 border-black p-2" rowspan="1">Borate</th>
                <th class="border-2 border-black p-2" rowspan="1">CuSO4</th>
                <th class="border-2 border-black p-2" rowspan="1">Total</th>
            </tr>
        </thead>
        <tbody class="border-2 border-black text-sm">
            @for ($i = 0; $i < 12; $i++) 
            <tr>
                <td class="border border-slate-700 text-center px-1">1</td>
                <td class="border border-slate-700 text-center px-1">P08001283</td>
                <td class="border border-slate-700 text-center px-1">26.0</td>
                <td class="border border-slate-700 text-center px-1">335</td>
                <td class="border border-slate-700 text-center px-1">134</td>
                <td class="border border-slate-700 text-center px-1">Costa Rica</td>
                <td class="border border-slate-700 text-center px-1">3</td>
                <td class="border-r-2 border-b-slate-700 border-black text-center px-1"
                    style="border-bottom-width: 1px;">Regusol</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border border-slate-700 text-center px-1">2.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border border-slate-700 text-center px-1">2.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border-r-2 border-b-slate-700 border-black text-center px-1"
                    style="border-bottom-width: 1px;">2.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border border-slate-700 text-center px-1">2.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border border-slate-700 text-center px-1">2.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
                <td class="border border-slate-700 text-center px-1">2.0</td>
                <td class="border border-slate-700 text-center px-1">3.0</td>
            </tr>
                @endfor

                {{-- SubTotal --}}
                <tr class="border-2 border-black">
                    <th class="border-2 border-black text center px-2" colspan="2">Sub Total</th>
                    <th class="border-2 border-black text center px-2">402</th>
                    <th class="border-2 border-black text center px-2">123</th>
                    <th class="border-2 border-black text center px-2">123</th>
                    <th class="border-2 border-black text center px-2" colspan="3"></th>
                    <th class="border-2 border-black text center px-2">1232</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>
                    <th class="border-2 border-black text center px-2"> 2312</th>

                    
                </tr>

        </tbody>
    </table>

    @livewireScripts
</body>

</html>
