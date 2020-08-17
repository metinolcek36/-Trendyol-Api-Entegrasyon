<?php

       include("vendor/autoload.php");
       use IS\PazarYeri\Trendyol\TrendyolClient;
       use IS\PazarYeri\Trendyol\Helper\TrendyolException;

       $trendyol = new TrendyolClient(); 
       $trendyol->setSupplierId(2738);
       $trendyol->setUsername("YANwxpWmogkVDt61cp4O");
       $trendyol->setPassword("o5FPnaN0KrkdRj7dyAkk");
       
       
       
       //$getBrands=$trendyol->brand->getBrands(100,3);
       // $milla=$trendyol->brand->getBrandByName("Milla");
       // $cargoSirketleri=$trendyol->cargo->getProviders();
       // $supplierAdres=$trendyol->cargo->getSuppliersAddresses();
       //$categoryFull=$trendyol->category->getCategoryTree();
      
?>