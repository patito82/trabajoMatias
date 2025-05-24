<?php 

final readonly class ProductRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "products_get",
        "url" => "/products",
        "controller" => "Product/ProductGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ]
    ];
  }
}
