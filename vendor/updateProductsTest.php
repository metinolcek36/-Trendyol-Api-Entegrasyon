<?php 
   include("../vendor/autoload.php");
   include("../trendyol_entegrasyon/Api.php");


   $trendyol = new Trendyol();


   $json_object = array('item'=> array(array(
    'barcode'=>"barkod-1234",
    'title'=>"Bebek Takımı Pamuk",
    'productMainId'=>"1234BT",
    'brandId'=> 1791,
    'categoryId'=> 411,
    'quantity'=> 100,
    'stockCode'=>"STK-345",
    'dimensionalWeight'=> 2,
  "description"=>"Ürün açıklama bilgisi",
  "currencyType"=> "TRY",
  "listPrice"=> 250.99,
  "salePrice"=>120.99,
  "vatRate"=> 18,
  "cargoCompanyId"=>10,
  "shipmentAddressId"=>0,
  "returningAddressId"=> 0,
  "deliveryDuration"=> 10,
    'images'=>array(array('url'=>"https://www.sampleadress/path/folder/image_1.jpg")),
    'attributes'=>array(array(
    'attributeId'=>338,'attributeValueId'=>6980),array(
    'attributeId'=>343,'attributeValueId'=>4294),array(
    'attributeId'=>346,'attributeValueId'=>4290)),
    
    
    'productMainId'=>"IphoneX",
    'quantity'=>9,
    'salePrice'=>5649.00,
    'stockCode'=>"IphoneX",
    'title'=>"Apple iPhone X 64 GB Cep Telefonu",
    'variantAttributes'=>array(array('attributeName'=>"Red",'attributeValue'=>"gümüş")),
    'vatRate'=>18
    ) ),
    );  
    
   
    //$json_str = json_encode($json_object, JSON_PRETTY_PRINT);
    //echo $json_str;

    //$oJson = json_decode($json_str) ;

    $data = array('item'=> array(array(
        'barcode'=>"barkod-1234",
        'title'=>"Bebek Takımı Pamuk",
        'productMainId'=>"1234BT",
        'brandId'=> 1791,
        'categoryId'=> 411,
        'quantity'=> 100,
        'stockCode'=>"STK-345",
        'dimensionalWeight'=> 2,
      "description"=>"Ürün açıklama bilgisi",
      "currencyType"=> "TRY",
      "listPrice"=> 250.99,
      "salePrice"=>120.99,
      "vatRate"=> 18,
      "cargoCompanyId"=>10,
      "shipmentAddressId"=>0,
      "returningAddressId"=> 0,
      "deliveryDuration"=> 10,
        'images'=>array(array('url'=>"https://www.sampleadress/path/folder/image_1.jpg")),
        'attributes'=>array(array(
        'attributeId'=>338,'attributeValueId'=>6980),array(
        'attributeId'=>343,'attributeValueId'=>4294),array(
        'attributeId'=>346,'attributeValueId'=>4290)),
        
        
        'productMainId'=>"IphoneX",
        'quantity'=>9,
        'salePrice'=>5649.00,
        'stockCode'=>"IphoneX",
        'title'=>"Apple iPhone X 64 GB Cep Telefonu",
        'variantAttributes'=>array(array('attributeName'=>"Red",'attributeValue'=>"gümüş")),
        'vatRate'=>18
        ) ),
        );  
       
        //echo json_encode($data, JSON_PRETTY_PRINT);
        echo $trendyol->updateProduct($data, "create");

       