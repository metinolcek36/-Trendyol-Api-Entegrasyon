<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

   $approved = false;
   $getProductsApproved = $trendyol->getFilterProductsWithApproved($approved);

   echo($getProductsApproved);
