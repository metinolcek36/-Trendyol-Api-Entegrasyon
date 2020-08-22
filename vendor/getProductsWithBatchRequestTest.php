<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

   $batchReq = "32eaf545-5256-4d8e-b948-30f76c46d822-1598026100";
   $getProductsWithBatchRequest = $trendyol->getProductsWithBatchRequest($batchReq);

   echo($getProductsWithBatchRequest);
