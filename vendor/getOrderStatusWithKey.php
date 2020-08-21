<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

   $key = "ReadyToShip";
   $getOrderStatusWithKey = $trendyol->getOrderStatusWithKey($key);

   echo ($getOrderStatusWithKey);