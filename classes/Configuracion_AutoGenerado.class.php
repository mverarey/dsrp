<?php namespace DepotServer;

/**
 * Configuración
 *
 * NOTA IMPORTANTE:
 * Este archivo deberá ser configurado como SOLO-LECTURA durante la 
 * instalación. Si hace cambios en el archivo, asegurese de protegerlo
 * nuevamente despues de hacer los cambios.
 *
 * @access       public
 * @author       Mauricio Vera <m.vera@depotserver.com>
 * @copyright    DepotServer 2010
 * @name         Configuracion
 * @since		0.1_beta
 * @var			array	servidor, usuario, password, db, debug
 * @version		5.0
 */
class Configuracion{

	// Base de Datos	
	var $servidor = "localhost";
	var $usuario = "root";
	var $password = "1234";
	var $db = "deserp";

	// SMTP
	var $smtp_host = "localhost";
	var $smtp_port = "25";
	var $smtp_auth = true;
	var $smtp_usuario = "qwer";
	var $smtp_password = "qwerqwqer";
	var $smtp_persist = false;
	
	// Generales
	var $url_absoluta = "https://localhost";
	var $locale = "es_MX";
	var $debug = false;
}
?>