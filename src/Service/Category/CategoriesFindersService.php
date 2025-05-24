<?php

namespace src\Service\Category;

use src\Infrastructure\Repository\Category\CategoryRepository;

final readonly class CategoriesFindersService{

    public function __construct(
        private CategoryRepository $repository = new CategoryRepository()
    ){}

    public function findersProducts():?array{
       return $this->repository->findersProducts();
    }

}
