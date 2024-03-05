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

        // Instanciamos la clase Coaches
        $coaches = new Coaches();
        $datos = $coaches->obtenerById();
        $bootcams = $coaches->obtenerDetalleBootCampByIdCoach();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $id_coach = $_POST["id_coach"];
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $correo = $_POST["correo"];
            $titulo = $_POST["titulo"];
            $id_bootcamp = $_POST["bootcamp"]; // Cambié el nombre del campo a "bootcamp"
            $id_estado = $_POST["id_estado"];  // Puedes asignar el estado directamente aquí
            $id_rol = 2; // Puedes asignar el rol directamente aquí
            $bootcamps = isset($_POST["materias"]) ? $_POST["materias"] : [];

              // Registrar el nuevo coach
              $resultado = $coaches->actualizar($id_coach, $nombre, $direccion, $correo, $titulo, $id_bootcamp, $id_estado, $id_rol);

              if ($resultado) {
                  echo "<p class='text-success'>Registro exitoso. El nuevo coach ha sido actualizado.</p>";
              } else {
                  echo "<p class='text-danger'>Error al actualizar el nuevo coach.</p>";
              }
          }
    ?>

    
    
    <main id="main">
        <section class="container">
            <h1>Editar Datos</h1>

            <form action="" method="POST">
                <?php foreach($datos as $coach) { ?>


                <input type="hidden" name="id_coach" value="<?php echo $coach['id']; ?>">

                <label for="">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $coach["nombre"]; ?>">

                <label for="">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="<?php echo $coach["direccion"]; ?>">

                <label for="">Correo</label>
                <input type="text" class="form-control" name="correo" value="<?php echo $coach["correo"]; ?>">

                <label for="">Título</label>
                <input type="text" class="form-control" name="titulo" value="<?php echo $coach["titulo"]; ?>">

                <label for="">Seleccione Bootcamp</label>
                <select name="bootcamp" class="form-control" id="">
                    <option value="">...</option>
                    <!-- Iteramos los bootcamps que hay en la bd -->
                    <?php 
                        $arreglo_bootcamps = $coaches->getBootcamps();
                        foreach ($arreglo_bootcamps as $bootcamp) {
                            $selected = ($bootcamp['id'] == $bootcams["id_bootcamp"]) ? 'selected' : '';
                            echo "<option value='" . $bootcamp["id"] . "' $selected>" . $bootcamp["bootcamp"] . "</option>";
                        }
                    ?>
                </select>

                <label for="">Estado</label>
                <select name="id_estado" class="form-control" id="">
                    <!-- Aquí debes cargar los estados disponibles desde tu base de datos -->
                    <option value="1" <?php echo ($coach['id'] == 1) ? 'selected' : ''; ?>>Activo</option>
                    <option value="5" <?php echo ($coach['id'] == 5) ? 'selected' : ''; ?>>Inactivo</option>
                </select>

                <input type="submit" class="btn btn-dark mt-4" value="Actualizar Datos">

                <?php } ?>
            </form>

        </section>
    </main>
    <?php include "./modulos/footer.php";  ?>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
