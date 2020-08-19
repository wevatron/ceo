(function ($) {
    'use strict';
    /*==================================================================*/
	
	function clearForm(){
		$("#panelesForm").closest('form').find("input[type=text],input[type=email], textarea").val("");
	}

       // validate signup form on keyup and submit
    $("#panelesForm").validate({
        rules: {
            nombre: "required",
            correo: {
                required: true,
                email: true
            },
            "paneles[]": {
                required: true
            }
        },
        messages: {
            nombre: "Por favor ingresa tu nombre",
            correo: "Por favor ingresa un correo valido",
            "paneles[]": "Debe escoger un panel obligatoriamente."
        },

        submitHandler: guardarDatos
    });


       /* form submit */
    function guardarDatos() {
        var data = $("#panelesForm").serialize();
        $("#btn-registrarme").prop( "disabled", true );

        $.ajax({
            type: "POST",
            url  : 'https://www.conectandoemprendedores.mx/api/',
            data : data,
            beforeSend: function() {
                $("#messages").fadeOut();
                $("#btn-registrarme").html('Registrando...');
            },
            success :  function(data) {
                if(data.status==500){
                    $("#messages").fadeIn(1000, function(){
                        $("#messages").html('<div class="alert alert-danger response-exist"> '+data.message+'</div>');
                        $("#btn-registrarme").html('Registrarme');
                        $( "#btn-registrarme" ).prop( "disabled", false );
                        $("#messages").delay(3200).fadeOut(300);
                        clearForm();
                    });

                }
                else if(data.status==200){
                    $("#messages").fadeIn(1000, function(){
                        $("#messages").html('<div class="alert alert-danger response-success"> '+data.message+'</div>');
                        $("#btn-registrarme").html('Registrarme');
                        $( "#btn-registrarme" ).prop( "disabled", false );
                        $("#messages").delay(3200).fadeOut(300);
					    clearForm();
                    });
                }
                else{
                    $("#messages").fadeIn(1000, function(){
                        $("#messages").html('<div class="alert alert-danger response-error"> '+data.message+' </div>');
                        $("#btn-registrarme").html('Registrarme');
                        $("#btn-registrarme").prop( "disabled", false );
                        $("#messages").delay(3200).fadeOut(300);

                        clearForm();
                    });

                }
                
            }
        });
        return false;
    }
    /* form submit */
 

})(jQuery);