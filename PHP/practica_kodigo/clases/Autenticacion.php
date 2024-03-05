<?php  
require "./clases/Conexion.php";

class Autenticacion extends Conexion{
    protected $correo;
    protected $password;

    public function autenticarUsuario(){
        if(isset($_POST['email'], $_POST['password'])){
            $this->correo = $_POST['email'];
            $this->password = $_POST['password'];

            //nombre, correo, password, id, id_rol
            //select * from admin where correo = ? and password = ?
            $pdo = $this->conectar();

            //consulta administrador
            $query = $pdo->prepare("SELECT * FROM admin WHERE correo = ? AND password = ?");
            $query->execute(["$this->correo","$this->password"]);
            $usuario_admin = $query->fetch(PDO::FETCH_ASSOC); //[]
            //print_r($usuario_admin);

            //consulta Coach
            $query2 = $pdo->prepare("SELECT id, nombre, correo, password, id_rol FROM coaches WHERE correo = ? AND password = ?");
            $query2->execute(["$this->correo","$this->password"]);
            $usuario_Coach = $query2->fetch(PDO::FETCH_ASSOC);

            //condicionamos si existe un arreglo con la info del usuario
            if(is_array($usuario_admin)){
                //crear las sesiones
                $_SESSION['nombre_admin'] = $usuario_admin['nombre'];
                $_SESSION['id_admin'] =  $usuario_admin['id'];

                header("location: ./home_admin.php");
            }else if(is_array($usuario_Coach)){
                //crear las sesiones
                $_SESSION['nombre_Coach'] = $usuario_Coach['nombre'];
                $_SESSION['id_Coach'] =  $usuario_Coach['id'];

                header("location: ./home_Coach.php");
            }else{
                echo "<div class='alert alert-danger' role='alert'>
                    Tus credenciales son incorrectas
                </div>";
            }
        }
    }
}

?>