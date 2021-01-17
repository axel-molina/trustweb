$(document).ready(function(){

    $(".php-email-form").bind("submit", function(){
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            success:function(){
                
                $("#alerta").removeClass("d-none").removeClass("alert-danger").removeClass("alert-success").addClass("alert-success");
                $(".respuesta").html("Enviado!");
                $(".mensaje-alerta").html("El mensaje ha sido enviado correctamente");
           
        },
            error:function(){
                $("#alerta").removeClass("d-none").addClass("alert-danger");
                $(".respuesta").html("Error al enviar!");
                $(".mensaje-alerta").html("El mensaje no se pudo enviar, intentalo denuevo.");
            }
        });
        return false;
    });
});