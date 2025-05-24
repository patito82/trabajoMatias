<?php 

final readonly class ArticleGetController{


    public function start(int $id): void{
        echo json_encode(
            [
                "id" => $id
            ]
            );
    }
}