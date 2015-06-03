<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }   
}

function actives($clave){
    if(substr_count(current_url(),$clave)>=1){ 
        echo ' active'; 
    }
} 

function tags_label($tagsdb){
  $tagsArray = explode(",", $tagsdb);
  for ($i=0; $i < count($tagsArray) ; $i++) { 
      echo '<a href="'.base_url().'actualidad/tag/'.$tagsArray[$i].'" class="tag label label-default light"><i class="fa fa-tags"></i> '.$tagsArray[$i].'</a> ';
    }
}
function tags($tagsdb){
	$tagsArray = explode(",", $tagsdb);
	for ($i=0; $i < count($tagsArray) ; $i++) { 
    	echo ' | <a href="'.base_url().'tag/'.$tagsArray[$i].'">'.$tagsArray[$i].'</a> | ';
    }
}

function fotoSize($size=NULL,$folder="blog"){
  switch ($size) {
    case 'full':
      return "uploads/".$folder."/";
      break;
    case 'small':
      return "uploads/".$folder."/small/";
      break;
    case 'thumbs':
      return "uploads/".$folder."/thumbs/";
      break;
    default:
      return "uploads/".$folder."/thumbs/";
      break;
  }
}

function date_convert($fechamysql){

  $fechamysql = substr($fechamysql, 0, 10);
  $meses = array("Enero", "Febrero", "Marzo", "Abril","Mayo","Junio","Julio","Agosto","Septiembre","Obtubre","Noviembre","Diciembre");

  $day = substr($fechamysql,8,2);
  $mestemp = substr($fechamysql,5,2)-1;
  $anio = substr($fechamysql,0,4);

  $mes = $meses[$mestemp];
  $fecha = $day.' '.$mes.', '.$anio;
  return $fecha;
}

function date_post($fechamysql){

  $fechamysql = substr($fechamysql, 0, 10);
  $meses = array("Enero", "Febrero", "Marzo", "Abril","Mayo","Junio","Julio","Agosto","Septiembre","Obtubre","Noviembre","Diciembre");

  $day = substr($fechamysql,8,2);
  $mestemp = substr($fechamysql,5,2)-1;
  $anio = substr($fechamysql,0,4);

  $mes = $meses[$mestemp];
  $fecha = $day.' <small>'.$mes.' '.$anio.'</small>';
  return $fecha;
}