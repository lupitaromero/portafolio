<?php
    // Iniciando la sesión
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SISTEMA ACADEMIA KODIGO</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        include "./modulos/header.php";
        require "./clases/Coaches.php";

          // Instanciar la clase Coaches
          $coach = new Coaches();

        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $correo = $_POST["correo"];
            $titulo = $_POST["titulo"];
            $id_materia = $_POST["bootcamp"]; // Cambié el nombre del campo a "bootcamp"
            $id_estado = 1; // Puedes asignar el estado directamente aquí
            $id_rol = 2; // Puedes asignar el rol directamente aquí
            $bootcamps = isset($_POST["materias"]) ? $_POST["materias"] : [];

        

            // Registrar el nuevo coach
            $resultado = $coach->registrar($nombre, $direccion, $correo, $titulo, $id_materia, $id_estado, $id_rol, $bootcamps);

            if ($resultado) {
                echo "<p class='text-success'>Registro exitoso. El nuevo coach ha sido registrado.</p>";
            } else {
                echo "<p class='text-danger'>Error al registrar el nuevo coach.</p>";
            }
        }

      

        // Obtener los bootcamps y materias después de procesar el formulario
        $arreglo_materias = $coach->getMaterias();
        $arreglo_bootcamps = $coach->getBootcamps();

    ?>

    <main id="main">
        <section class="container">
            <h1>Registrar Nuevo Coach</h1>

            <form action="" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>

                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" required>

                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" required>

                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" required>

                <label for="">Seleccione Bootcamp</label>
                <select name="bootcamp" class="form-control" id="">
                    <option value="">...</option>
                    <!-- Iteramos los bootcamps que hay en la bd -->
                    <?php foreach ($arreglo_bootcamps as $bootcamp): ?>
                        <option value="<?= $bootcamp["id"]; ?>"><?= $bootcamp["bootcamp"]; ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="">Seleccione Materias</label><br>
                <?php foreach ($arreglo_materias as $materia): ?>
                    <input type="checkbox" name="materias[]" value="<?= $materia["id"]; ?>"> <?= $materia["materia"]; ?>
                <?php endforeach; ?>
                <br>
                <input type="submit" class="btn btn-dark mt-4" value="Guardar Datos">
            </form>
            a
        </section>
    </main>
    <?php include "./modulos/footer.php";  ?>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

