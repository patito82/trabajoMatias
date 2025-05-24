<?php

use src\service\Product\ProductFinderService;
final class ProductGetController{

    private ProductFinderService $service;

    public function __construct()
    {
        $this->service = new ProductFinderService();
    }
    public function start(int $id)
    {
        $this->service->find($id);
    }
}