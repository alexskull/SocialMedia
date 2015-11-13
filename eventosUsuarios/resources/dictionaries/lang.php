<?php
/* Aquí va la lógica para que incluya la página en un lenguaje u otro, ahorita va a cargar por defecto el español*/

$lang = $lang == "" ? "es" : "en";
require("./resources/dictionaries/text.php");
require("./resources/dictionaries/$lang/label.php");
require("./resources/dictionaries/$lang/message.php"); 

