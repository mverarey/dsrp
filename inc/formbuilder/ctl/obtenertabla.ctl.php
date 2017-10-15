<?
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$tabla = "test_formbuilder";

$c = new Conexion();

$input = json_decode(file_get_contents('php://input'), true);
$sort = "";

if(isset($input["limit"])) {
	$limit = $input["limit"];
} else {
	$limit = 10;
}

if(isset($input["offset"])) {
	$offset = $input["offset"];
} else {
	$offset = 0;
}

if(isset($input["sort"])) {
	$sort = "ORDER BY ".$input["sort"];
	if(isset($input["order"])) {
		$order = $input["order"];
	} else {
		$order = "";
	}
} else {
	$sort = "";
	$order = "";
}

if(isset($input["search"])) {
	$search = $input["search"];
} else {
	$search = ""; 
}

if($search == "") {
	$where = "";
} else {
	$where = ' WHERE  id LIKE "'.$search.'"  OR campo LIKE "%'.str_replace(' ','%',$search).'%"  OR numero LIKE "%'.str_replace(' ','%',$search).'%"  OR textolargo LIKE "%'.str_replace(' ','%',$search).'%" ';
}

$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM ".$tabla." ".$where." ".$sort." ".$order." LIMIT ".$limit." OFFSET ".$offset;
$res = $c->query($sql);
$count = reset(mysql_fetch_row($c->query("SELECT FOUND_ROWS()")));

$result = array();
if($c->cantidad($res) > 0){
	while($f = mysql_fetch_assoc($res)){
		$datos = array();
		foreach($f as $col => $val){
			$datos[$col] = $val; //utf8_encode($val);
		}
		$result[] = $datos;
	}
}


echo "{";
echo '"total": ' . $count . ',';
echo '"rows": ';
echo json_encode($result);
echo "}";
?>