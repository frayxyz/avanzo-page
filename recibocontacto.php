<?php
 include "clases/conexion.php";
if($conn->connect_error)
   die($conn->connect_error);

print "conexion exitosa!";

 $nom=$_POST['nombres'];
 $ape=$_POST['apellidos'];
 $cor=$_POST['correo'];
 $tel=$_POST['telefono'];
 $des=$_POST['descripcion'];

 $sql="INSERT INTO contacto(nombres,apellidos,correo,telefono,descripcion) VALUES('$nom','$ape','$cor','$tel','$des')";

 //$result=$conn->query($sql);
 $result=mysqli_query($conn,$sql);

 if($result){
     echo"<script> alert( '$nom, su mensaje a sido enviado correctamente');
                  location.href='contacto.php';
            </script>";
 }else{
     echo "<script> alert('$nom, tu mensaje no pudo ser enviado');  location.href='contacto.php';</script>";
     
 }



?>