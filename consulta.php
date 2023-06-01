<?php
include ("conexion.php");
$consulta = mysqli_query($con, "SELECT * FROM clientes where id_mesa='".$_POST['idMesa']."' ");

if (mysqli_num_rows($consulta) > 0){
    while($row = mysqli_fetch_array($consulta, MYSQL_ASSOC)) {
        echo "<li>";
        if($row["imagen"]=="avatar1"){
            echo "<img class=\"user\" src=\"images/AVATAR_1.png\">";
        }else{
            if($row["imagen"]=="avatar2"){
                echo "<img class=\"user\" src=\"images/AVATAR_2.png\">";
            }else{
                if($row["imagen"]=="avatar3"){
                    echo "<img class=\"user\" src=\"images/AVATAR_3.png\">";
                }else{
                    if($row["imagen"]=="avatar4"){
                        echo "<img class=\"user\" src=\"images/AVATAR_4.png\">";
                    }
                }
            }
        }
        echo "<p>".$row["nombre"]."</p>";
        echo "<div class=\"icon-metodos\">";
        if($row["metodo"]=="method1"){
            echo "<div><img class=\"active\" src=\"images/EFECTIVO.png\"></div><div><img class=\"\" src=\"images/TARJETA.png\"></div><div><img class=\"\" src=\"images/TRANSFERENCIA.png\"></div><div><img class=\"\" src=\"images/NO_PAGARE.png\"></div></div></li>";
        }else{
            if($row["metodo"]=="method2"){
                echo "<div><img class=\"\" src=\"images/EFECTIVO.png\"></div><div><img class=\"active\" src=\"images/TARJETA.png\"></div><div><img class=\"\" src=\"images/TRANSFERENCIA.png\"></div><div><img class=\"\" src=\"images/NO_PAGARE.png\"></div></div></li>";
            }else{
                if($row["metodo"]=="method3"){
                    echo "<div><img class=\"\" src=\"images/EFECTIVO.png\"></div><div><img class=\"\" src=\"images/TARJETA.png\"></div><div><img class=\"active\" src=\"images/TRANSFERENCIA.png\"></div><div><img class=\"\" src=\"images/NO_PAGARE.png\"></div></div></li>";
                }else{
                    if($row["metodo"]=="method4"){
                        echo "<div><img class=\"\" src=\"images/EFECTIVO.png\"></div><div><img class=\"\" src=\"images/TARJETA.png\"></div><div><img class=\"\" src=\"images/TRANSFERENCIA.png\"></div><div><img class=\"active\" src=\"images/NO_PAGARE.png\"></div></div></li>";
                    }
                }
            }
        }
    }
}else{
    echo "<p>Aún no hay amigos en tu mesa.</p>";
}



?>