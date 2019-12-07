<?php
/**
 * 403.php
 * 
 * 403 ErrorDocument.
 * Gibt die Fehlermeldung, sowie den angeforderten Pfad zurück.
 */

$wrapperbg = 1;

http_response_code(403);
$content.= "<h1>403 - Forbidden</h1>".PHP_EOL;
$content.= "<p>Du hast keine Berechtigung auf die von dir angeforderte Ressource <span class='italic'>".htmlentities($_SERVER['REQUEST_URI'], ENT_QUOTES)."</span> zuzugreifen.</p>".PHP_EOL;
?>
