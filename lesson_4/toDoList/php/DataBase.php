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
     * @var string
     */
    private $statement;
    /**
     * @var array
     */
    private $param;

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
        $this->pdo = new PDO(self::DSN, self::DB_USERNAME, self::DB_PASSWORD, self::PDO_OPTIONS);
    }

    /**
     * @param string $sql
     * @param array $param
     * @return mixed
     *
     */
    private function init(string $sql, array $param)
    {
        $this->statement = $this->pdo->prepare($sql);
    }

    private function bind(array $param):void
    {
        foreach ($param as $value) {
            $this->pdo->
        }
    }
}

$db = new DataBase();
pre($db);
$newTask[] = "Some task";
$execute = 'INSERT INTO `tasks` (`task`) VALUES (:newTask)';
$db->execute($execute, $newTask);

$sql = 'SELECT * FROM `tasks`';
$result = $db->query($sql);
pre($result);





