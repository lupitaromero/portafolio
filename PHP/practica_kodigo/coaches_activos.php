<?php
    session_start();
    require "./clases/Coaches.php";

    // Instanciamos la clase Coaches
    $coach = new Coaches();
    $arreglo_coach = $coach->obtenerCoachesActivos();
    $arreglo_bootcamps = $coach->getBootcamps();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SISTEMA ACADEMIA KODIGO</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "./modulos/header.php"; ?>

    <main id="main">
        <section class="container">
            <h1>Gestión de Coaches Activos</h1>

            <a href="./registrar_coach.php" class="btn btn-primary mb-3">Registrar</a>

            <table class="table">
                <thead>
                    <th>Coach</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Título</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach($arreglo_coach as $item) { ?>
                        <tr>
                            <td><?php echo $item['nombre']; ?></td>
                            <td><?php echo $item['direccion']; ?></td>
                            <td><?php echo $item['correo']; ?></td>
                            <td><?php echo $item['titulo']; ?></td>
                            <td>
                                <form action="./actualizar_coach.php" method="GET">
                                    <input type="hidden" name="id_coach" value="<?php echo $item['id']; ?>">
                                    <input type="submit" class="btn btn-primary" value="Editar">
                                </form>
                            </td>
                        </tr>

                        <!-- Modal del estado -->
                        <div class="modal fade" id="ModalEstado<?php echo $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- Contenido del modal -->
                        </div>

                         <!-- Modal del estado -->
                         <div class="modal fade" id="ModalEstado<?php echo $item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cambio de Estado</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="POST">
                                    <div class="modal-body">
                                        <!-- mando el id del estudiante -->
                                        <input type="hidden" name="id_coach" value="<?php echo $item['id']; ?>">

                                        <h5><?php echo $item['nombre']; ?></h5>
                                        <p><strong>Estado: </strong>Activo</p>
                                        <label for="" class="form-label">Cambio de Estado</label>
                                        <select name="estado" id="" class="form-control">
                                            <?php foreach($arreglo_estado as $estado){ ?>
                                                <option value="<?php echo $estado['id']; ?>"><?php echo $estado['estado']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-danger" value="Cambiar Estado">
                                    </div>
                                </form>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>

    <?php include "./modulos/footer.php"; ?>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
