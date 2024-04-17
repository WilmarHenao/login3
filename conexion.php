<html>

<head>
    <title>buscar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div class="bg-info p-5 rounded-5 text-secondary shadow-sm">
        <div class="bg-white p-5 rounded-5 text-bold shadow" style="width: 25rem">
            <h2 class=" fs-1 fw-bold TEXT-CENTER ">USUARIO NO EXISTE EN LA BASE DE DATOS</h2>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "avanzada") or
                die("Problemas con la conexión");

            $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
            $contrasena = mysqli_real_escape_string($conexion, $_POST["contrasena"]);

            $registros = mysqli_query($conexion, "SELECT nombre, contrasena
                    FROM usuario WHERE nombre='$nombre' AND contrasena='$contrasena'") or
                die("Problemas en el select: " . mysqli_error($conexion));

            if ($reg = mysqli_fetch_array($registros)) {
                header("Location: inadex.html");
            } else {
                echo '<div class="bg-black text-center text-danger rounded-5 mt-4 fw-semibold shadow-sm w-100">
            !ACCESO DENEGADO¡</div>';
            }

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

</html>