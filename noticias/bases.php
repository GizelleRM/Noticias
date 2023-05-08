<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

    <!-- Bootstrap CSS -->
	
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css";

	<script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>


</head>
	<?php
    include ("conexion.php");
	$conexioon = conectar();          
    ?> 
</head>
<body>

<div class='container'>
<?php
    $sql = "SELECT id, nombre from Categorias";			
	
	$result1 = mysqli_query($conexioon,$sql) or die('Consulta fallida proyectos: ' . mysqli_error($con));

	    echo "<table class='table table-hover' >\n";	
	    while ($row = mysqli_fetch_array($result1,MYSQLI_ASSOC))   
	    {
		    echo "   <tr class='text-center'><td class='text-center'> <a href='bases.php?id=".$row['id']."'  
            class='text-dark text-decoration-none' >".$row['nombre']."<a/></td></tr>\n";
			
	    }
	    echo "</table id= 'holi' >\n";

		    $idSeleccionado = $_GET["id"];
			$sql = "SELECT noticia_id, encabezado, url FROM Noticias where categoria_id= $idSeleccionado";	
			$result2 = mysqli_query($conexioon,$sql) or die('Consulta fallida proyectos: ' . mysqli_error($con));

					
		
		    $contador= 1;
			echo "<table id='paginado' class='table table-striped table-hover'>\n";	
			echo "  <thead>
					<tr>
					    <th> </th>
                        <th > </th>
                    </tr>
                    </thead>"; 
			echo	"<tbody>";
					while ($row = mysqli_fetch_array($result2,MYSQLI_ASSOC))   
			{
				echo "  <tr >
				            <td class='text-center'> $contador  </td>
				            <td > <a class='text-dark text-decoration-none'href='".$row['url']."'>".$row['encabezado']." <a/></td>
						</tr>\n";
			    $contador ++;
			}
            echo "</tbody>";   
			echo "</table>\n";
            
		
?> 
		
</div>





</body>
</html>

