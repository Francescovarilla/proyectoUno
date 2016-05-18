<?php
   require_once 'conectar.php';
   $codigo=$_POST['icodigo'];
   $producto=$_POST['iproducto'];
   $cantidad=$_POST['icantidad'];
   $vunitario=$_POST['ivalorunitario'];
   $vtotal=$_POST['ivalortotal'];
   
  
  
   
   $consulta=("SELECT * FROM ventas WHERE codigo='$codigo';");
     
	 if($validar=@mysql_fetch_array($consulta)){
		 echo"las ventas ya esta registradas</br>";
		 echo"<a href='index.html'>VOLVER</a>";
	 }else{
	   mysql_query("INSERT INTO ventas( codigo,producto,cantidad,vunitario,vtotal) VALUES ('$codigo','$producto','$cantidad','$vunitario','$vtotal');");
	  
    header("location:index.html");	  
	   }
	    
?>