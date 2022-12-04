<?php 

namespace Airist\PhpMvc\Controller;

class ProductController 
{
    function categories(string $productId, string $categoryId):void
    {
        echo "Product ID : $productId, Category ID : $categoryId" ;
    } 
}

?>