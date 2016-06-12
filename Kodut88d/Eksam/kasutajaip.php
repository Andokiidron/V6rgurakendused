<?php
  @ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
  @ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
  

  $string = '<code>'
    .$_SERVER['REMOTE_ADDR'].'</p><p>Hostname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .$details->country.'</p><p>Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
    .date("D dS M,Y h:i a").'</p></code>'
    ;

  echo '<!DOCTYPE html><html><head><title>Who Am I?</title></head><body>';
  echo $string;
  echo '</body></html>';
?>