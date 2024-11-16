<?php
class Database{
    private $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/config.php';
                try {
            $this->pdo = new \PDO(
                "mysql:host={$config['host']};dbname={$config['db_name']}",
                $config['username'],
                $config['password']
            );            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}