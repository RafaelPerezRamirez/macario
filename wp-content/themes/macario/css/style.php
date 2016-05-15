<?php global $colores,$tamanos;?>
<style type="text/css">
/*@font-face{
   font-family: "Gotham";
   src: url("<?php plantilla();?>/fonts/GothamRnd-Light.otf");
   font-weight:400;
}*/
*{
	margin:0px;
	padding:0px;
	color:inherit;
	text-decoration:none;
	<?php compatible('box-sizing:border-box;');?>
}
body,html{
	display:block;
	min-height:100%;
	position: relative;
}
body.home{
	overflow: hidden!important;
}
ol,ul {
	list-style-position: inside;
}
img{
	max-width:100%;
	height:auto;
	border: 0px solid;
}
a,[data-link],[data-accion]{
	<?php compatible( 'transition:1s opacity ease;' );?>
}
.oculto{
	display:none !important;
}
.escondido{
	display:none;
}
.inline-block{
	display:inline-block;
	vertical-align:middle;
}
.vertical-align-top{
	vertical-align:top;
}
.checkbox {
	display: inline-block;
	vertical-align: middle;
	margin-right: 13px;
	height: 15px;
	width: 15px;
	border: 1px solid <?php echo GRIS;?>;
	border-radius: 100%;
	cursor: pointer;
}
.checkbox:hover {
	box-shadow: 0px 0px 0px 4px white inset;
	background: <?php echo GRIS;?>;
}
.checkbox.checked{
	box-shadow: 0px 0px 0px 4px white inset;
	background: black;
}
/*ERROR GAFA*/
.gafa-mensaje,.gafa-error{
	position: fixed;
	top: -61px;
	background: url("<?php plantilla(); ?>/images/X2.png") no-repeat 2% 52% rgba(32,32,32,.9);
	min-height: 61px;
	z-index: 2147483647;
	line-height: 19px;
	font-size: 10px;
	cursor: pointer;
	color: white;
	font-weight: 100;
	padding: 10px 6%;
	left: 0px;
	right:0px;
	text-align: left;
	letter-spacing: 1px;
}
.gafa-error {
	background-color: rgba(202,25,25,.9);
}
.gafa-error h1,.gafa-mensaje h1 {
	font-size: 21px;
	font-weight: 100;
	margin-top: 16px;
}
.con_error{
	border-color:red!important;
}
/*PREGUNTAS GAFA*/
div#pregunta_gafa {
	position: fixed;
	z-index: 999;
	background: #FFF;
	padding: 80px;
	top: 30%;
	right: 0px;
	left: 50%;
	width: 360px;
	margin-left: -275px;
	text-align: center;
	border: 1px solid #808080;
}

