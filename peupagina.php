<?php
/*
Plugin Name: Peu de pàgina per defecte per a noves entrades 
Plugin URI: Escriu l'adreça URL completa del teu plugin dins de Github
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author: Roger Pijoan Catala
Author URI: https://www.github.com/ropica1718daw2/
License: GNU GPLv3 
*/ 

function admin_menu_peu_pagina(){ 
	$titolPagina="Peu de pàgina per defecte";
	$titolEntrada="Peu de pàgina per defecte";
	$role="administrator";
	$id="peu_pagina_per_defecte";
	$nom_funcio="nouPeuPagDef";
	add_menu_page($titolPagina,$titolEntrada,$role,$id,$nom_funcio);
}

function nouPeuPagDef(){
	include_once('formPeuPag.php');
}

function afegPeuPagDef(){
    echo "<div style='color: red;
    font-size: 10px;
    margin: 10px;'>".get_option('footer_text')."</div>";
}

add_action('wp_footer','afegPeuPagDef');
add_action('admin_menu','admin_menu_peu_pagina');
?>
