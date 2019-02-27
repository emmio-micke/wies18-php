<?php

$myfile = fopen('http://www.medphp:8888/excersises/07/content.txt', 'r') or die ('Kunde inte öppna filen');

echo fread($myfile, 100);

fclose($myfile);

