<?php

    class Usuario extends Conectar{
        
        public function login(){
            $conectar= parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $email= $_POST["email"];
                $password= $_POST["password"];
                if(empty($email) and empty($password)){
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE email=? and password=? and estado=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1,$email);
                    $stmt->bindValue(2,$password);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["id_usuario"] = $resultado["id_usuario"];
                        $_SESSION["nombres"] = $resultado["nombres"];
                        $_SESSION["apellidos"] = $resultado["apellidos"];
                        header("Location:".Conectar::ruta()."view/Home");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                    /*
                    $correo= trim($correo);
                    $pass= trim($pass);*/
                }
                
            }
        }
    }

?>