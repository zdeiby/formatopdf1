

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Condiciones Higiénico Sanitarias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/logomi.png" "="">
</head>
<body>


<!-- Resto del contenido del PDF -->

    <style>
        *{
            font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
        }
        @page{
            margin:3cm 1cm 0.4cm 1cm;
        }
        #header{
            position:fixed;
            top:-2.5cm;
            left:0cm;
            bottom: 0cm;
            right: 0cm;
            z-index: -1; 
        }

        .diagonal-split {
            position: relative;
            width: 69px; /* Ajusta el ancho según sea necesario */
            height: 60px; /* Ajusta la altura según sea necesario */
            border: 1px solid black;
            overflow: hidden;
        }

        .diagonal-split::before {
            content: "";
            position: absolute;
            top: 0%;
            left: 0%;
            width: 141%;
            height: 141%;
            background: white;
            transform: rotate(45deg);
            transform-origin: 0 0;
            border-left: 1px solid black;
            border-top: 1px solid black;
        }
 


    </style>


    <div id="header">
    <table style="width: 100%; border:1px solid black;font-size:12px;" class="content mb-3">
    <tr>
        <td style="border:1px solid black; font-weight:bold; padding:20px; width: 40%;">
            <img src="{{ asset('imagenes/logogober.png') }}" alt=""  width="46%">
            <img src="{{ asset('imagenes/logoudea.png') }}" alt=""  width="46%"></td>
        <td style="border:1px solid black; font-weight:bold; padding:20px; width: 70%;">FORMATO PERFIL HIGIÉNICO SANITARIO Y OTRAS CONDICIONES CONTRACTUALES</td>

        <td style="border:1px solid black; text-align:center; padding: 10px; width: 20%;">
            <div>Número1</div>
            <div>Mayo 30 / 2024</div>
            <div>Versión 1</div>
        </td>
        
    </tr>
</table>
<br>
    </div>
<br>
 



<table style="width: 100%; border-collapse: collapse; font-size: 10px; padding-bottom: 5px;">
    <tr>
        <!-- Columna izquierda -->
        <td style="width: 18%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 50%; text-align:center; vertical-align: middle; height:25px;">FECHA VISITA:</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center; vertical-align: middle;"></td>
                </tr>
            </table>
        </td>

        <td style="width: 16%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 50%; text-align:center; height:25px;">HORA INICIAL:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>

        <td style="width: 16%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 50%; text-align:center;">HORA FINAL:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>

        <td style="width: 20%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 30%; height:25px; text-align:center;">UBICACIÓN:</td>
                    <td style="border: 1px solid black; padding: 5px;">Urbano</td>
                    <td style="border: 1px solid black; padding: 5px;">Rural</td>
                </tr>
            </table>
        </td>

        <!-- Columna derecha -->
        <td style="width: 20%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">TIPO DE VISITA:</td>
                    <td style="border: 1px solid black; padding: 5px;">Progra</td>
                    <td style="border: 1px solid black; padding: 5px;">PQRS</td>
                    <td style="border: 1px solid black; padding: 5px;">Otro</td>
                </tr>
            </table>
        </td>

        <td style="width: 15%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">Número de Visita</td>
                    <td style="border: 1px solid black; padding: 5px;">1</td>
                    <td style="border: 1px solid black; padding: 5px;">2</td>
                </tr>
            </table>
        </td>

        <td style="width: 15%; vertical-align: top;">
            <table style="width: 97%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; height:25px; text-align:center;">Sede Unificada</td>
                    <td style="border: 1px solid black; padding: 5px;">Sí</td>
                    <td style="border: 1px solid black; padding: 5px;">No</td>
                </tr>
            </table>
        </td>
    </tr>
</table>











