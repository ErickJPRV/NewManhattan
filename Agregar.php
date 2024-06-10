<?php
    include('conexion.php');
    $con= connection();
    $id=$_POST['ID'];
    $nombre=$_POST['Plato'];
    $precio=$_POST['Precio'];
    $Descripcion=$_POST['Descripcion'];
    $sql="INSERT INTO Platos VALUES ('$id','$nombre','$precio','$Descripcion')";
    $query=mysqli_query($con,$sql);
    if($query){
        Header("Location:index.php");
    }
?>;