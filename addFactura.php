<?php
    include ("conexion.php");
    

$consulta = mysqli_query($con, "SELECT * FROM fraccion where id_user='".$_POST['idUser']."' ");

if (mysqli_num_rows($consulta) > 0){
    
    $entrada = $_POST['entrada'];
    $plato = $_POST['plato'];
    $bebidas = $_POST['bebidas'];
    $postre = $_POST['postre'];
    $propina = $_POST['propina'];
    $total = $entrada+$plato+$bebidas+$postre+$propina;
    
    $sql = "update fraccion set id_user='".$_POST['idUser']."', id_mesa='".$_POST['idMesa']."',  entrada='".$_POST['entrada']."', plato='".$_POST['plato']."', bebidas='".$_POST['bebidas']."', postre='".$_POST['postre']."', propina='".$_POST['propina']."', total='".$total."' where id_user='".$_POST['idUser']."' ";
    $query = $con->query($sql);
    
    
    if($query!=null){
        echo "<script>$('.resultFactura').html('$".$total."');$('.totalFactura').html('$".$total."');$('.totalPropina').html('$".$propina."');$('.totalFactura').val('$".$total."');$('.totalPropina').val('$".$propina."');</script>";
    }else{
        echo "error";
    }  
}else{
    $entrada = $_POST['entrada'];
    $plato = $_POST['plato'];
    $bebidas = $_POST['bebidas'];
    $postre = $_POST['postre'];
    $propina = $_POST['propina'];
    $total = $entrada+$plato+$bebidas+$postre+$propina;
    
    $sql = "insert into fraccion(id_user,id_mesa,entrada,plato,bebidas,postre,propina,total) value ('".$_POST['idUser']."', '".$_POST['idMesa']."','".$_POST['entrada']."','".$_POST['plato']."','".$_POST['bebidas']."','".$_POST['postre']."','".$_POST['propina']."','".$total."')";
    $query = $con->query($sql);
    
    

    if($query!=null){
        echo "<script>$('.resultFactura').html('$".$total."');$('.totalFactura').html('$".$total."');$('.totalPropina').html('$".$propina."');$('.totalFactura').val('$".$total."');$('.totalPropina').val('$".$propina."');</script>";
    }else{
        echo "error";
    }  
}

    
?>