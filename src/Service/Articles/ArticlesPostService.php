<?php

namespace src\Service\Articles;

use src\Infrastructure\Repository\Articles\ArticlesRepository;
use src\Entity\Articles\Articles;

final readonly class ArticlesPostService{

    private ArticlesRepository $repository;

    public function __construct(){
        $this->repository = new ArticlesRepository();
    }

    public function articlesPost(int $category_id, string $description, string $title, string $image){

        $object = new Articles(null,$category_id, $title, $description, $image);

        $this->repository->articlesPost($object);
    }

}