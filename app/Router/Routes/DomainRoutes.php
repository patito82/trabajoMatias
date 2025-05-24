<?php 

final readonly class DomainRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "domain_get",
        "url" => "/domains",
        "controller" => "Domain/DomainGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "domain_get_list",
        "url" => "/domains",
        "controller" => "Domain/DomainsGetController.php",
        "method" => "GET"
      ],
      [
        "name" => "domain_post",
        "url" => "/domains",
        "controller" => "Domain/DomainPostController.php",
        "method" => "POST",
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
