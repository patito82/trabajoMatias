<?php


namespace src\Entity\Articles;

final readonly class Articles{

        private ?int $id;
        private int $category_id;
        private string $title;
        private string $description;
        private string $image;

    public function __construct(
        ?int $id,
        int $category_id,
        string $title,
        string $description,
        string $image
    ){
        $this->id = $id;
        $this->category_id = $category_id;
        $this->title=$title;
        $this->description=$description;
        $this->image = $image;
    }

    public function getId():int{
        return $this->id;
    }

    public function getCategory_id():int{
        return $this->category_id;
    }

    public function getTitle():string{
        return $this->title;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function getImage():string {
        return $this->image;
    }


    public static function primitiveToArticles(?array $object):?Articles{
        return new Articles(
            $object['id'],
            $object["category_id"],
            $object["title"],
            $object["description"],
            $object["image"],
        );
    }
}