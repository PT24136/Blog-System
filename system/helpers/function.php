<?php
  include('helpers/connection.php');
  function encode($string){
    return base64_encode($string);
  }
  function decode($string){
    return base64_decode($string);
  }
?>