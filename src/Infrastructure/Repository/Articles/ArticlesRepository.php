<?php

namespace src\Infrastructure\Repository\Articles;

use src\Infrastructure\Repository\Articles\ArticlesRepositoryInterface;
use src\Infrastructure\PDO\PDOManager;
use src\Entity\Articles\Articles;


final readonly class ArticlesRepository extends PDOManager implements ArticlesRepositoryInterface{

    public function ArticlesFind($id):?Articles{
        $query = "select * from Articles where id = :id";

        $parameters = [
        
            "id" => $id
        ];

        $consulta = $this->execute($query, $parameters);

        $toArticle = Articles::primitiveToArticles(null ?? $consulta[0]);

        return $toArticle;

    }

    public function ArticlesGets(): array{
        $query = "select * from Articles";

        $consulta = $this->execute($query);
        $array = [];
        foreach($consulta as $list){
            $array[] = Articles::primitiveToArticles(null ?? $list);
           
        }
        return $array;
    }

    public function articlesPost(Articles $art){
        $query ="       insert into Articles (category_id,title,description,image)
                        values(:category_id,:title,:description,:image)";

        $parameters = [
            'category_id' => $art->getCategory_id(),
            'title' => $art->getTitle(),
            'description' => $art->getDescription(),
            'image' => $art -> getImage(),                
        ];
          
        $this->execute($query, $parameters);

    }

    public function ArticlesUpdate(int $id, Articles $art){
        $query = "update Articles
                set category_id = :category_id, description = :description, title = :title, image = :image
                where id = :id";

        $parameters = [
            'id' => $id,
            'category_id' => $art->getCategory_id(),
            'description' => $art->getDescription(),
            'title' => $art->getTitle(),
            'image' => $art->getImage(),
        ];

        $this->execute($query,$parameters);

    }

    public function ArticlesDelete(int $id){
        $query = "delete from Articles where id = :id";

        $parameters = ['id' => $id];

        $this->execute($query, $parameters);
        
    }
}