<?php

class QueryBuilder
{
    /**
     * @var PDO
     */
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $className)
    {
        $stmt = $this->pdo->query("SELECT * FROM $table");

        return $stmt->fetchAll(PDO::FETCH_CLASS, $className);
    }

    public function delete($table, $id)
    {
        $c = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
        $c->bindValue('id', $id);

        $c->execute();
    }
}