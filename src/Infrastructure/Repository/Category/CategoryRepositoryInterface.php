<?php

namespace src\Infrastructure\Repository\Category;
use src\Entity\Category\Category;

interface CategoryRepositoryInterface {

    public function find(int $id): ? Category;

    public function findersProducts():?array;


}