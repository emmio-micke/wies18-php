<?php

$myfile = fopen('content.txt', 'r') or die ('Kunde inte öppna filen');

echo fread($myfile, filesize('content.txt'));

fclose($myfile);
