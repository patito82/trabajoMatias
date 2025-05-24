<?php

use src\Service\Articles\ArticlesGetsService;
final readonly class ArticlesGetsController{

    private ArticlesGetsService $service;

    public function __construct(){
        $this->service = new ArticlesGetsService;
    }

    public function start(){
        $articles = $this->service->ArticlesGets();
        echo json_encode($this->toResponse($articles));
    }

    public static function toResponse(array $array):array{
        $response =[];
        foreach($array[0] as $list){
        $response[]=[ 
                "id" => $list->getId(),
                "category"=> $list->getCategory_id(),
                ];
        }
        return $response;
        }


    }
