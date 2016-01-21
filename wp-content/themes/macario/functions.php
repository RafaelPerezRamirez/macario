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
	<div class="section negro seccion1">
		<div class="cabecera">
			<div class="logocabecera">
				<img src="<?php plantilla(); ?>/images/logo.png" alt="Logo de macario" />
			</div>
		</div>
		<div class="botonmenu">
			<span class="lineamenu lm1"></span>
			<span class="lineamenu lm2"></span>
			<span class="lineamenu lm3"></span>
		</div>
		<div class="textobanner sansnormal uppercase color_blanco">
			<div><span class="bolder">a</span> <span class="lighter attach">not so</span></div>
			<div><span class="bolder">different</span></div>
			<div class="inlineraya"><div class="rayabanner"></div><!-- --><span class="bolder texto--raya">folio</span></div>
		</div>
		<div class="menubanner color_blanco sansbold uppercase">
			<div class="menuitem mnit1"><span class="rayitamenu"></span> about us</div>
			<div class="menuitem mnit2"><span class="rayitamenu"></span> blog</div>
			<div class="menuitem mnit3"><span class="rayitamenu"></span> project</div>
			<div class="menuitem mnit4"><span class="rayitamenu"></span> contact</div>
		</div>
		<div class="">

		</div>
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
		<div class="seccion-2-row seccionfade">
			<div class="cabeceraseccion cbs1 verde">
				<div class="textocabecera color_blanco uppercase sansnormal">
					about us
				</div>
			</div>
			<div class="infostaff color_gris_o text-left seccionfade2">
				<div class="normal uppercase bolder sansbold">staff.</div>
				<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
				<div class="medium lighter parrafo sanslight">Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </div>
			</div>
		</div><!--
	 --><div class="seccion-2-row seccionfade">
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
			<div class="teamseccion seccionfade2">
				<div class="team-member">
					<div class="memberphoto"></div>
					<div class="memberinfo text-left small color_gris_o uppercase">
						<div class="bolder sansbold v_small">sonia ibarra</div>
						<div class="lighter sanslight v_small">designer</div>
					</div>
					<div class="memberlinks">
						<div class="mlinkitem memberinline">
							<div class="normal uppercase color_gris_o medium sansnormal">cv <img src="<?php plantilla(); ?>/images/flechamember.png" class="flechamember" /> </div>
						</div>
						<div class="mlinkitem memberinline">
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
	<div class="seccionprojects">
		<div class="medium color_blanco posicionar">
			jhbbjhb
		</div>
	</div>
<?php
}
function seccion4(){
?>
	<div class="section seccionfade4 bajarsec">
		<div class="contacto--row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.839188749717!2d-99.16428918505171!3d19.419352946136097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff3a1d3d7d93%3A0xc6c52a6bb90548f1!2sColima+220%2C+Roma+Nte.%2C+06700+Ciudad+de+M%C3%A9xico%2C+D.F.!5e0!3m2!1ses!2smx!4v1453022322335" width="87%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div><!--
	 --><div class="contacto--row text-left color_gris_o sansnormal medium">
			<div class="contacto--direccion uppercase">
				90802 MONTE ALBAN 301. PO 68789
				MÉXICO, DISTRITO FEDERAL
			</div>
			<div class="contacto--lineas uppercase">
				<div class="contactofon">
					+64 9 345 6758
				</div>
				<div class="contactomail">
					info@CASAMACARIO.MX
				</div>
				<div class="contacto--legal">
					<img src="<?php plantilla(); ?>/images/copy.png"/> 2015  DSGN. All rights reserved - MACARIO CASA CREATIVA
				</div>
			</div>
			<div class="contacto--logos sansbold">
				<img src="<?php plantilla(); ?>/images/logo2.png" alt="" />
				<div class="separator"></div>
				<div class="uppercase bolder normal color_gris_o">associates</div>
				<div class="uppercase bolder normal color_gris_o">studio</div>
				<div class="uppercase bolder normal color_gris_o">design</div>
				<div class="contacto-redes">
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
