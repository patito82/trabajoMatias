<?php

namespace src\Service\Category;

use src\Infrastructure\Repository\Category\CategoryRepository;
use src\Entity\Category\Category;

final readonly class CategoryFinderService{
    private CategoryRepository $repository;

    public function __construct(){
        $this->repository = new CategoryRepository();
    }

    public function find(int $id):? Category{

         return $this->repository->find($id);
    }

}