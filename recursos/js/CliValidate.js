// JavaScript Validación
$('document').ready(function(){
  // Validación para campos de texto exclusivo, sin caracteres especiales ni números
  var nameregex = /^[a-zA-Z ]+$/;
  $.validator.addMethod("validname", function( value, element ) {
    return this.optional( element ) || nameregex.test( value );
  });

  // Máscara para validación de Email
  var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  $.validator.addMethod("validemail", function( value, element ) {
    return this.optional( element ) || eregex.test( value );
  });

  $("#formCliente").validate({
    rules:
    {

//--Validación para informacion principal
      cliNombre: {
        required: true,
        validname: true,
        minlength: 4
      },

      cliApellido: {
        required: true,
        validname: true,
        minlength: 4
      },
      cliNss: {
        minlength: 10,
        maxlength: 10
      },
      cliRfc: {
        minlength: 13,
        maxlength: 13
      },
      cliNivAcademico: {
        validname: true
      },
//--Validación para informacion direccion
      cliCalle: {
        required: true
      },
      cliColonia: {
        required: true
      },
      cliNumExt: {
        required: true
      },
      cliCP: {
      },
      cliAntiguedad: {
        required: true
      },
//--Validación para informacion localizacion
      cliTelCasa: {
        required: true
      },
      cliTelMovil: {
      },
      cliEmail: {
        validemail: true,
        required: true
      },
//--Validación para Iformación empresa
      cliEmpresaNombre: {
        required: true,
        validname: true,
        minlength: 4
      },
      cliEmpresaPuesto: {
        required: true,
        validname: true,
        minlength: 4
      },
      cliEmpresaCalle: {
        minlength: 4
      },
      cliEmpresaColonia: {
        minlength: 4
      },
      cliEmpresaCP: {
      },
      cliEmpresaAnt: {
      },


    },

//--Mensajes para informacion principal
    messages:
    {
      cliNombre: {
       required: "Ingresa nombre(s)",
       validname: "El nombre contiene caracteres no permitidos",
       minlength: "El nombre es demasiado corto"
      },
      cliApellido: {
        required: "Ingresa apellido(s)",
        validname: "El apellido contiene caracteres no permitidos",
        minlength: "El apellido es demasiado corto"
      },
      cliNss: {
        maxlength: "NSS muy largo",
        minlength: "NSS muy corto"
      },
      cliRfc: {
        maxlength: "RFC muy largo",
        minlength: "RFC muy corto"
      },
//--Mensajes para informacion direccion
      cliCalle: {
        required: "Ingresa la calle"
      },
      cliColonia: {
        required: "Ingresa la colonia"
      },
      cliNumExt: {
        required: "Ingresa un número"
      },
      cliAntiguedad: {
        required: "Ingresa la antigüedad"
      },
//--Mensajes para informacion localizacion
      cliTelCasa: {
        required: "Ingresa un número de localización",
        minlength: "Número muy largo",
        maxlength: "Número muy corto"
      },
      cliEmail: {
        validemail: "Introduzca correctamente su correo",
        required: "Ingresa un correo de localización"
      },
    },


    errorPlacement : function(error, element) {
      $(element).closest('.form-group').find('.invalid-feedback').html(error.html());
    },
    highlight : function(element) {
      $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
      $(element).closest('.form-group').find('.invalid-feedback').html('');
    },


    submitHandler: function(form) {
      form.action="../clientes/actions/newCliente.php";
      form.submit();      
    }
  });
})
