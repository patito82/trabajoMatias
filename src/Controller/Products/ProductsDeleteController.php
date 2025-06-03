<?php

use Src\Utils\ControllerUtils;
use src\Service\Products\ProductsDeleteService;
final readonly class ProductsDeleteController{

    private ProductsDeleteService $service;

    public function __construct(){
        $this->service = new ProductsDeleteService();
    }

    public function start(){

        $id = ControllerUtils::getPost("id");

        $this->service->productsDelete($id);

    }
}
