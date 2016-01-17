<?php
require_once(dirname( __FILE__ ) ."/core/vendor/autoload.php");
/*Plugin Name: Funciones de arranque GAFA v1.2*/
global $movil;

/*ARRANQUE DE FUNCIONES*/
require_once(dirname( __FILE__ ) ."/functions/inicio.php");

// Clases de utilidades. Importará todos los archivos .php dentro de la carpeta "util".
foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . "util" . DIRECTORY_SEPARATOR . "*.php") as $filename)
{
    require_once $filename;
}

/*FUNCIONES LOGIN*/
if( !function_exists('nuevo_logo') ){
	function nuevo_logo() { ?>
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url("/wp-content/logo.png");
				padding-bottom: 30px;
				background-position: center;
				width: 100%;
				background-size: 50%;
			}
			#nav {
				display: none;
			}
			body{
				background-color: #FFF;
			}
		</style>
	<?php }
};
add_action( 'login_enqueue_scripts', 'nuevo_logo' );
if( !function_exists('M_my_login_logo_url') ){
	function M_my_login_logo_url() {
		return home_url();
	};
};
add_filter( 'login_headerurl', 'M_my_login_logo_url' );
if( !function_exists('M_my_login_logo_url_title') ){
	function M_my_login_logo_url_title() {
		return 'Retornar al home';
	};
};
add_filter( 'login_headertitle', 'M_my_login_logo_url_title' );

/*CAMBIAR MAILS*/
add_filter( 'wp_mail_content_type', 'set_html_content_type' );
if( !function_exists('set_html_content_type') ){
	function set_html_content_type() {
		return 'text/html';
	}
};
/*QUITAR CSS DEL HEADER*/
add_action('get_header', 'quitar_margin');
if( !function_exists('quitar_margin') ){
	function quitar_margin() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	};
};
/*FUNCIONES GAFA*/
if( !function_exists('mario') ){
	function mario($texto = '' , $print = true){
		global $current_user;
		if( isset($current_user->data) && 'administrator' == $current_user->roles[0] ){
			$text = '';

			$text .= '<pre class="mario_dev">';
			$text .=print_r($texto, true);
			$text .='</pre>';
			if( $print ){
				echo $text;
			}else{
				return $text;
			};
		};
	};
};
if( !function_exists('plantilla') ){
	function plantilla($echo=true){
		if( $echo ){
			echo get_template_directory_uri();
		}else{
			return get_template_directory_uri();
		};
	};
};
if( !function_exists('get_is_mobile') ){
	function get_is_mobile(){
		global $movil;
		//mobile browsers
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$iemobile = ( strpos($_SERVER['HTTP_USER_AGENT'],"iemobile") || strpos($_SERVER['HTTP_USER_AGENT'],"IEMobile") );

		if ( (($iphone || $android || $palmpre || $ipod || $berry !== FALSE || $iemobile) === true) )  {
			$movil = true;
		}else{
			$movil = false;
		};
	};
};
get_is_mobile();


function quitar_barra_administracion(){
    return false;
}
add_filter( 'show_admin_bar' , 'quitar_barra_administracion');

/* Revisar Admin */
function sera_admin(){
	if( is_admin() && isset( $current_user->data->ID ) ){
		global $current_user;
		$role = $current_user->roles;
		if( isset( $role[0] ) && $role[0] != 'administrator'){
			wp_redirect(get_home_url());
			exit;
		};
	};
};
add_action('admin_init','sera_admin');

add_filter( 'wp_get_attachment_image_src', 'media_files_url',4,50 );
function media_files_url( $image ) {
	$url = reset( $image );
	$split= explode('/wp-content/',$url);

	$image[0] = WP_SITEURL.'/wp-content/'.end($split);
	return $image;
}
add_filter( 'send_password_change_email', 'no_enviar_password_change_email',3,50 );
function no_enviar_password_change_email( $enviar, $user, $userdata ){
	return false;
};
