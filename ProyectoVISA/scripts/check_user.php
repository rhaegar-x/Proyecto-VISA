<?php 	
	header("Content-type: application/json");
	include("datos.php");
	$bd=new PDO($dsnw, $userw, $passw, $optPDO);
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	//$usuario = 123457;
	//$pass = "hugo";

	try {
		$r['existe']=false;
		$r['admin']=false;
		$cont=0;
		$res=$bd->query("SELECT * FROM usuarios WHERE correo='$usuario' AND contraseña='$pass';");
		foreach($res->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
			$row[$cont] = $v;
			$cont++;
		}
		if ($cont>0){
			$r['existe']=true;
			session_start();
			$_SESSION['usuario']=$row[0]['nombre'];
			$_SESSION['id']=$row[0]['id_usuario'];
			if ($row[0]['nivel']==1){
				$r['admin']=true;
				$_SESSION['admin']="admin";
			}   
		}
	} catch (Exception $e) { 
		//echo $e; 
	}
	//echo $r['existe'];
	echo json_encode($r);
?>



