<?php

namespace src\Entity\Products;

final class Products{

    public function __construct(
        private ?int $id,
        private string $name,
        private int $price,
        private int $id_factory,
    ){}


    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }

    public function getPrice():int{
        return $this->price;
    }

    public function getId_Factory():int{
        return $this->id_factory;
    }

    public static function Create(string $name, int $price, int $id_factory):Products{
        $product = new Products(null, $name, $price, $id_factory);

        return $product;
    }

    public function modify(string $name, int $price, int $id_factory){
        $this->name = $name;
        $this->price = $price;
        $this->id_factory = $id_factory;
    }
}