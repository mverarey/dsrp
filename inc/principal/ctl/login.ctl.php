<?php
use DepotServer\{Configuracion, Conexion, BaseDatos};
if( strlen($this->req['a']) > 0 && strlen($this->req['b']) > 0 && strlen($this->req['c']) > 0){
	$reqs = array("a","b","c","d","e","f","g","h");
	foreach($reqs as $req){
		if( strlen($this->req[$req]) > 0){
			$ruta .= $this->req[$req]."/";
		}
	}
	$this->ev("ruta",$ruta);
}

$script = <<<EOM
/* $("input[name='usuario']").mask("****?********"); */
EOM;
$this->agregarScript($script);
if($_REQUEST['validacion'] == md5(date("dmY"))){

	$bd = new BaseDatos();
	$_SESSION['usuario'] = array();
	try{
		$res = $bd->login($_REQUEST['usuario'],$_REQUEST['password']);
	}catch(\Exception $e){
		echo $this->msgError("Debe instalar DeSeRP para poder continuar.");
		echo "<p class='lead alert alert-warning'>¿Desea instalar ahora? <a href='/instalador' class='btn btn-primary'>Instalar</a></p>";
	}
	if($res){
		$fila = get_object_vars($res);
		//$fila = mysql_fetch_assoc($res);
		//print_r($fila);
		if(strlen($fila['usuario'])>0){
			$_SESSION['activa'] = true;
			foreach($fila as $col => $val){
				$_SESSION['usuario'][$col] = $val;
			}
			unset($_SESSION['usuario']['fecha_creacion']);
			unset($_SESSION['usuario']['password']);
			unset($_SESSION['usuario']['activo']);

			$_SESSION['usuario']['ultimaActualizacion'] = date("d/m/y H:i");

			$modulosDisponibles = $this->obtenerPermisos($bd);
			foreach ($modulosDisponibles as $modulo) {
				$_SESSION['usuario']['area'][$modulo->modulo] = $modulo->nivel;
			}
			$_SESSION['usuario']['area']['principal'] = 3;
			$_SESSION['usuario']['menu'] = $this->generarMenu( array_keys($_SESSION['usuario']['area']) );

			$archivo = 'perfil_'.md5('perfil_'.$_SESSION['usuario']['id']).'_thumb.jpg'; $path = 'tmp/imgs/';
			$this->filesystem->existeArchivo($path.$archivo)  ? $_SESSION['usuario']['imagen'] = '/'.$path.$archivo : $_SESSION['usuario']['imagen'] = '/assets/admin-lte/dist/img/avatar5.png';

			if(strlen($_REQUEST['ruta']) > 0){
				header("Location: /".$_REQUEST['ruta']);
				exit;
			}else{
				header("Location: /");
				exit;
			}
		}else{
			$this->ev("clase","input_error");
			$this->ev("msg",$this->msgError("Usuario o contrase&ntilde;a no v&aacute;lida"));
		}
	}else{
		$this->ev("clase","input_error");
		$this->ev("msg",$this->msgError("Usuario o contrase&ntilde;a no v&aacute;lida"));
	}
}

if($_SESSION['activa']){
	header("Location: /");
	exit;
}
?>
