<?php
include ("conexion.php");
$consulta = mysqli_query($con, "SELECT * FROM clientes where id_mesa='".$_POST['idMesa']."' ");

if (mysqli_num_rows($consulta) > 1){
    while($row = mysqli_fetch_array($consulta, MYSQL_ASSOC)) {
        if($row["id"]==$_POST['idUser']){
            echo "";
        }else{
            echo "<li>
                    <div class=\"col-12\">
                        <div class=\"row\">
                            <div class=\"col-3\">";
            if($row["imagen"]=="avatar1"){
                echo "<img class=\"img-pay\" src=\"images/AVATAR_1.png\">";
            }else{
                if($row["imagen"]=="avatar2"){
                    echo "<img class=\"img-pay\" src=\"images/AVATAR_2.png\">";
                }else{
                    if($row["imagen"]=="avatar3"){
                        echo "<img class=\"img-pay\" src=\"images/AVATAR_3.png\">";
                    }else{
                        if($row["imagen"]=="avatar4"){
                            echo "<img class=\"img-pay\" src=\"images/AVATAR_4.png\">";
                        }
                    }
                }
            }

            echo "</div><div class=\"col-7\"><p>".$row["nombre"]."</p></div><div class=\"col-2\"><input name=\"pagados[]\" type=\"checkbox\" class=\"check\"></div></div></div></li>";
        }
    }
}else{
    echo "<p>no tienes amigos en tu mesa.</p>";
}



?>