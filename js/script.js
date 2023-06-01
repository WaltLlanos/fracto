var screen=1;
var section=1,opcShare=0,verific=0;

function nextWelcome(){
    if(screen==1){
        screen=2;
        $("#screen-1").hide("fast");
        $("#screen-2").toggle("fast");
        $(".logo-page").css("max-width","80px");
        $(".link-mesa").css("margin-bottom","80px");
        $("#next").css("color","#C62828");

    }else{
        if(screen==2){
            verificar();
        }else{
            if(screen>=3){
                screen=4;
                nextSection();
            }
        }
    }
}

function prevSection(){
    if(section==4){
        section=3;
        $("#prev").css("display","none");
        $("#section-4").addClass("slideOutRight");
        $("#section-4").css("filter","brightness(0.6)");
        $("#section-3").css("filter","none");
        $("#section-3").css("display","block");
        $("#section-3").removeClass("slideOutLeft");
        $("#section-3").removeClass("slideInRight");
        $("#section-3").addClass("animated");
        $("#section-3").addClass("slideInLeft");
        setTimeout(function(){
            $("#section-4").css("display","none");
        },1000);
    }else{
        if(section==5){
            section=4;
            $("#section-5").addClass("slideOutRight");
            $("#section-5").css("filter","brightness(0.6)");
            $("#section-4").css("filter","none");
            $("#section-4").css("display","block");
            $("#section-4").removeClass("slideOutLeft");
            $("#section-4").removeClass("slideInRight");
            $("#section-4").addClass("animated");
            $("#section-4").addClass("slideInLeft");
            setTimeout(function(){
                $("#section-5").css("display","none");
            },1000);
        }else{
            if(section==6){
                section=5;
                $("#section-6").addClass("slideOutRight");
                $("#section-6").css("filter","brightness(0.6)");
                $("#section-5").css("filter","none");
                $("#section-5").css("display","block");
                $("#section-5").removeClass("slideOutLeft");
                $("#section-5").removeClass("slideInRight");
                $("#section-5").addClass("animated");
                $("#section-5").addClass("slideInLeft");
                setTimeout(function(){
                    $("#section-6").css("display","none");
                },1000);
            }
        }
    }
}
function nextSection(){
    if(section==1){
        section=2;
        $("#section-1").hide("fast");
        $("#section-1").css("filter","brightness(0.6)");
        $("#section-2").css("display","block");
        $("#section-2").addClass("animated");
        $("#section-2").addClass("slideInRight");
    }else{
        if(section==2){
            verificarC();
            consultando();
        }else{
            if(section==3){
                section=4;
                $("#prev").css("display","block");
                $("#section-3").addClass("slideOutLeft");
                $("#section-3").css("filter","brightness(0.6)");
                $("#section-4").css("filter","none");
                $("#section-4").css("display","block");
                $("#section-4").addClass("animated");
                $("#section-4").removeClass("slideOutRight");
                $("#section-4").addClass("slideInRight");
                setTimeout(function(){
                    $("#section-3").css("display","none");
                },1000);
            }else{
                if(section==4){
                    section=5;
                    $("#section-4").addClass("slideOutLeft");
                    $("#section-4").css("filter","brightness(0.6)");
                    $("#section-5").css("filter","none");
                    $("#section-5").css("display","block");
                    $("#section-5").addClass("animated");
                    $("#section-5").removeClass("slideOutRight");
                    $("#section-5").addClass("slideInRight");
                    setTimeout(function(){
                        $("#section-4").css("display","none");
                    },1000);
                    consultaAmigos();
                }else{
                    if(section==5){
                        section=6;
                        $("#section-5").addClass("slideOutLeft");
                        $("#section-5").css("filter","brightness(0.6)");
                        $("#section-6").css("filter","none");
                        $("#section-6").css("display","block");
                        $("#section-6").addClass("animated");
                        $("#section-6").removeClass("slideOutRight");
                        $("#section-6").addClass("slideInRight");
                        setTimeout(function(){
                            $("#section-5").css("display","none");
                        },1000);
                    }
                }
            }
        }
    }
}

function opcMesa(){
    $("#pop-mesa").css("display","block");
    $(".opc-share").addClass("animated");
    $(".opc-share").css("display","block");
    setTimeout(function(){
        $(".opc-share").css("margin-top","70px");
    },1);
}

function confirmDelete(){
    $(".opc-share").css("display","none");
    $(".delete-mesa").toggle("fast");
}

function defaultS(){
    $(".delete-mesa").hide("fast");
    $("#pop-mesa").css("display","none");
    $(".opc-share").css("margin-top","-2000px");
}

function deleteMesa(){
    location.href="delete.php"
}

function opcionesCompartir(){
    if(opcShare==0){
        opcShare=1;
        defaultS();
        $(".secciones").css("filter","blur(2px)");
        $("#popup-share").css("display","block");
        setTimeout(function(){
            $("#popup-share").addClass("animated");
            $("#popup-share").addClass("fadeInUp");
        },1);
    }else{
        if(opcShare==1){
            opcShare=0;
            $(".secciones").css("filter","none");
            $("#popup-share").css("display","none");
        }
    }
}

function popAddFriends(){
    if(opcShare==0){
        opcShare=1;
        $(".secciones").css("filter","blur(2px)");
        $("#pop-addFriend").css("display","block");
        $("#pop-addFriend").removeClass("fadeOutRight");
        setTimeout(function(){
            $("#pop-addFriend").addClass("animated");
            $("#pop-addFriend").addClass("fadeInRight");
        },1);
    }else{
        if(opcShare==1){
            opcShare=0;
            $(".secciones").css("filter","none");
            $("#pop-addFriend").removeClass("fadeInRight");
            $("#pop-addFriend").addClass("fadeOutRight");
            setTimeout(function(){
                $("#pop-addFriend").css("display","none");
            },1000);
        }
    }
}


function copiado(id_elemento) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}


function verificar(){
    if(verific==0){
        $("#btn-mesa").click();
    }
}
function verificarC(){
    $("#submitClient").click();
}

function submitClient(){
    section=3;
    $("#section-2").addClass("slideOutLeft");
    $("#section-2").css("filter","brightness(0.6)");
    $("#section-3").css("display","block");
    $("#section-3").addClass("animated");
    $("#section-3").addClass("slideInRight");
    setTimeout(function(){
        $("#section-2").css("display","none");
    },1000);
}

function agregado(){
    setTimeout(function(){
        $("#next").css("display","block");
        $("#verificando").css("display","none");
        $("#exito").css("display","block");
        $("#exito").html("Éxito ✓"); 
    },1000);
}
function errorAgregado(){
    setTimeout(function(){
        $("#next").css("display","block");
        $("#verificando").css("display","none");
        $("#exito").css("display","block");
        $("#exito").html("Nombre no disponible, intenta con otro"); 
    },1000)
}


