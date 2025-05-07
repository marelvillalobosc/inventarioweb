<?php
//crea el objeto controller para generar la ruta. 

include("../Controller/HomeController.php");
include("../Controller/AdminController.php");

$controller=new HomeController();//usuario-admin
$admincontroller=new AdminController();//admin

// echo $_REQUEST['descripcion']." ruta ".$_REQUEST['ruta'];

 switch($_REQUEST['ruta']){
    case "viewalta":
        $controller->viewalta();
        break;
    case "update":
        $admincontroller->update($_REQUEST,  $_FILES);
        break;
    case "insert":
        $admincontroller->insert($_REQUEST,$_FILES) ;
        break;  
    case "select":
        $admincontroller->select();
        break; 
     case "selectid":
        $admincontroller->selectid($_REQUEST['id']);
        break;
    case "delete":
            $admincontroller->delete($_REQUEST['id']);
            break;
    case "auth":
        $admincontroller->auth($_REQUEST);
        break;
    case "logout":
            $admincontroller->logout();
            break;
    case "pdf":
            $admincontroller->pdf();
                break;
      
}



?>