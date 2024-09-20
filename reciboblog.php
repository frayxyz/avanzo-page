<?php require 'clases/conexion.php';

$nom=$_POST['nombres'];
$ape=$_POST['apellidos'];
$cor=$_POST['correo'];
$text=$_POST['descripcion'];
$sql="INSERT INTO blog(nombres, apellidos,correo,texto,fecha)VALUES('$nom','$ape','$cor','$text',NOW())";

$result=$conn->query($sql);

if($result){
    echo "<script> alert('tu blog fue publicado'); location.href='blog.php';</script>";
}else{ echo "<script> alert('la operacion no pudo ser realizada'); location.href='blog.php';</script>";}

?>