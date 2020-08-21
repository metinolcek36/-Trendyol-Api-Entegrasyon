
<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();


   $data = "{
    'items': [
      {
        'barcode': '7654218',
        'quantity': 1,
        'salePrice': 2343.85,
        'listPrice': 234234.85
      }
    ]
  }";

    $data = json_decode($data,JSON_PRETTY_PRINT);  

   $updateProductPriceAndInventory = $trendyol->updateProductPriceAndInventory($data);
  // echo($updateProductPriceAndInventory);
    $batchID = $updateProductPriceAndInventory;

    
    
    $batchID = json_decode($batchID,true);  
    $newBatchID = $batchID['batchRequestId'];   
    /*$data = json_encode($data);
    echo $data;

    
*/

   $getProductsWithBatchRequest = $trendyol->getProductsWithBatchRequest($newBatchID);
   echo($getProductsWithBatchRequest);