div#pregunta_gafa .boton {
	margin: 3px 5px;
}
div#aceptar_pregunta_gafa {
	margin-top: 13px !important;
}
/*CARGANDO*/
#cargando {
	background-color: rgba(255,255,255,1);
	z-index: 100000000000000000000;
}
.cover{
	position: fixed;
	-webkit-transform: translateZ(0);
	top: 0px;
	left: 0px;
	bottom: 0px;
	right: 0px;
	z-index:999;
	background-position: center center;
	background-repeat: no-repeat;
}
/*ALIGN VERTICAL----------------------------------------------------------*/
.centrado_vertical:after {
	content: '';
	display: inline-block;
	height: 100%;
	width: 0.01%;
	vertical-align: middle;
}
.elemento_centrado {
	display: inline-block;
	width: 99.08%;
	vertical-align: middle;
}
.centrado_vertical {
	text-align: center;
}
.uppercase{
	text-transform: uppercase;
}
.text-left{
	text-align: left;
}
.text-right{
	text-align: right;
}
.text-center{
	text-align: center;
}
.text-justify{
	text-align: justify;
}
.monse{
	font-family: 'Montserrat', sans-serif;
}
.bolder{
	font-weight: 800;
}
.lighter{
	font-weight: 100;
}
.attach{
	text-decoration: line-through;
}
.sanslight{
	font-family: 'Open Sans', sans-serif;
	font-weight: lighter;
}
.sansnormal{
	font-family: 'Open Sans', sans-serif;
	font-weight: normal;
}
.pointer{
	cursor: pointer;
}
.sansbold{
	font-family: 'Open Sans', sans-serif;
	font-weight: bolder;
}
.italic{
	font-style: italic;
}
.fondos div{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	<?php compatible( 'transition:.3s ease-out;' );?>
	background-size: cover;
	opacity: 0;
	z-index: -1;
}
.fondo-home, .azulsection{
	background-image: url('<?php plantilla(); ?>/images/fondo1.png');
}
.fondo-project{
	background-image: none;
}
.fondo-about{
	background-image: color;
}
.fondo-activo{
	opacity: 1!important;
}
.contenidointerno{
	z-index: 100000;
	width: 100%;
	position: relative;
	height: 100%;
}
.contenidouno, .contenidocuatro{
    width: 60%;
	position: absolute;
	top: 50%;
	<?php compatible( 'transform: translateY(-50%);' );?>
}
.contenidouno{
	padding-left: 70px;
}
.s1last{
	font-weight: 100;
}
.s1title {
    margin-bottom: 30px;
}
.s1content {
    line-height: 68px;
    margin-bottom: 23px;
}
.botonaccion{
    border: solid 2px white;
    width: 260px;
    line-height: 45px;
    border-radius: 45px;
	<?php compatible( 'transition:.4s ease;' );?>
}
.botonaccion:hover{
	background: white;
	color: #002eff;
}
.s1buton{
	position: absolute;;
	bottom: -130px;
}
img.peace {
    margin-left: 30px;
	width: 33px;
}
.logo-macario{
	position: fixed;
	top: 5%;
	left: 6%;
	z-index: 1000000000000;
	cursor: pointer;
}
.logo-macario:hover .logo2{
	left: 4px!important;
}
.logo-macario img{
	<?php compatible( 'transform:scale(1.5);' );?>
	display: block;
	<?php compatible( 'transition:.8s ease;' );?>
}
.boton-menu{
	width: 30px;
	height: 30px;
	cursor: pointer;
	position: fixed;
	z-index: 100000000000000;
	top: 7%;
	right: 5.5%;
	display: none;
}
.home .boton-menu{
	display: block;
}
.boton-menu span{
	width: 85%;
	margin: 0 auto;
	height: 2px;
	background: white;
	position: relative;
	display: block;
	<?php compatible( 'transition:.4s ease;' );?>
}
.boton-menu:hover span{
	width: 70%;
}
.spmenu2{
	top: 6px;
}
.spmenu3{
	top: 12px;
}
img.logo1 {
    position: relative;
    top: 1px;
}
img.logo2 {
    position: relative;
    top: -9px;
    left: 4px;
}
#fp-nav.right {
    right: 90px!important;
	z-index: 100000000000000!important;
}
#fp-nav ul li a span{
	background: white!important;
}
#fp-nav ul li, .fp-slidesNav ul li{
	margin: 29px 0px!important;
}
.content{
	pointer-events: none;
	left: -20%;
	opacity: 0;
	<?php compatible( 'transition:.4s ease;' );?>
}
.contentvisible{
	left: 0%;
	opacity: 1;
	pointer-events: all;
}
.contenidocuatro {
    width: 98%;
}
.boton-envia{
	display: block;
	margin: 0 auto;
	margin-top: 50px;
}
.menu-completo{
	width: 50px;
	border-radius: 100%;
	height: 50px;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	z-index: 1000000;
	opacity: 0;
	pointer-events: none;
	<?php compatible( 'transition:.3s ease-out;' );?>
}
.menu-big{
	opacity: 1;
	pointer-events: all;
	width: 2500px!important;
	height: 2500px!important;
	border-radius: 0%!important;
}
.botonabierto span{
	background: #002eff;
}
.links-menu {
    position: absolute;
    top: 49%;
	<?php compatible( 'transform: translateY(-50%);' );?>
    right: 25%;
}
.links-menu .link-menu{
	<?php compatible( 'transition:.3s ease-out;' );?>
}
.link-menu:hover{
	color: #002eff;
	opacity: 1!important;
	margin-bottom: 20px;
}
.linkselect{
	color: #002eff;
}
.link-menu{
	display: block;
}
.botonabierto .spmenu2{
	opacity: 0;
}
.botonabierto .spmenu1{
	transform: rotate(45deg);
	top: 4px;
}
.botonabierto .spmenu3{
	transform: rotate(-45deg);
	top: 1px;
}
.contenidodos, .contenidotres{
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
}
.contenidocuatro.content.contentvisible {
    left: 0%!important;
}
.slide-proyectos{
	width: 50%;
	height: 100vh;
	display: inline-block;
	vertical-align: top;
	position: relative;
}
.slide-proyectos.spleft {
    background-size: cover;
    background-position: center;
}
.slide-proyectos.spleft {
    background-size: cover;
    background-position: center;
}
.info-proyecto.text-left {
    position: absolute;
    top: 50%;
    left: 10%;
	<?php compatible( 'transform: translateY(-50%);' );?>
}
a.boton-proyecto {
    display: block;
    border: solid 2px #002eff;
    margin-top: 75px;
}
a.boton-proyecto:hover{
	color: white;
	background: #002eff;
}
.cabecera-proyecto-interno {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
	position: relative;
}
.info-proyecto-interno {
    background: white;
    position: absolute;
    top: 40%;
    transform: translateY(-50%);
    left: 5%;
	padding: 6% 3%;
}
.cintillos{
	display: inline-block;
	width: 50%;
	height: 280px;
	vertical-align: top;
	background-size: cover;
	background-position: center;
}
.cintillos.cintilloleft {
    position: relative;
}
.textocintillo {
    position: relative;
    top: 50%;
    width: 60%;
    margin: 0 auto;
	transform: translateY(-50%);
}
.galeriaitem1 {
    width: 100%;
    height: 700px;
    background-size: cover;
    background-position: center;
}
.galeriagrilla div {
    display: inline-block;
    vertical-align: top;
    height: 700px;
    background-size: cover;
    background-position: center;
}
.ggrilla.ggrillaleft {
    width: 30%;
}
.ggrilla.ggrillaright {
    width: 70%;
}
.galeriaitem2 {
    width: 100%;
    height: 700px;
    background-size: cover;
    background-position: center;
}
.galeriaitem3 {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.fp-tooltip.right {
    display: none!important;
}
.proyecto-item {
    display: inline-block;
    width: 100%;
}
.carrete-proyecto {
    white-space: nowrap;
    position: relative;
    left: 0%;
	<?php compatible( 'transition:.4s ease;' );?>
}
.contenidodos.content.contentvisible {
    overflow: hidden;
}
.slide-proyectos .texto-superior {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 10%;
	width: 75%;
}
.slide-animado{
	background-image: url('<?php plantilla(); ?>/images/animacion.gif');
	background-size: cover;
	background-position: center left 40px;
}
.flechas-slider{
	position: fixed;
    bottom: 12%;
    left: 5%;
    z-index: 100000000000;
}
.flecha {
    width: 30px;
    height: 30px;
	background-image: url('<?php plantilla(); ?>/images/flecha.png');
	background-position: center;
    display: inline-block;
    cursor: pointer;
	pointer-events: none;
	opacity: 0.7;
}
.flechaactiva{
	opacity: 1;
	pointer-events: all!important;
}
.atras-slider.flecha {
    transform: rotate(-180deg);
}
.pititulo {
    width: 95%;
    white-space: normal;
    display: block;
}
/*colores--------------------------------------*/
<?php
	foreach( $colores as $clase => $color ){
		echo '.'.$clase.' { background-color: '.$color.'; }';
		echo '.color_'.$clase.' { color: '.$color.'; }';
	};
	foreach( $tamanos as $clase => $color ){
		echo '.'.$clase.' { font-size: '.$color.'; }';
	};
?>
</style>
