<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;
use Barryvdh\DomPDF\Facade\Pdf  as PDF;
use App\Models\ActivitiesModel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


class pdfController extends Controller
{

    // public function leerActividadespdf(Request $request,$parametro){
    //     $data = [
    //         'titulo' => '',
    //         'contenido' => 'Este es un ejemplo de contenido para el informe de categoría.',
    //         'fecha' => date('Y-m-d'),
    //         'imagen_url' => 'https://www.fisicalinda.com/wp-content/uploads/2018/10/image009.jpg'
    //     ];
    //     return view('pdfView',["variable"=>$data]);
    // }
    public function fc_verpdf(Request $request, $parametro){
        $url = URL::current();
        $ultima_parte = substr($url, strrpos($url, '/') + 1);
        $urlAPi='https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/infopersonal/c_infopersonalapi/fc_info?documento='.$ultima_parte.'';
        $response = Http::get($urlAPi);
        $datosApi = $response->json();

        $meses_espanol = [
            "01" => "enero",
            "02" => "febrero",
            "03" => "marzo",
            "04" => "abril",
            "05" => "mayo",
            "06" => "junio",
            "07" => "julio",
            "08" => "agosto",
            "09" => "septiembre",
            "10" => "octubre",
            "11" => "noviembre",
            "12" => "diciembre",
            "1" => "ENERO",
            "2" => "FEBRERO",
            "3" => "MARZO",
            "4" => "ABRIL",
            "5" => "MAYO",
            "6" => "JUNIO",
            "7" => "JULIO",
            "8" => "AGOSTO",
            "9" => "SEPTIEMBRE",
            "10" => "OCTUBRE",
            "11" => "NOVIEMBRE",
            "12" => "DICIEMBRE"
        ];
        $fecha_actual = Carbon::now();
        $ultimo_dia_mes_actual = $fecha_actual->endOfMonth()->day;
        $nombre_mes_actual = $fecha_actual->month;

        $numinforme=$nombre_mes_actual-$datosApi[0]['fechainicioM']+1;
        
        $datoslistos=[
          'nombre'=>$datosApi[0]['apellido1'].' '.$datosApi[0]['apellido2'].' '.$datosApi[0]['nombre1'].' '.$datosApi[0]['nombre2'], 
           'objeto'=>$datosApi[0]['cargo'],
           'porcentaje'=>$datosApi[0]['porcentaje'],
           'contrato'=>$datosApi[0]['contrato'].'-'.$datosApi[0]['fechaterminacionA'],
           'duracion'=>'Del '.$datosApi[0]['fechainicioD'].' de '.$meses_espanol[$datosApi[0]['fechainicioM']].' al '.$datosApi[0]['fechaterminacionD'].' de '.$meses_espanol[$datosApi[0]['fechaterminacionM']]. ' de '  .$datosApi[0]['fechaterminacionA'],
            'periodoacobrar'=>'DEL '.(($nombre_mes_actual-$datosApi[0]['fechainicioM'] == '0')?$datosApi[0]['fechainicioD']:'1') .' AL '.$ultimo_dia_mes_actual.' DE '.$meses_espanol[$nombre_mes_actual].' DE '.$datosApi[0]['fechaterminacionA'],
            'fecha'=>$ultimo_dia_mes_actual.' DE '.$meses_espanol[$nombre_mes_actual].' ' .$datosApi[0]['fechaterminacionA'],
            'informe'=>$numinforme,
            'nombreapellido'=>$datosApi[0]['nombre1'].' '.$datosApi[0]['nombre2'].' '.$datosApi[0]['apellido1'].' '.$datosApi[0]['apellido2'],
            'cedula'=>$datosApi[0]['documento'],
        ];
        $modelo = new ActivitiesModel();
        $datosBD = $modelo->leerActivities($ultima_parte);
        // Cargar la vista y generar el PDF
        $pdf = PDF::loadView('pdfView', ["variable"=>$datosBD,"datoslistos"=>$datoslistos ,"api"=>$datosApi])->setPaper('a4', 'landscape');

        // Mostrar o descargar el PDF
        return $pdf->stream();
    }

   
}
