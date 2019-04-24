<?php
$myfile = fopen('newfile.txt', 'w') or die ('Kunde inte öppna file');
$txt = 'Hello world' . PHP_EOL;

fwrite($myfile, $txt);

$txt = 'Nice to see you!' . PHP_EOL;

fwrite($myfile, $txt);

fclose($myfile);

