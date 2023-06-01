<?php
    include ("conexion.php");
$consulta = mysqli_query($con, "SELECT * FROM mesa where nombre_mesa='".$_POST['nombreMesa']."' ");

if (mysqli_num_rows($consulta) > 0){
    echo "<script>errorAgregado();</script>";
}else{
    $sql = "insert into mesa(nombre_mesa) value ('".$_POST['nombreMesa']."')";
    $query = $con->query($sql);
    if($query!=null){
        echo $_POST['nombreMesa']."<script>var screen = 3;agregado();$('.respuestaMesa').append(\"".$_POST['nombreMesa']."\");$('#id_mesa').val('".$_POST['nombreMesa']."');$('#whatsapp').html('<a href=\"https://api.whatsapp.com/send?text=https://www.iprog.site/WebApp/invitados.php?n%3D".$_POST['nombreMesa']."\" class=\"icons\" target=\"_blank\"><i style=\"font-size: 50px;color: #00ca00;\" class=\"fab fa-whatsapp-square\"></i></a><a>Whatsapp</a>');</script>";
    }else{
        echo "error";
    }
}
    
?>
    




    