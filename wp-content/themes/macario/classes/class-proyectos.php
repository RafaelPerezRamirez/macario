<?php
    namespace macario;
    class Proyectos{
        //Atributos
        public $ID                      = 0;
        public $Nombre                  = '';
        public $Desc_corta              = '';
        public $Desc_larga              = '';
        public $Foto_principal          = '';
        public $Foto_principal_interna  = '';
        public $Permalink               = '';
        public $Imagencintillo          = '';
        public $Contenidouno            = '';
        public $Contenidodos            = '';
        public $Contenidotres           = '';
        public $Contenidocuatro         = '';
        public $Contenidocinco          = '';

        //Metodos
        function __construct( $id = 0 ){
            $this->ID               = $id;
            $meta                   = get_post_meta( $this->ID );
            $this->Nombre           = get_the_title( $this->ID );
            $this->Desc_corta       = get("info_descripcion_corta", 1, 1, $id);
            $this->Desc_larga       = get("info_descripcion_larga", 1, 1, $id);
            $this->Foto_principal   = get("info_imagen_principal", 1, 1, $id);
            $this->Foto_principal_interna   = get("info_imagen_principal_interna", 1, 1, $id);
            $this->Permalink        = get_permalink( $this->ID );
            $this->Imagencintillo   = get("info_imagen_cintillo", 1, 1, $id);
            $this->Contenidouno     = get("info_contenido_uno", 1, 1, $id);
            $this->Contenidodos     = get("info_contenido_dos", 1, 1, $id);
            $this->Contenidotres    = get("info_contenido_tres", 1, 1, $id);
            $this->Contenidocuatro  = get("info_contenido_cuatro", 1, 1, $id);
            $this->Contenidocinco   = get("info_contenido_cinco", 1, 1, $id);
        }
    }
?>
