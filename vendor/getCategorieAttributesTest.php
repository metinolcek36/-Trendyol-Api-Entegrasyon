<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();

   $categorieId = 1255;
    $getCategorieAttributes = $trendyol->getCategorieAttributes($categorieId);

   echo($getCategorieAttributes);