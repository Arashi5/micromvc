<?php


namespace app\components;


class DB
{
    private $connection;

    private static $instance;

    private function __construct($config)
    {
        $dsn = "{$config['driver']}:dbname={$config['db']};host={$config['host']}";

        if (!empty($config['charset'])) {
            $dsn .= ";charset={$config['charset']}";
        }

        $this->connection = new \PDO($dsn, $config['username'], $config['password']);

        if (!empty($config['errors'])) {
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
    }

    /**
     * @param string $connection
     * @return DB
     */
    public static function getInstance($connection = 'default') {
        if (is_null(self::$instance)) {
            $config = \app\config\DB::$connections[$connection];
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function prepare($sql, $param = []){
        $connection = $this->connection;
        $stmt = $connection->prepare($sql);
        $stmt->execute($param);
        return $stmt;
    }
}