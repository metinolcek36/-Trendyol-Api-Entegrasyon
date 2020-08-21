<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

   $barcode = "barcode-1234";
    $getProductsWithBarcode = $trendyol->getProductsWithBarcode($barcode);

   echo($getProductsWithBarcode);