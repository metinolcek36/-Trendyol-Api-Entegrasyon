<?php
include "vendor/autoload.php";
include "Api.php";

use IS\PazarYeri\Trendyol\TrendyolClient;
use IS\PazarYeri\Trendyol\Helper\TrendyolException;

$trendyol = new TrendyolClient(); 
$trendyol->setSupplierId(2738);
$trendyol->setUsername("YANwxpWmogkVDt61cp4O");
$trendyol->setPassword("o5FPnaN0KrkdRj7dyAkk");

$itemCreate= array('items'=> array(array(
    'attributes'=>array(array('attributeName'=>"string",'attributeValue'=>"string")),
    'barcode'=>"{BARCODE}",
    'brand'=>'apple',
    'cargoCompany'=>'YK',
    'categoryName'=> "Apple İphone Cep Telefonlar",
    'currencyType'=>"TRY",
    'description'=>"Apple iPhone X 64 GB Cep Telefonu",
    'dimensionalWeight'=> 0,
    'gender'=> "M",
    'images'=>array(array('url'=>"https://img-trendyol.mncdn.com/mnresize/1200/1800//Assets/ProductImages/oa/54/1886736/2/0190198457226_1_org_zoom.jpg")),
    'listPrice'=>5899.00,
    'productMainId'=>"IphoneX",
    'quantity'=>9,
    'salePrice'=>5649.00,
    'stockCode'=>"IphoneX",
    'title'=>"Apple iPhone X 64 GB Cep Telefonu",
    'variantAttributes'=>array(array('attributeName'=>"Red",'attributeValue'=>"gümüş")),
    'vatRate'=>18
    )),
    'notificationEmails'=>array("info@example.com"),
    'sourceType'=>"API",
     'supplierId'=>'supplierid'
    );
    $item2= array('items'=> array(array(
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
        ),
        array(
            'barcode'=>"barkod-12345",
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
            'attributeId'=>338,'attributeValueId'=>6981),array(
            'attributeId'=>343,'attributeValueId'=>4294),array(
            'attributeId'=>346,'attributeValueId'=>4290)),
        
            ) ),
        );  
        
$a=json_encode($item2);
var_dump($a);
$updateProduct=$trendyol->updateProduct($item2,"create");
print_r($updateProduct);

?>