<?php
    include ("conexion.php");
    $sql = "insert into clientes(nombre,imagen,metodo,jefe_mesa,id_mesa) value ('".$_POST['nombre']."', '".$_POST['imagen']."','".$_POST['metodo']."','".$_POST['jefeMesa']."','".$_POST['idMesa']."')";
    $query = $con->query($sql);
    if($query!=null){
        echo "Éxito";
    }else{
        echo "error";
    }  
    
?>