<?php

function file_get_contents_utf8($fn) { 
     $content = file_get_contents($fn); 
      return mb_convert_encoding($content, 'UTF-8', 
          mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true)); 
} 

$normalstring = '[{ "id" : 0, "firstname": "Roger", "lastname": "Lindholm", "socialnumber": 123456, "boats" : [ { "båttyp": "Motorbåt", "längd": 100 }, { "båttyp": "segelbåt", "längd": 500 }], "username": "Roger", "password": "e10adc3949ba59abbe56e057f20f883e" }]';

$decoded = json_decode($normalstring, true); // funkar

$fr = fopen('members.json', 'r');
$data1 = fread($fr, filesize('members.json'));

$decoded2 = json_decode($data1, true); // funkar inte

$file = file_get_contents_utf8('members.json');

$decoded3 = json_decode($file, true); // funkar inte

