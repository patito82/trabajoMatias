<?php
final readonly class ProductsRoutes{

    public static function getRoutes():array{
        return[
                [
                "name" => "products_get",
                "url" => "/products",
                "controller" => "Products/ProductsGetController.php",
                "method" => "GET",
                "parameters" => [
                    [
                    "name" => "id",
                    "type" => "int"
                    ]
                ],
                ],
                [
                "name" => "products_gets",
                "url" => "/products",
                "controller" => "Products/ProductsGetsController.php",
                "method" => "GET",
                ],
            ];
    }
}