<?php

class QueryBuilder
{
    private $pdo;

    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
    }

    public function selectAll($stable, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$stable}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}
