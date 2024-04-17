<html>
<html>

<head>
  <title>insert</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "avanzada") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into usuario(nombre, contrasena) values 
                       ('$_REQUEST[nombre]','$_REQUEST[contrasena]')")
    or die("Problemas al ingresar informacion" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Usuario Agregado.";
  ?>

  <form action="index.html" method="post">

    <button type="submit" class="btn">volver

    </button>

  </form>
</body>

</html>