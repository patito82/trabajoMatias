<?php 

declare(strict_types = 1);

namespace src\Insfrastructure\Repository\Domain;
use src\Infrastructure\PDO\PDOManager;

final readonly class DomainRepository extends PDOManager implements DomainRepositoryInterface{

    public function find(int $id): array
    {
        //$this->execute();
        return [
            "id" => $id,
            "name" => "Test name"
        ];
    }

}