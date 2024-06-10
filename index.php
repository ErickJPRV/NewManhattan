<?php
    include('conexion.php');
	$con= connection();
	$sql= 'SELECT * FROM platos';
	$query=mysqli_query($con,$sql)
?>;
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>NewManhattan</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Food table</h1>
</div>
		</div>
	</header>
	<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Crud</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
	<div class="registro">
		<form action="agregar.php" method="post">
			<H1 style="text-align: center; color:white">Insertar Platos</H1>
			<center>
			<input type="text" name="ID" placeholder="Id" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
			<input type="text" name="Plato" placeholder="Nombre del plato" required>
			<input type="text" name="Precio" placeholder="Precio" oninput="this.value = this.value.replace(/[^0-9.]/g, '');" required>
			<input type="text" name="Descripcion" placeholder="Descripcion del plato" required>
			<input type="submit" value="Insertar Articulo">
			</center>
		</form>
	</div>
	<div class="tabla">
		<table class="table" style="color: white";>
  			<thead>
    			<tr>
      				<th>Id</th>
      				<th>Plato</th>
      				<th>Precio</th>
      				<th>Descripcion</th>
					<th></th>
					<th></th>
    			</tr>
  			</thead>
  			<tbody>
				<?php
					while($row=mysqli_fetch_array($query)):
				?>;
    			<tr>
      				<th><?= $row['Id'] ?></th>
      				<th><?= $row['Plato'] ?></th>
					<th><?= $row['Precio'] ?></th>
					<th><?= $row['Descripcion'] ?></th>
					<th><a href="Actualizar.php?id=<?=$row['Id']?>">Editar</a></th>
					<th><a href="Eliminar.php?id=<?=$row['Id']?>">Eliminar</a></th>
    			</tr>
				<?php endwhile; ?>
  			</tbody>
		</table>
	</div>
</body>
</html>