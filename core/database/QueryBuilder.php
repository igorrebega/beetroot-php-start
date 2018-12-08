<?php

namespace Core\Database;

use PDO;

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

    public function insert($table, $parameters)
    {
        $query = sprintf(
            'INSERT INTO %s (%s) VALUES(%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $s = $this->pdo->prepare($query);
            $s->execute($parameters);

            return true;
        } catch (\PDOException $exception) {
            return false;
        }
    }
}