<?php
if($_REQUEST['d'] > 0){
	$c = new DepotServer\BaseDatos();
	$campos = array();
	$res = $c::table("usuarios")->select()->where( array("id" => $_REQUEST['d']) )->get()->first();
	echo json_encode($res);
}
?>