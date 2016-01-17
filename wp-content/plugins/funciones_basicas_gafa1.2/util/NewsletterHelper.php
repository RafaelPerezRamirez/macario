<?php
require_once(__DIR__ . '/../php-sdk-development/src/Ctct/autoload.php');

use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\ContactList;
use Ctct\Components\Contacts\EmailAddress;
use Ctct\Exceptions\CtctException;

/**
 * Configurar aquí los setting, tokens, y api keys del newsletter.
 */
class NewsletterSettings
{
    /**
     * Define aquí el api key, es parecido a ésto: "xxxxxxxxxxxxxxxxxxxxxxxx". Éste número se genera en una web que probee el servicio de newsletter.
     *
     * NO LLAMAR DIRECTAMENTE, UTILIZAR EL MÉTIDO: NewsletterHelper::ApiKey()
     */
    const ApiKey = "";

    /**
     * Define aquí el access token, es parecido a ésto: "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx". Éste número se genera en una web que probee el servicio de newsletter.
     *
     * NO LLAMAR DIRECTAMENTE, UTILIZAR EL MÉTIDO: NewsletterHelper::AccessToken()
     */
    const AccessToken = "";

    /**
     * Define aquí el access token, es parecido a ésto: "9999999999". Usa el método NewsletterHelper::GetLists() para saber éste número.
     *
     * NO LLAMAR DIRECTAMENTE, UTILIZAR EL MÉTIDO: NewsletterHelper::ListNumber()
     */
    const ListNumber = "";
}

/**
 * Ayuda con los newsletter.
 */
class NewsletterHelper
{
    /**
     * Regresa el Api Key del news letter.
     * @return string
     * @throws Exception si no se ha especificado una api key, arroja un error.
     */
    private static function ApiKey()
    {
        if(NewsletterSettings::ApiKey == ""){
            throw new Exception("No has especificado una api key.");
        }
        return NewsletterSettings::ApiKey;
    }

    /**
     * Regresa el Access Token del news letter.
     * @return string
     * @throws Exception si no se ha especificado una api key, arroja un error.
     */
    private static function AccessToken()
    {
        if(NewsletterSettings::AccessToken == ""){
            throw new Exception("No has especificado un token de acceso.");
        }

        return NewsletterSettings::AccessToken;
    }

    /**
     * Regresa el número de lsita del news letter.
     * @return string
     * @throws Exception si no se ha especificado una api key, arroja un error.
     */
    private static function ListNumber()
    {
        if(NewsletterSettings::ListNumber == ""){
            throw new Exception("No has especificado un número de lsita.");
        }

        return NewsletterSettings::ListNumber;
    }

    public static function GetLists()
    {
        $cc = new ConstantContact(NewsletterHelper::ApiKey());
        return $cc->getLists(NewsletterHelper::AccessToken());
    }


    public static function GetContacts()
    {
        $cc = new ConstantContact(NewsletterHelper::ApiKey());
        return $contacts = $cc->getContacts(NewsletterHelper::AccessToken());
    }

    /**
     * Añade un mail al newsletter
     *
     * @param bool|string $mail mail que será añadido al newsletter.
     * @return string mensaje de error o de éxito.
     * @throws Exception si el algún setting del Newsletter no ha sido configurado.
     */
    public static function Add($mail = false)
    {
        global $mensaje;
        $mail   = (string)$mail;

        if( !$mail || !is_email( $mail ) ){
            $mensaje->add_error('No se ha recibido un mail válido');
        }else{
            try {
                $cc = new ConstantContact(NewsletterHelper::ApiKey());
                $list = NewsletterHelper::ListNumber();
                $response = $cc->getContactByEmail(NewsletterHelper::AccessToken(), $mail);

                if (empty($response->results)) {
                    $contact = new Contact();
                    $contact->addEmail($mail);
                    $contact->addList($list);
                    $returnContact = $cc->addContact(NewsletterHelper::AccessToken(), $contact, true);
                } else {
                    $contact = $response->results[0];
                    $contact->addList($list);
                    $returnContact = $cc->updateContact(NewsletterHelper::AccessToken(), $contact, true);
                };
                $mensaje->add_mensaje( 'Tu correo se ha añadido correctamente a la lista' );
            } catch (Exception $ex) {

                if($ex instanceof CtctException) {
                    $errores = reset( $ex->getErrors() );
                    $mensaje->add_error( $errores['error_message'] );
                } else {
                    $mensaje->add_error($ex->getMessage());
                }
            }
        };
    }
}

// Descomenta ésta línea de código para imprimir en consola todas las listas y obtener
// el valor que va en NewsletterSettings::ListNumber.
//gafa(NewsletterHelper::GetLists(), "constant contact list"); // Debug Line

/*
// INTEGRACIÓN AJAX: Tan sencillo como añadir estas lineas a ajax.php
if( !function_exists('add_newsletter') )
{
    function add_newsletter( $mail = false ){
        return NewsletterHelper::Add($mail);
    }
}
*/