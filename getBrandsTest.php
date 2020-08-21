<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();
   $getBrands=$trendyol->getBrands(100, 0);

   echo($getBrands);