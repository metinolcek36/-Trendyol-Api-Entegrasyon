<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

    $getCategories = $trendyol->getCategories();

   echo($getCategories);