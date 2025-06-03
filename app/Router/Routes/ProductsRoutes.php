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
                [
                "name" => "products_post",
                "url" => "/products",
                "controller" => "Products/ProductsPostController.php",
                "method" => "POST",
                ],
                [
                "name" => "products_update",
                "url" => "/products",
                "controller" => "Products/ProductsUpdateController.php",
                "method" => "PUT",
                ],
                [
                "name" => "products_delete",
                "url" => "/products",
                "controller" => "Products/ProductsDeleteController.php",
                "method" => "DELETE",
                ],
            ];
    }
}