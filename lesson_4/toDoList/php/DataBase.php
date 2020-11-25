<?php
function pre($var)
{
    echo "<br><pre>";
    print_r($var);
    echo "</pre>";
}

class DataBase
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    const DB_HOST = 'localhost';
    const DB_NAME = 'toDoList';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_CHARSET = 'utf8';
    const DSN = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset' . self::DB_CHARSET;
    const PDO_OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /**
     * DataBase constructor.
     */
    public function __construct()
    {
        return $this->pdo = new PDO(self::DSN, self::DB_USERNAME, self::DB_PASSWORD, self::PDO_OPTIONS);
    }
}

$db = new DataBase();
$sql = 'SELECT * FROM `tasks`';
pre($db->getPdo()->query($sql)->fetchAll());