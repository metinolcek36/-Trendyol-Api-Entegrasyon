<?php 
   include('../vendor/autoload.php');
   include('../trendyol_entegrasyon/Api.php');


   $trendyol = new Trendyol();



    $data = '{
      "items": [
        {
          "barcode": "barkod-1111",
          "title": "Bebek Takımı Pamuk",
          "productMainId": "1234BT",
          "brandId": 1791,
          "categoryId": 411,
          "quantity": 100,
          "stockCode": "STK-345",
          "dimensionalWeight": 2,
          "description": "Ürün açıklama bilgisi",
          "currencyType": "TRY",
          "listPrice": 250.99,
          "salePrice": 120.99,
          "vatRate": 18,
          "cargoCompanyId": 10,
          "images": [
            {
              "url": "https://www.sampleadress/path/folder/image_1.jpg"
            }
          ],
          "attributes": [
            {
              "attributeId": 338,
              "attributeValueId": 6980
            },
            {
               "attributeId": 47,
               "customAttributeValue": "PUDRA"
             },
            {
              "attributeId": 346,
              "attributeValueId": 4290
            }
          ]
        }
      ]
    }';
    

    $json = json_decode($data, true);

    $elementcount = count($json);
    echo $elementcount . "<br/>";
    $i = 0;
    foreach($json as $elem)  {
     
      while($i<$elementcount){
        echo($elem[$i]['barcode'] . "<br/>" );
        echo ($trendyol->updateProduct($elem[0], 'create'));
        $i+=1;
      }
     
    }
   
