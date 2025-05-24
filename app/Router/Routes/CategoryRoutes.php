<?php

final readonly class CategoryRoutes{

    public static function getRoutes():array{
        return [
            [
            "name" => "category_get",
            "url" => "/categories",
            "controller" => "Category/CategoryGetController.php",
            "method" => "GET",
            "parameters" => [
                [
                "name" => "id",
                "type" => "int"
                ]
            ]
            ],
            [
            "name" => "categories_get",
            "url" => "/categories",
            "controller" => "Category/CategoriesGetController.php",
            "method" => "GET",
            ],
        ];
    }

}