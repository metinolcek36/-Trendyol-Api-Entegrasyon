<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();
   $getBrands=$trendyol->getProducts();

   echo($getBrands);