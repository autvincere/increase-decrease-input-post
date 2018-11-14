<?php
	// session_start();

   $prueba = $_POST['number'];
   $prueba2 = $_POST['action'];

   if ($prueba === ''){
      echo 'error';
   }
   else{
     echo 'Su cantidad escogida es:'.$prueba;
   }  

?>