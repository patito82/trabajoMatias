<?php

use Src\Utils\ControllerUtils;
use src\Service\Products\ProductsUpdateService;
final readonly class ProductsUpdateController{

    private ProductsUpdateService $service;

    public function __construct(){
        $this->service = new ProductsUpdateService();
    }

    public function start(){
        $id = ControllerUtils::getPost("id");
        $name = ControllerUtils::getPost("name");
        $price = ControllerUtils::getPost("price");
        $id_factory = ControllerUtils::getPost("id_factory");

        $this->service->productsUpdate($id, $name, $price, $id_factory);


    }
}