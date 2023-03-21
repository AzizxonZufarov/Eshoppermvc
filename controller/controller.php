<?php
session_start();
include MODEL;

if(empty($_GET['view'])){

	$view = "index";


}else{

	$view = $_GET['view'];
}

$items=items();



switch($view){

case "index":
break;

case "ajax":
	$id = $_GET['id'];
	addcart($id);
	modal_items($id);
	include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
break;


}


include $_SERVER['DOCUMENT_ROOT']."/Eshoppermvc/views/theme/index.php";
?>
