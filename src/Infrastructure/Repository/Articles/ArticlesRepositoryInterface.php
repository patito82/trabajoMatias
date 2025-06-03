<?php

namespace src\Infrastructure\Repository\Articles;
use src\Entity\Articles\Articles;

interface ArticlesRepositoryInterface {
    public function ArticlesFind($id);

    public function ArticlesGets():array;

    public function ArticlesUpdate(int $id, Articles $art);

    public function articlesPost(Articles $art);

    public function ArticlesDelete(int $id);

}