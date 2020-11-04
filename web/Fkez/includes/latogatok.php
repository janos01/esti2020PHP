<?php


function lekerLatogatok() {
  $fp = fopen('latogatok.txt', 'r');
  $lat = fgets($fp);
  $lat += 1;
  fclose($fp);

  $fp = fopen('latogatok.txt', 'w');
  fputs($fp, $lat);
  fclose($fp);
  return $lat;
}
