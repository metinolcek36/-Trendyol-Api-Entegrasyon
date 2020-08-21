<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

    $getShipmentProviders = $trendyol->getShipmentProviders();

   echo($getShipmentProviders);