<table style="width: 100%; border-collapse: collapse; font-size: 12px; padding-bottom: 5px;">
    <tr>
        <!-- Columna izquierda -->
        <td style="width: 43%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%;  text-align:center;">DANE INSTITUCIÓN:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">DANE SEDE:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">NÚMERO DE OPERACIÓN:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>

        <!-- Separación -->
        <td style="width: 4%;"></td>

        <!-- Columna derecha -->
        <td style="width: 48%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">NOMBRE INSTITUCIÓN:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">NOMBRE SEDE:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 40%; text-align:center;">OPERADOR:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>







<table style="width: 100%; border-collapse: separate; border-spacing: 3px; font-size: 10px; padding-bottom: 5px;">
    <tr>
        <!-- Columna 1: Focalizados -->
        <td style="width: 15%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 50%; height:36px;">FOCALIZADOS:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>

        <!-- Columna 2: Atendidos -->
        <td style="width: 15%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 50%;height:36px;">ATENDIDOS:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>

        <!-- Columna 3: Corresponde la cantidad de usuarios -->
        <td style="width: 30%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 60%;">CORRESPONDE LA CANTIDAD DE USUARIOS FOCALIZADOS CON LOS ATENDIDOS?</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">Sí</td>
                    <td style="border: 1px solid black; padding: 5px; text-align: center;">No</td>
                </tr>
            </table>
        </td>

        <!-- Columna 4: Fecha última visita -->
        <td style="width: 20%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 70%;height:36px;">FECHA ÚLTIMA VISITA AUTORIDAD SANITARIA:</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>

        <!-- Columna 5: % Obtenido Autoridad Sanitaria -->
        <td style="width: 20%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 50%;">% OBTENIDO AUTORIDAD SANITARIA</td>
                    <td style="border: 1px solid black; padding: 5px;"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>







<table style="width: 100%; border-collapse: collapse; font-size: 10px; text-align: center; margin-bottom: 5px;">
    <tr>
        <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 12.5%;">Modalidad</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">AM</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">PM</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">JU</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">RI</td>
        <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 12.5%;">Menú</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">S</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">M</td>
    </tr>
</table>

<table style="width: 100%; border-collapse: collapse; font-size: 10px; text-align: center; margin-bottom: 5px;">
    <tr>
        <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 12.5%;">Modalidad<br>Sede Unificada 1</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">AM</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">PM</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">JU</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">RI</td>
        <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 12.5%;">Menú</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">S</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">M</td>
    </tr>
</table>

<table style="width: 100%; border-collapse: collapse; font-size: 10px; text-align: center; padding-bottom: 5px;">
    <tr>
        <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 12.5%;">Modalidad<br>Sede Unificada</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">AM</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">PM</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">JU</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">RI</td>
        <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; width: 12.5%;">Menú</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">S</td>
        <td style="border: 1px solid black; padding: 5px; width: 12.5%;">M</td>
    </tr>
</table>









<table style="width: 100%; border-collapse: collapse; font-size: 10px; text-align: center; ">
    <tr>
        <!-- Columna 1: Cantidad Manipuladores evidenciados -->
        <td style="width: 25%; vertical-align: top; padding-bottom: 5px;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 70%; height:25px;">Cantidad Manipuladores evidenciados</td>
                    <td style="border: 1px solid black; padding: 5px; width: 30%;"></td>
                </tr>
            </table>
        </td>
        
        <!-- Columna 2: Concepto Autoridad Sanitaria -->
        <td style="width: 50%; vertical-align: top; padding-bottom: 5px;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 25%;">CONCEPTO AUTORIDAD SANITARIA</td>
                    <td style="border: 1px solid black; padding: 5px; width: 10%; width: 25%;"></td>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 25%;">Entrega Copia de visita Autoridad Sanitaria</td>
                    <td style="border: 1px solid black; padding: 5px; text-align:center; width: 10%;">Si</td>
                    <td style="border: 1px solid black; padding: 5px; text-align:center; width: 10%;">No</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <!-- Columna 3: Fecha última Fumigación -->
        <td style="width: 50%; vertical-align: top; padding-bottom: 5px;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 50%;height:25px;">Fecha última Fumigación</td>
                    <td style="border: 1px solid black; padding: 5px; width: 50%;"></td>
                </tr>
            </table>
        </td>
        
        <!-- Columna 4: Fecha Lavado Tanque Agua -->
        <td style="width: 50%; vertical-align: top;">
            <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #eaeaea; border: 1px solid black; padding: 5px; text-align:center; vertical-align: middle; width: 50%;height:25px;">Fecha Lavado Tanque Agua</td>
                    <td style="border: 1px solid black; padding: 5px; width: 50%;"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>







