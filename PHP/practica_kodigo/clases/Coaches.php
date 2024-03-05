<?php

require "./clases/Conexion.php";

class Coaches extends Conexion{
    // Atributos de la tabla coaches
    protected $id;
    protected $nombre;
    protected $direccion;
    protected $correo;
    protected $titulo;
    protected $password;
    protected $id_materia;
    protected $id_estado;
    protected $id_rol;

    public function getMaterias(){
        $pdo = $this->conectar();
        $query = $pdo->query("SELECT * FROM materia");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function getBootcamps(){
        $pdo = $this->conectar();
        $query = $pdo->query("SELECT * FROM bootcamps");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function registrar($nombre, $direccion, $correo, $titulo, $id_materia, $id_estado, $id_rol, $bootcamps) {
        $password = "Kodigo2023"; // Asigna la contraseña aquí o de alguna forma segura
        $materia = 1; // Asigna la materia correcta aquí
        $estado = 1; // Asigna el estado correcto aquí
        $rol = 2; // Asigna el rol correcto aquí
    
        $pdo = $this->conectar();
        $query = $pdo->prepare("INSERT INTO coaches (nombre, direccion, correo, titulo, password, id_materia, id_estado, id_rol) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
        $resultado = $query->execute([$nombre, $direccion, $correo, $titulo, $password, $materia, $estado, $rol]);
    
        if ($resultado) {
            $id_coach = $pdo->lastInsertId();
    
            // Asociar bootcamps (necesitas obtener los bootcamps del formulario)
           // $bootcamps = $_POST['bootcamps']; // Asegúrate de que esta variable tenga los bootcamps seleccionados
            $this->asociarBootcamps($id_coach, $id_materia);
    
            return true;
        } else {
            return false;
        }
    }
    
    private function asociarBootcamps($coachId, $bootcamps) {
        $pdo = $this->conectar();
        $query = $pdo->prepare("INSERT INTO detalle_bootcamps_coach ( id_bootcamp, id_coach) VALUES (?, ?)");
    
        //foreach ($bootcamps as $bootcamp) {
            $query->execute([$bootcamps, $coachId]);
        //}
    }

    public function obtenerCoachesActivos(){
        $pdo = $this->conectar();
        $query = $pdo->query("SELECT * FROM coaches WHERE id_estado = 1");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function obtenerById(){
        if(isset($_GET['id_coach'])){
            $this->id = $_GET['id_coach'];

            $pdo = $this->conectar();
            $query = $pdo->query("SELECT id, nombre, direccion, correo, titulo FROM coaches WHERE id = $this->id");

            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC); //arreglo de objetos
            return $resultado;
        }
    }

    public function obtenerDetalleBootCampByIdCoach(){
        if(isset($_GET['id_coach'])){
            $this->id = $_GET['id_coach'];

            $pdo = $this->conectar();
            $query = $pdo->query("SELECT id_bootcamp, id_coach FROM detalle_bootcamps_coach WHERE id_coach = $this->id");

            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_ASSOC); //arreglo de objetos
            return $resultado;
        }
    }
    public function actualizar($id_coach, $nombre, $direccion, $correo, $titulo, $id_bootcamp, $id_estado, $id_rol)
{
        
        $pdo = $this->conectar();
        $query = $pdo->prepare("UPDATE coaches SET nombre = ?, direccion = ?, correo = ?, titulo = ?, id_materia = ?, id_estado = ? WHERE id = ?");

        $resultado = $query->execute([$nombre,$direccion, $correo, $titulo, $id_bootcamp, $id_estado, $id_coach ]);

        if ($resultado) {
            // Actualizar asociación de bootcamps
            //$this->actualizarBootcamps($this->id, $bootcamps);

            echo "<script>
                window.location = './coaches_activos.php'
            </script>";
        } else {
            echo "Error al actualizar al coach";
        }
    }


 #metodo para seleccionar el estado
 public function estadoByActivoInactivo(){
    $pdo = $this->conectar();
    $query = $pdo->query("SELECT * FROM estado WHERE id = 5 OR id = 1");
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC); //[]
    return $resultado;
}

#actualizando el estado del estudiante
public function actualizarEstado(){
    if(isset($_POST['id_coach'], $_POST['estado'])){
        $this->id = $_POST['id_coach'];
        $estado = $_POST['estado'];

        $pdo = $this->conectar();
        $query = $pdo->prepare("UPDATE coaches SET id_estado = ? WHERE id = ?");
        $resultado = $query->execute([$estado,$this->id]); //true o false
        //true
        if($resultado){
            echo "<script>
                window.location = './estudiantes_activos.php'
            </script>";
        }else{
            echo "Error al cambiar el estado";
        }
    }
}

private function actualizarBootcamps($coachId, $bootcamps)
{
    // Eliminar asociaciones anteriores
    $pdo = $this->conectar();
    $deleteQuery = $pdo->prepare("DELETE FROM detalle_bootcamps_coach WHERE id_coach = ?");
    $deleteQuery->execute([$coachId]);

    // Insertar nuevas asociaciones
    $insertQuery = $pdo->prepare("INSERT INTO detalle_bootcamps_coach (id_coach, id_bootcamp) VALUES (?, ?)");
    foreach ($bootcamps as $bootcamp) {
        $insertQuery->execute([$coachId, $bootcamp]);
    }
}


    public function eliminar($coachId){
        $pdo = $this->conectar();
        $query = $pdo->prepare("DELETE FROM coaches WHERE id = ?");
        $resultado = $query->execute([$coachId]);

        if($resultado){
            echo "<script>
                window.location = './coaches_activos.php'
            </script>";
        } else {
            echo "Error al eliminar el coach";
        }
    }

    public function cambiarEstado($coachId, $nuevoEstado){
        $pdo = $this->conectar();
        $query = $pdo->prepare("UPDATE coaches SET id_estado = ? WHERE id = ?");
        $resultado = $query->execute([$nuevoEstado, $coachId]);

        if($resultado){
            echo "<script>
                window.location = './coaches_activos.php'
            </script>";
        } else {
            echo "Error al cambiar el estado del coach";
        }
    }

   
}

?>
