<?php

use Src\Utils\ControllerUtils;
use src\Service\Products\ProductsPostService;

final readonly class ProductsPostController{

    private ProductsPostService $service;

    public function __construct(){
        $this->service = new ProductsPostService();
    }


    public function start(){

        $name = ControllerUtils::getPost("name");
        $price = ControllerUtils::getPost("price");
        $id_factory = ControllerUtils::getPost("id_factory");

        $this->service-> ProductsPost($name, $price, $id_factory);
    }
}