<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

   $brandName = "Milla";

   $getBrandsWithName=$trendyol->getBrandsWithName($brandName);

   echo($getBrandsWithName);