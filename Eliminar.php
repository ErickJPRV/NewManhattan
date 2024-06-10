<?php
    include('conexion.php');
	$con= connection();
    $id=$_GET['id'];
    $sql= "DELETE from Platos where id='$id'";
    $query=mysqli_query($con,$sql);
    if($query){
    Header("Location:index.php");
    }
?>;