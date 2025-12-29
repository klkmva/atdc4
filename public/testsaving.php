<?php

$fi = fopen('./images/events/01KDAHF0SDRH91H6B05VA6V66P.jpeg', 'r');
$content = fread($fi, filesize('./images/events/01KDAHF0SDRH91H6B05VA6V66P.jpeg'));
fclose($fi);
$fo = fopen('./images/events/copy.jpeg', 'w');
fwrite($fo, $content);
fclose($fo);
echo "File copied.";