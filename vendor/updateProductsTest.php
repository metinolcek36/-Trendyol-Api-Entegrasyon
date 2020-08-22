
<?php 
   include('../vendor/autoload.php');
   include('../trendyol_entegrasyon/Api.php');


   $trendyol = new Trendyol();

   

//NOT1=> Bu servis üzerinden ürünün sadece bilgileri güncellenmektedir. 
//Stok ve fiyat değerleri güncellenmeyecektir. 
//Ürünlerinize ait kategori bilgisini sisteme girdikten sonra değiştiremezsiniz.
//Ürünlere ait marka bilgisini ürünleriniz onaylanana kadar değiştirebilirsiniz. 
//Onaylandıktan sonra marka bilginizi değiştiremezsiniz.

//Yeni kategori ve kategori özellik değerleri eklenebileceği sebebiyle ürün güncellemelerinizden önce kullandığınız 
//kategori ve kategori özellik değerlerinin güncel olup olmadığını 
//getCategoryTree ve getCategoryAttributes servislerinden kontrol etmenizi öneririz.


$updatedData = '{
    "items": [
        {
            "barcode": "barkod-1111",
            "title": "Bebek Takımı Pamuk",
            "productMainId": "1234BT",
            "brandId": 1791,
            "categoryId": 411,
            "stockCode": "STK-123",
            "dimensionalWeight": 12,
            "description": "Ürün açıklama bilgisi",
            "vatRate": 0,
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
                    "attributeId": 343,
                    "attributeValueId": 4294
                },
                {
                    "attributeId": 47,
                    "customAttributeValue": "Attribute özelliği(text olarak girebilirsiniz.)"
                }
            ],
            "cargoCompanyId": 10,
            "shipmentAddressId": 0,
            "returningAddressId": 0
        }
    ]
}';

$json = json_decode($updatedData, true);

$elementcount = count($json);
echo $elementcount . "<br/>";
$i = 0;
foreach($json as $elem)  {
    while($i<$elementcount){
        echo($elem[$i]['barcode'] . "<br/>" );
        echo ($trendyol->updateProduct($elem[0], 'update'));
        $i+=1;
    }
     
}



