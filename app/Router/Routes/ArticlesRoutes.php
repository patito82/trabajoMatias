<?php


final readonly class ArticlesRoutes{

    public static function getRoutes():array{
        return[
            [
            "name" => "articles_get",
            "url" => "/articles",
            "controller" => "Articles/ArticlesGetController.php",
            "method" => "GET",
            "parameters" => [
                [
                    'name' => "id",
                    'type' => "int"
                ]
            ]
            ],
            [
            "name" => "articles_gets",
            "url" => "/articles",
            "controller" => "Articles/ArticlesGetsController.php",
            "method" => "GET"
            ],
            [
            "name" => "articles_post",
            "url" => "/articles",
            "controller" => "Articles/ArticlesPostController.php",
            "method" => "POST",
            
            ],
            [
                "name" => "articles_update",
                "url" => "/articles",
                "controller" => "Articles/ArticlesUpdateController.php",
                "method" => "PUT",
            ]
        ];
    }

}