<?php
include('conexion.php');
$con= connection();
$id=$_POST['Id'];
$Plato=$_POST['Plato'];
$precio=$_POST['Precio'];
$Descripcion=$_POST['Descripcion'];
$sql="UPDATE Platos set Plato='$Plato', Precio='$precio', Descripcion='$Descripcion' where Id='$id'";
$query=mysqli_query($con,$sql);
if($query){
Header("Location:index.php");
}
?>;