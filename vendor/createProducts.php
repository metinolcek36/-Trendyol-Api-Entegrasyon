<?php

$createProducts= array('items'=> array(array(
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
var_dump(json_encode($createProducts));
