<?php

require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('pt.docx');


$nombre=$_POST['nombre'];
$cargonombre=$_POST['cargonombre'];
$nombreempresa=$_POST['nombreempresa'];
$nombreestudiante=$_POST['nombreestudiante'];
$numerocontrol=$_POST['numerocontrol'];
$carreraestudiante=$_POST['carreraestudiante'];
$proyectoestudiante=$_POST['proyectoestudiante'];
$numeross=$_POST['numeross'];


// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre_nombre',$nombre);
$templateWord->setValue('cargonombre_cargonombre',$cargonombre);
$templateWord->setValue('nombreempresa_nombreempresa',$nombreempresa);
$templateWord->setValue('nombreestudiante_nombreestudiante',$nombreestudiante);
$templateWord->setValue('numerocontrol_numerocontrol',$numerocontrol);
$templateWord->setValue('carreraestudiante_carreraestudiante',$carreraestudiante);
$templateWord->setValue('proyectoestudiante_proyectoestudiante',$proyectoestudiante);
$templateWord->setValue('numeross_numeross',$numeross);


// --- Guardamos el documento
$templateWord->saveAs($nombreestudiante.'.docx');

header('Content-Disposition: attachment; filename='.$nombreestudiante.'.docx; charset=iso-8859-1');
echo file_get_contents($nombreestudiante.'.docx');
        

//Este es lo nuemo que agregue al codigo si no jala es por esta parte
        // ----- enviar en un email
//$para = 'miguel_27black@hotmail.com';
//$asunto = 'PRUEBA PHP CORREO';

//mail($para, $asunto, header('Content-Disposition: attachment; filename='.$nombre.'.docx; charset=iso-8859-1'), echo file_get_contents($nombre.'.docx'));


?>