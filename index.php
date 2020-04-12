<?php
echo '<link href="./bootstrap.min.css" rel="stylesheet">';
echo '<link href="./sticky-footer.css" rel="stylesheet">';

echo '<body>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Conexion PHP - MySQL</h1>
      <p class="lead">Ejemplo Docker Compose conexión de bases de datos MySQL con PHP donde se verifica que se tenga conexion
	  con la base de datos. Donde se genero un servicio para la base de datos y otro servicio para la parte de php realizando la
	  configuración en el archivo docker-compose.yml</p>
      <p>Victor Espitia - Birman Cardona</p>
    </main>
</body>';

$connection = mysqli_connect("mysql", "username", "password", "database");
 
echo '<main role="main" class="container"> <p>Se realiza revision de la conexion a la base de datos :</p> </main>'; 
if (!$connection) {
    echo '<p role="main" class="container"><i>Error conectando a la base de datos</i></p>';
    exit;
}
 
echo '<p role="main" class="container"><i>Conectando a la base de datos correctamente.</i></p>';
?>