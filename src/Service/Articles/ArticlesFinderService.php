<?php


namespace src\Service\Articles;
use src\Infrastructure\Repository\Articles\ArticlesRepository;
use src\Entity\Articles\Articles;
final readonly class ArticlesFinderService{

    private ArticlesRepository $repository;

    public function __construct(){
        $this->repository = new ArticlesRepository();
    }


    public function ArticlesFind(int $id):?Articles{
        return $this->repository->ArticlesFind($id);
    }
}