<!-- primer cuadro a foreach CAPITULO 1 -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO I. SANEAMIENTO</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>

    <!--CAPITULO 2  -->


    <!-- primer cuadro a foreach -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO II. EQUIPOS Y UTENSILIOS</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   

    <!-- capitulo 3  -->
   <!-- primer cuadro a foreach -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO III. PERSONAL MANIPULADOR DE ALIMENTOS</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>

    <!-- capitulo4 -->

  
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO IV. REQUISITOS HIGIÉNICOS DE FABRICACIÓN</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   




 <!-- capitulo5 -->

<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO V.  ALMACENAMIENTO MATERIA PRIMA Y PRODUCTO TERMINADO Y MATERIAS PRIMAS PARA ALIMENTOS</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   


 <!-- capitulo6 -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO VI. CONDICIONES DE TRANSPORTE</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   


 <!-- capitulo7 -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO VII.  CUMPLIMIENTO DE GRAMAJES Y MENÚ</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   

 <!-- capitulo8 -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO VIII.  DISTRIBUCIÓN DE COMPLEMENTOS</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   

 <!-- capitulo9 -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO IX.  SEGURIDAD Y SALUD EN EL TRABAJO</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   


 <!-- capitulo10 -->
<table style="width: 100%; border: 1px solid black; border-collapse: collapse; font-size: 12px; padding-top: 20px">
    <tr>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">#</td>
        <td style="width: 45%; border: 1px solid black; background-color: #eaeaea; text-align: center;">CAPÍTULO X.  OTRAS CONDICIONES TÉCNICAS CONTRACTUALES</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">C</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NC</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NA</td>
        <td style="width: 5%; border: 1px solid black; background-color: #eaeaea; text-align: center;">NO</td>
        <td style="width: 30%; border: 1px solid black; background-color: #eaeaea; text-align: center;">OBSERVACIONES / REDACTE HALLAZGO EVIDENCIADO</td>
    </tr>
