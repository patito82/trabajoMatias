<?php

namespace src\Entity\Category;

final readonly class Category{
    

    public function __construct(
        private int $id,
        private string $name,
        private string $code,
    ){
    }

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name;
    }

    public function getCode():string{
        return $this->code;
    }


}