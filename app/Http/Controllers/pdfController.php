<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;
use Barryvdh\DomPDF\Facade\Pdf  as PDF;
use App\Models\ActivitiesModel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class pdfController extends Controller
{
    public function fc_verpdf(Request $request, $parametro){
        $url = URL::current();
        $ultima_parte = substr($url, strrpos($url, '/') + 1);
        $sedefecha = DB::table('cundinamarca.listaphs')
            ->select('Sedefecha')  // Asegúrate de que 'Sedefecha' es el nombre correcto de la columna
            ->where('Id', $parametro)
            ->first();
        $resultado = DB::table('cundinamarca.listaphs')
            ->where('Sedefecha', $sedefecha->Sedefecha)
            ->orderBy(DB::raw('CAST(SUBSTRING_INDEX(TRIM(TRAILING \'.\' FROM Codigo), ".", 1) AS UNSIGNED)'))
            ->orderBy(DB::raw('CAST(SUBSTRING_INDEX(TRIM(TRAILING \'.\' FROM Codigo), ".", -1) AS UNSIGNED)'))
            ->get();

        
        // Cargar la vista y generar el PDF
        $pdf = PDF::loadView('pdfView', ["variable"=>$resultado])->setPaper('a4', 'landscape');

        // Mostrar o descargar el PDF
        return $pdf->stream();
    }

   
}
