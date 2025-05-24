<?php

final readonly class ArticleRoutes {
    public static function getRoutes(): array {
      return [
        [
          "name" => "article_get",
          "url" => "/article",
          "controller" => "Article/ArticleGetController.php",
          "method" => "GET",
          "parameters" => [
            [
              "name" => "id",
              "type" => "int"
            ]
          ]
        ],
      ];
    }
  }