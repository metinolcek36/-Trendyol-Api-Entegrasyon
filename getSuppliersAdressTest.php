<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

    $getSuppliersAdress = $trendyol->getSuppliersAdress();

   echo($getSuppliersAdress);