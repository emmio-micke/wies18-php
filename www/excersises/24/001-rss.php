<pre>
<?php

//$xml = simplexml_load_string($xml_string);
$xml = simplexml_load_file('http://wp:8888/feed/');
print_r($xml);

// $json = json_encode($xml);
// $array = json_decode($json,TRUE);

// print_r($json);
