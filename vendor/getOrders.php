<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();


   $getOrders = $trendyol->getOrders();

   echo ($getOrders);