<?php
namespace CTC\App\Model;

use CTC\App\Dao\Dao;

class PaginatedModel {

    private $query;
    private $queryCount;
    private $classMapping;
    private $pdo;
    private $perPage;

    public function __construct(string $query, string $queryCount, string $classMapping, ?\PDO $pdo = null, int $perPage = 5){
        $this->query = $query;
        $this->queryCount = $queryCount;
        $this->classMapping = $classMapping;
        $this->pdo = $pdo ?: Connection::getPDO();
        $this->perPage = $perPage;
    }

    public function getItems(): array {
        $currentPage = URL::getPositiveInteger('page', 1);
        $count = (int)$this->pdo
            ->query($this->queryCount)
            ->fetch(PDO::FETCH_NUM);
    }


}