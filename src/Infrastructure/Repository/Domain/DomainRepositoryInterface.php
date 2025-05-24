<?php 

declare(strict_types = 1);

namespace src\Insfrastructure\Repository\Domain;

interface DomainRepositoryInterface {
    public function find(int $id): array;
}