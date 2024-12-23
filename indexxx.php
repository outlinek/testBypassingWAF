<?php

error_log("Dettagli della richiesta:");

error_log("Headers ricevuti: " . json_encode(getallheaders()));

error_log("Cookie ricevuti: " . json_encode($_COOKIE));

error_log("Parametri GET ricevuti: " . json_encode($_GET));

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
