<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        // Write your code here

        $defaultLang = 'en'; // Idioma preferente
        $requestedLang = $_GET['lang'] ?? null; // Para leer idioma actual en la url
        $outputMessage = ""; //Mensaje de salida a escribir dependiendo del resultado
        $langIsNew = false;  //Devuleve un booleano si el lenguaje está en la url

        if ($requestedLang !== null) {
            //Si coincide lenguaje con el marcado en la url
            $langIsNew = true;
            //Para comprobar si el lenguaje está permitido
            if (in_array($requestedLang, $this->allowedLanguages, true)) {
                //Si es válido
                $langToSet = $requestedLang;
                $outputMessage = "Language set to " . $langToSet . "\n";
            } else {
                //Si el idioma no está permitido
                $langToSet = $defaultLang;
                $outputMessage = "Language set to " . $langToSet . ", because " . $requestedLang . " is not an allowed language.\n";
            }
            //Guardamos en la sesión:
                //Si el idioma no és valido se aplica el idioma preferente
                //Si és válido se aplica el seleccionado
            $_SESSION['lang'] = $langToSet;
        
        } else {
            // Si se vuelve a visitar el sitio, volvemos a aplicarlo
            //Si está el idioma guardado en la sesión no hacemos nada
            if (isset($_SESSION['lang'])) {            
            //Sino tenemos guardado el idioma en la sesión, usamos el idioma preferente
            } else {
                $_SESSION['lang'] = $defaultLang;
            }
        }

        //Imprimimos mensaje si se ha vuelto a visitar el sitio
        if ($langIsNew) {
            echo $outputMessage;
        }

    }
}
