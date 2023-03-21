<?php
!isset($_SESSION)? session_start():'';
  #    ######### Выводим все ошибки ##########    #
  ini_set('error_reporting', E_ALL & ~E_NOTICE);    #
  ini_set('display_errors', -1);             #
  ini_set('display_startup_errors', -1);        #
  error_reporting(E_ALL & ~E_NOTICE);          #
  #    ######### Выводим все ошибки ##########    #
?>
		<? include "inc/header.php";?>

		<? include "inc/slider.php";?>

<section>

		<div class="container">
			<div class="row">

				<? include "inc/left.php";?>


			<div class="col-sm-9 padding-right cats-item">
				<div class="features_items">

<?
include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/{$view}.php";
?>
				</div>

			</div>
			</div>
		</div>

</section>


  <? include "inc/footer.php";?>
