<html>

<head>
  <title>consulta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="bg-info d-flex justify-content-center align-items-center vh-100">

</html>
<div class="bg-info p-5 rounded-5 text-secondary shadow-sm">
  <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "avanzada") or
      die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select nombre, contrasena
                    from usuario") or
      die("Problemas en el select:" . mysqli_error($conexion));


    echo "<table class= 'table table-bordered table-striped table-hover';>";
    echo "<thead><tr><th>Nombre</th><th>Contraseña</th></tr></thead>";
    echo "<tbody>";

    while ($reg = mysqli_fetch_array($registros)) {
      echo "<tr>";
      echo "<td>" . $reg['nombre'] . "</td>";
      echo "<td>" . $reg['contrasena'] . "</td>";
      echo "</tr>";
    }
    

    echo "</tbody></table>";


    mysqli_close($conexion);
    ?>

    <form action="index.html" method="post">

      <button type="submit" class="btn btn-info text-white mt-4 fw-semibold shadow-sm w-100">
        volver
      </button>

    </form>
  </div>
</div>

</body>