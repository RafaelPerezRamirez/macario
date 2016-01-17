<?php
// Incluir todos los archivos php de la carpeta actual que comienzen con "class-".

foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . "class-*.php") as $filename)
{
    require_once $filename;
}
