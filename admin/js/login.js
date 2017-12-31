$(document).ready(function(){

	$("#sub").click(function(e){
		e.preventDefault();

		let b_us = $("#Euser").val()!="",
      b_ps = $("#Epassw").val().length >= 5;
		if(!b_us){
      $("#Euser").addClass("is-invalid");
			setTimeout(function(){
        $("#Euser").removeClass("is-invalid");
			}, 2000);
		}
		if(!b_ps){
			$("#Epassw").addClass("is-invalid");
			setTimeout(function(){
        $("#Epassw").removeClass("is-invalid");
			}, 2000);
		}

		if(b_us&&b_ps){
			$("#form-log").submit();
		}

	});
});
