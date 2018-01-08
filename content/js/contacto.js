$(document).ready(function(){

	$("#send_contacta").click(function(e){
		e.preventDefault();//Evita que se envie el formulario para validarlo antes
    let valid_name = true, valid_email = true, valid_tema = true;

		let nombre = $("#nombre").val(),
      email = $("#email").val().toLowerCase(),
      tema = $("#tema").val();

    //Chechar que sea un nombre valido
    let is_name = /(?=.*\w+.*)^[A-z ÁÉÍÓÚÜÑáéíóúüñ]+$/.test(nombre),
      valid_length_nom = nombre.length < 20 && nombre.length > 3;
		if(!is_name || !valid_length_nom){
      valid_name = false;
      $("#nombre").addClass("is-invalid");
			setTimeout(function(){
        $("#nombre").removeClass("is-invalid");
			}, 2000);
		}

    //checa que sea un email valido
    let is_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!is_email.test(email)){
      valid_email = false;
			$("#email").addClass("is-invalid");
			setTimeout(function(){
        $("#email").removeClass("is-invalid");
			}, 2000);
		}

    //Chechar que el tema sea valido
    let is_text = /(?=.*\w+.*)^[A-z0-9 ÁÉÍÓÚÜÑáéíóúüñ]+$/.test(tema),
      valid_length_tem = tema.length <= 255 && tema.length > 5;
		if(!is_text || !valid_length_tem){
      valid_tema = false;
      $("#tema").addClass("is-invalid");
			setTimeout(function(){
        $("#tema").removeClass("is-invalid");
			}, 2000);
		}

		if(valid_name&&valid_email&&valid_tema){
			return saveCotizacion(nombre, email, tema);
		}
	});


  //content es el tema del proyecto a cotizar
  //  ------  funciones auxiliares  ------
  function saveCotizacion(cotName, cotEmail, cotContent){
    $.ajax({
        url: "content/phpfx/saveCotizacion.php",
        type: 'POST',
        data: { //datos a enviar
          name: cotName,
          email: cotEmail,
          content: cotContent,
        },
        success: function (data, status, xhr) {
          alert(data);
        },
        error: function (xhr, ajaxOptions, thrownError) {
           console.log(xhr.catch);
           console.log("-----------");
           console.log(ajaxOptions);
           console.log("-----------");
           console.log(thrownError);
        },
    });
  }
});
