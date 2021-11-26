$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});
function validar(){

    var usuario = document.getElementById("usuario").value;
    var contraseña = document.getElementById("contraseña").value;
    if(usuario =="blader10"&& contraseña=="1524"){
      window.location="file:///E:/trabajo%20de%20pagina%20web/trabajo.html"

    }else{
        alert("error intente de nuevo");
    }
}