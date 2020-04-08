function keyCode(event) {
    var x = event.keyCode;
    if (x == 13) {
    	validarUsuario();
    }
}
function validarUsuario(){
	var usu=document.getElementById('usuario').value;
	var pass=document.getElementById('pass').value;
    var num = new RegExp("^[0-9]");
	var cantidad= usu.length;
	var continua=true;
	var i;
	if (continua===true){
		if (pass!=="" && usu!==""){
			verifica_usuario();
		}else{
			alert("Escriba en los campos porfavor!");
		}
	}else{
		alert(" Usuario incorrecto, inserte solo numeros");
		document.getElementById("usuario").value = "";
		document.getElementById("pass").value = "";
	}
}
function verifica_usuario(){
    var usuario = document.getElementById('usuario').value;
    var pass = document.getElementById('pass').value;
    $.ajax({
		url:"scripts/check_user.php",
		data: {usuario:usuario, pass:pass},
		type:"POST",
		success:function(data){
			if(data['existe']===true){
				if(data['admin']===true){
					alert('the admin has logged-in');
					//window.location.href="gestion.php";
				}else{
					alert('a normal user has logged-in');
					//window.location.href="gestion.php";
				}
			}else{
			  document.getElementById('pass').value = "";
			  alert("Sus datos son incorrectos.....");
			}
	  	}
    })
}
