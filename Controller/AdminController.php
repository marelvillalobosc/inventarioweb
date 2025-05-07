<?php
//incluir el modelo
include("../Model/Model.php");
class AdminController{
   var $model;

   function __construct(){

    $this->model=new Model();
   }
   function update($datos,$archivo){
      //manda llamar el modelo para guardar los datos
    $this->model->Update($datos,$archivo);
    $this->select();
  }
  function insert($datos,$archivo){
    $this->model->Insert($datos,$archivo);
    //una vez que se guarda regresa al index
    header("Location:../Views/indexAdmin.php");
  }

  function delete($id){
    $this->model->Delete($id);
    $this->select();
  }
  function select(){
   //se recibe la información de los registros de db
   $registros=$this->model->Select();
   //incluye la vista
   include_once("../Views/viewconsulta.php");

  }
  

  function selectid($id){
  $registro=$this->model->Selectid($id);
  include_once("../Views/viewmodifica.php");
  }

  function auth($datos){
   
    if($this->model->Auth($datos))
  {
    session_start();
    
    header("Location:../Views/indexAdmin.php");
  
      
  }
        else
   include_once("../Views/indexAdmin.php");
   
   


  }

  function logout(){
    session_destroy();//destruye la session
    header("Location:../index.php");

  }

  function pdf(){
    //se recibe la información de los registros de db
   $registros=$this->model->Select();
  include_once("../Views/viewreportepdf.php");

  }
}


?>