<?php
$ultimoIndice = count($variable) - 1;
foreach ($variable as $key => $value) { 
    if ($key < $ultimoIndice) { ?>
    <!-- <table style="width: 100%; border:1px solid black; padding-top: 20px">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->objeto}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2">{{$value->actividad}}</td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"  class="pt-4 pb-2"><img src="../storage/app/public/temp/<?php echo $value->foto;?>.jpg" width="100%"/></td>
        </tr>
    </table> -->
    <tr>
        <td style="width: 5%; border: 1px solid black; text-align: center;">1.1</td>
        <td style="width: 45%; border: 1px solid black; padding: 5px;">
            El área de producción del restaurante escolar está ubicado en lugares aislados de cualquier foco de insalubridad que represente riesgos potenciales para la contaminación del alimento.
        </td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 5%; border: 1px solid black;"></td>
        <td style="width: 30%; border: 1px solid black;"></td>
    </tr>
<?php }} ?>
</table>
   

   <hr>
   <table style=""> 
   <?php if(isset($variable[0]->foto)){ ?>
            <table style="width: 100%; border-collapse: collapse; font-size: 11px;">
            <tr>
                    <td style="width: 100%; border: 1px solid black; text-align: center; padding: 5px; background-color: #eaeaea;" >CALIFICACIÓN Y CONCEPTO</td>
                </tr>
                </table>

                
            <!-- fin primer cuadro a foreach -->
            <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            
                <tr>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">Total de variables aplicadas</td>
                    <td style="border: 1px solid black; text-align: center; padding: 35px;"></td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">Total de variables cumplidas</td>
                    <td style="border: 1px solid black; text-align: center; padding: 35px;"></td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">% Cumplimiento</td>
                    <td style="border: 1px solid black; text-align: center; padding: 35px;"></td>
                    <td class="diagonal-split"></td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">Muy Bueno</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;">95% - 100%</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">Bueno</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;">80% - 94.9%</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">Aceptable</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;">60% - 79.9%</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;background-color: #eaeaea;">Deficiente</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;">0 - 59.9%</td>
                    <td class="diagonal-split"></td>
                </tr>
            </table>

            <table style="width: 100%; border-collapse: collapse; font-size: 13px;">
            <tr>
                    <td style="width: 100%; border: 1px solid black; text-align: left; padding: 5px;" >Observaciones:</td>
                </tr>
            </table>
           
            <table style="width: 100%; border-collapse: collapse; font-size: 12px;">
                <tr>
                    <td rowspan="3" style="width: 10%; background-color: #eaeaea; border: 1px solid black; text-align: center; padding: 5px;">Interventoría</td>
                    <td style="width: 15%; background-color: #eaeaea; border: 1px solid black; text-align: center; padding: 5px;">Nombre Interventor:</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;"></td>
                    <td rowspan="3" style="width: 10%; background-color: #eaeaea; border: 1px solid black; text-align: center; padding: 5px;">Operador</td>
                    <td style="width: 15%; background-color: #eaeaea; border: 1px solid black; text-align: center; padding: 5px;">Nombre y cargo:</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; text-align: center; padding: 5px; background-color: #eaeaea;">Firma Interventor:</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;"></td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px; background-color: #eaeaea;">Firma:</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; text-align: center; padding: 5px; background-color: #eaeaea;">Doc. Identificación:</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;"></td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px; background-color: #eaeaea;">Doc. Identificación:</td>
                    <td style="border: 1px solid black; text-align: center; padding: 5px;"></td>
                </tr>
            </table>

            <?php }?> 

    </table>

   <!-- ultimo cuadro -->
<!--   
    <table style=""> 
    <?php if(isset($variable[0]->foto)){ ?>
    <table style="width: 100%; border:1px solid black; ">
        <tr>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;" class="pt-4 pb-2"><?php echo isset(end($variable)->objeto)? end($variable)->objeto : '';?></td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;" class="pt-4 pb-2"> <?php echo isset(end($variable)->actividad)? end($variable)->actividad : '';?></td>
            <td style="width: 33.33%;border:1px solid black;vertical-align: top;"><img class="mt-4 pb-2" src="../storage/app/public/temp/<?php echo isset(end($variable)->foto)? end($variable)->foto :'';?>.jpg" width="100%"/></td>
        </tr>
    </table>  <?php }?> 
    <div class="" style="padding-top:80px;padding-left:20px">
    <label for="" style="font-weight:bold;padding-bottom:10px">Firma contratista</label><br>
    <label>NOMBRES Y APELLIDOS: </label><label for="">&nbsp;&nbsp;{{$datoslistos['nombreapellido']}}</label><br>
    <label for="">Documento de identidad:</label><label for="">&nbsp;&nbsp;{{$datoslistos['cedula']}}</label><br>
    <label for="" style="padding-top:80px;font-weight:bold">Firma Coordinador (a)  </label>
    </div>  
    </table>
   
</div> -->
 <!--fin  ultimo cuadro -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh97OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <!-- <script type="text/php">
        if (isset($pdf)) {
        $x = 515;
        $y = 815;
        $text = "Página {PAGE_NUM} de {PAGE_COUNT}";
        $font = null;
        $size = 10;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);

    }
    </script> -->
 


</body>
</html>