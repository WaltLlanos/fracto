<?php
    include ("conexion.php");
$consulta = mysqli_query($con, "SELECT * FROM billetera where id_user='".$_POST['idUser']."' ");

if (mysqli_num_rows($consulta) > 0){
    $sql = "update billetera set id_user='".$_POST['idUser']."', id_mesa='".$_POST['idMesa']."',  cantidad='".$_POST['cantidad']."', monedas='".$_POST['moneda']."' where id_user='".$_POST['idUser']."' ";
    $query = $con->query($sql);
    
    $cantidad = $_POST['cantidad'];
    $monedas = $_POST['moneda'];
    
    if($query!=null){
        echo "<script>$('.totalBilletera').html('$".$cantidad."');";
        if($_POST['moneda']=="si"){
            echo "$('.totalBilletera').addClass('monedas');</script>";
        }else{
            echo "$('.totalBilletera').removeClass('monedas');</script>";
        }
    }else{
        echo "error";
    }  
}else{
    $sql = "insert into billetera(id_user,id_mesa,cantidad,monedas) value ('".$_POST['idUser']."', '".$_POST['idMesa']."','".$_POST['cantidad']."','".$_POST['moneda']."')";
    $query = $con->query($sql);
    
    $cantidad = $_POST['cantidad'];
    $monedas = $_POST['moneda'];
    
    if($query!=null){
        echo "<script>$('.totalBilletera').html('$".$cantidad."');";
        if($_POST['moneda']=="si"){
            echo "$('.totalBilletera').addClass('monedas');</script>";
        }else{
            echo "$('.totalBilletera').removeClass('monedas');</script>";
        }
    }else{
        echo "error";
    }  
}

    
?>