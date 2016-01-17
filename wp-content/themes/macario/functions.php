<?php
global $colores,$tamanos;

if( isset( $_POST['ajax_gafa'] ) ){
	require_once('procesos/ajax.php');
};
/*COLORES*/
define( 'GRIS',	'silver' );
define( 'NEGRO','black' );
define( 'BLANCO','white' );
define( 'GRIS_O','#333333');
define( 'VERDE','#b8d19c');

$colores = array(
	'gris'	=> GRIS,
	'negro'	=> NEGRO,
	'blanco'=> BLANCO,
	'gris_o'=> GRIS_O,
	'verde'	=> VERDE,
);

$tamanos = array(
	'v_small'	=> '10px',
	'small'		=> '11px',
	'medium'	=> '12px',
	'normal'	=> '14px',
);
/*OPCIONES*/
set_options_gafa();
function set_options_gafa(){
	/* EJEMPLO
	$home				= get_last_post('opciones_home');

	define('HOME',		$home);
	*/
};
function seccion1(){
?>
	<div class="section negro">
		<div class="cabecera">
			<div class="logocabecera">
				<img src="<?php plantilla(); ?>/images/logo.png" alt="Logo de macario" />
			</div>
			<div class="botoncabecera">

			</div>
		</div>
		<h1></h1>
		<div class="redescabecera">
			<a href="#" class="redcabecera redctw" target="_blank"></a>
			<a href="#" class="redcabecera redcfb" target="_blank"></a>
			<a href="#" class="redcabecera redcli" target="_blank"></a>
		</div>
	</div>
<?php
}
function seccion2(){
?>
	<div class="section blanco">
		<div class="seccion-2-row">
			<div class="cabeceraseccion cbs1 verde">
				<div class="textocabecera color_blanco uppercase sansnormal">
					about us
				</div>
			</div>
			<div class="infostaff color_gris_o text-left">
				<div class="normal uppercase bolder sansbold">staff.</div>
				<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
				<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
			</div>
		</div><!--
	 --><div class="seccion-2-row">
	 		<div class="estudioseccion">
	 			<div class="estudio--row">
					<div class="medium bolder parrafo sansbold">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
					<div class="medium bolder parrafo sansbold">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
					<div class="medium bolder parrafo sansbold">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>

					<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
					<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
					<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
	 			</div><!--
			 --><div class="estudio--row">
					<div class="fotoestudio"></div>
	 			</div>
	 		</div>
			<div class="teamseccion">
				<div class="team-member">
					<div class="memberphoto"></div>
					<div class="memberinfo text-left small color_gris_o uppercase">
						<div class="bolder">sonia ibarra</div>
						<div class="lighter">designer</div>
					</div>
					<div class="memberlinks">
						<div class="mlinkitem">
							<div class="normal uppercase color_gris_o">cv <img src="<?php plantilla(); ?>/images/flechamember.png" alt="" /> </div>
						</div>
						<div class="mlinkitem">
							<a href="#" class="redmember redfb" target="_blank"></a>
							<a href="#" class="redmember redtw" target="_blank"></a>
							<a href="#" class="redmember redli" target="_blank"></a>
							<a href="#" class="redmember redgmas" target="_blank"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}
function seccion3(){
?>

<?php
}
function seccion4(){
?>
	<div class="section">
		<div class="contacto--row">

		</div><!--
	 --><div class="contacto--row text-left color_gris_o">
			<div class="contacto--direccion normal uppercase">
				90802 MONTE ALBAN 301. PO 68789
				MÉXICO, DISTRITO FEDERAL
			</div>
			<div class="contacto--lineas normal uppercase">
				<div class="contactofon">
					+64 9 345 6758
				</div>
				<div class="contactomail">
					info@CASAMACARIO.MX
				</div>
				<div class="contacto--legal normal">
					2015  DSGN. All rights reserved - MACARIO CASA CREATIVA
				</div>
			</div>
			<div class="contacto--logos">
				<img src="<?php plantilla(); ?>/images/logo2.png" alt="" />
				<div class="uppercase bolder normal color_gris_o">associates</div>
				<div class="uppercase bolder normal color_gris_o">studio</div>
				<div class="uppercase bolder normal color_gris_o">design</div>
				<div class="contacto-redes">
					<a href="#" class="redcontacto redfb2" target="_blank"></a>
					<a href="#" class="redcontacto redtw2" target="_blank"></a>
					<a href="#" class="redcontacto redli2" target="_blank"></a>
					<a href="#" class="redcontacto redgmas2" target="_blank"></a>
				</div>
			</div>
		</div>
	</div>
<?php
}

function get_last_post( $post_type = false ){
	if( !$post_type ){ return; };

	$last = get_posts( array(
		'post_type'			=> $post_type,
		'posts_per_page'	=> 1,
		'fields'			=> 'ids',
	) );

	if( !$last && !is_admin() ){ die('No hay opciones de: '.$post_type); };
	return reset( $last );
};


/*CLASES*/
require_once('classes/inicio.php');


function compatible( $string = '' ){
	$c = array(
		'',
		'-moz-',
		'-ms-',
		'-o-',
		'-webkit-',
	);
	foreach( $c as $x ){
		echo $x.$string;
	};
};
/*FUNCIONES CON POSTS*/
if( !function_exists('crear') ){
	function crear( $post_type = false, $usuario = false, $fecha = false ){
		if( !$post_type ){ return; };
		if( !$usuario ){
			global $current_user;
			$usuario = $current_user->ID;
		};
		$post_nuevo = array(
			'post_title'	=> '',
			'post_status'	=> 'publish',
			'post_author'	=> $usuario,
			'post_type'		=> $post_type,
		);
		if( $fecha ){
			$post_nuevo['post_date'] = $fecha;
		};

		return  wp_insert_post( $post_nuevo );
	};
};
if( !function_exists('actualizar_nombre') ){
	function actualizar_nombre( $id_post = false, $nombre = false ){
		if( !$id_post || !$nombre ){ return; };
		return  wp_update_post(array(
			'post_title'	=> $nombre,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('actualizar_status') ){
	function actualizar_status( $id_post = false, $post_status = false ){
		if( !$id_post || !$post_status ){ return; };
		return  wp_update_post(array(
			'post_status'	=> $post_status,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('actualizar_fecha') ){
	function actualizar_fecha( $id_post = false, $fecha = false ){
		if( !$id_post || !$fecha ){ return; };
		return  wp_update_post(array(
			'post_date'		=> $fecha,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('actualizar_contenido') ){
	function actualizar_contenido( $id_post = false, $txt = false ){
		if( !$id_post || !$txt ){ return; };
		return  wp_update_post(array(
			'post_content'		=> $txt,
			'ID'			=> $id_post,
		));
	};
};
if( !function_exists('eliminar') ){
	function eliminar( $id_post = false ){
		if( !$id_post ){ return; };
		return  wp_delete_post( $id_post, true );
	};
};


?>
