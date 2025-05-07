<?php
class Model
{
    var $db = "inventario";
    var $server = "127.0.0.1";//localhost
    var $user = "root";
    var $pass = "";
    var $con;//variable conexion
    function __construct()
    {
        //se genera la conexion
        try {
            $this->con = new mysqli(
                $this->server,
                $this->user,
                $this->pass,
                $this->db
            );
            // echo ":) db";
        } catch (mysqli_sql_exception $e) {
            echo ":( db";

        }
    }
    function Insert($datos,$archivos)
    {
        $cadsql = "insert into producto(descripcion,cantidad,precio,imagen) 
        values ('" . $datos["descripcion"] . "','" . $datos["cantidad"]. "','" . 
        $datos["precio"]. "','" .$archivos['imagen']['name']. "')";

        try {
            $this->con->query($cadsql);
        } catch (mysqli_sql_exception $e) {
            echo "Error al guardar";
        }

    }


    function Select()
    {
        $sql = "select * from producto";
        try {
            $registros = $this->con->query($sql);
             return $registros;

        } catch (Exception $e) {
            echo "error al buscar";
        }
    }

    function Selectid($id){
        $sql = "select * from producto where id=".$id;
        try {
            $registro = $this->con->query($sql);
             return $registro->fetch_assoc();

        } catch (Exception $e) {
            echo "error al buscar";
        }

    }

    function Delete($id)
    {  try{
      $sql="delete from producto where id=".$id;
      $this->con->query($sql); }
      catch(mysqli_sql_exception $ob){
     }}

     function Update($datos,$archivos)
     { $sql="update producto
     set descripcion='".$datos['descripcion']."',cantidad ='".$datos["cantidad"]."'
     ,precio='".$datos['precio']."',imagen='".$archivos['imagen']['name']
     ."' where id=".$datos['id'];
       
     try{        
        $this->con->query($sql); 
    
    }
        catch(mysqli_sql_exception $ob){
            echo "error modificar";
       }
        
    }

    //autentifiacion de usuarios
    function Auth($datos){
       //bucar en DB tabla usuarios
    $sql="select * from usuario where user='".$datos['email']."'and pass='".$datos['pass']."'";
   
    try{        
        if($registro=$this->con->query($sql)){ 
        session_start();
        $_SESSION['email']=$datos['email'];
            return true;}
        else
             return false;
        
    }catch(mysqli_sql_exception $ob){
        echo "error buscar usuario";
   }
 }
     
  

}//fin model
?>