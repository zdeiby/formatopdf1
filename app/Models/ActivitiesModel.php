<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class ActivitiesModel extends Model
{
    use HasFactory;
    // Define la tabla asociada al modelo (opcional si sigues las convenciones de Laravel)
   // protected $table = 'nombre_de_la_tabla';

    // Constructor para inicializar la conexión a la base de datos
    public function __construct()
    {
        parent::__construct();
    }

    // Función para buscar noticias de contacto
    public function leerActivities($url)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('SELECT * from t_informeactividades WHERE cedula="'.$url.'"' );

        return $resultado;
    }
    public function guardarActivities($cc,$obj,$activity,$foto){
        $resultado = DB::insert('INSERT into t_informeactividades (cedula, objeto,actividad,foto) VALUES ("'.$cc.'", "'.$obj.'","'.$activity.'","'.$foto.'")');
        return $resultado;
    }

    public function leerDatos(){
        $resultado = DB::select('SELECT * from t_informeactividades');
        return $resultado;
    }

    public function leerparaeditar($id){
        $resultado = DB::select('SELECT * from t_informeactividades WHERE id="'.$id.'"');
        return $resultado; 
    }

    public function editarActivities($id,$obj,$activity,$foto){
        $resultado = DB::insert('UPDATE t_informeactividades SET objeto="'.$obj.'" , actividad="'.$activity.'", foto="'.$foto.'" where id="'.$id.'";');
        return $resultado;
    }

    public function eliminar($id){
        $resultado = DB::delete('DELETE FROM t_informeactividades WHERE id="'.$id.'";');
        return $resultado;
    }
}
