<?php
    include ("conexion.php");
    $sql = "insert into clientes(nombre,imagen,metodo,jefe_mesa,id_mesa) value ('".$_POST['nombre']."', '".$_POST['imagen']."','".$_POST['metodo']."','".$_POST['jefeMesa']."','".$_POST['idMesa']."')";
    $query = $con->query($sql);
    if($query!=null){
        $idUser = mysqli_insert_id($con);
        echo "<script>submitClient();var nombre = \"".$_POST['nombre']."\",imagen = \"".$_POST['imagen']."\",metodo = \"".$_POST['metodo']."\",jefeMesa = \"".$_POST['jefeMesa']."\",idMesa = \"".$_POST['idMesa']."\",idUser = \"".$idUser."\";</script>";
    }else{
        echo "error";
    }  
    
?>