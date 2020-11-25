<?php
function pre($var)
{
    echo "<br><pre>";
    print_r($var);
    echo "</pre>";
}

class DB
{

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    const DB_HOST = 'localhost';
    const DB_NAME = 'task4';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_CHARSET = 'utf8';
    const DB_DSN = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME . ";charset=" . self::DB_CHARSET;
    const DB_OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    public function __construct()
    {
        return $this->pdo = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS, self::DB_OPTIONS);
    }

}

$db = new DB();
$sql = 'SELECT * FROM `category` cat';
pre($db->getPdo()->query($sql)->fetchAll());
