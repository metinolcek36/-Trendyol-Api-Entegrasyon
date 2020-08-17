<?php

$urunler= array('items'=> array('barcode'=>'123', 'brand'=>'apple',
'attributes'=>array( array('attributeName'=>"color",'attributeValue'=>"red"))));
echo json_encode($urunler);
