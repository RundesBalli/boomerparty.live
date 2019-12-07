<?php
/**
 * 404.php
 * 
 * 404 ErrorDocument.
 * Gibt die Fehlermeldung, sowie den angeforderten Pfad zurück.
 */
http_response_code(404);
$content.= "<h1>404 - Not Found</h1>".PHP_EOL;
$content.= "<p>Die von dir angeforderte Ressource <span class='italic'>".htmlentities($_SERVER['REQUEST_URI'], ENT_QUOTES)."</span> existiert nicht.</p>".PHP_EOL;
?>
