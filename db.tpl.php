<?php

$dbhost = 'localhost';
$dbname = 'dbname';
$dbuser = 'dbuser';
$dbpass = 'dbpass';
$dbport = "dbport";
$dbcharset = 'utf8mb4';

$dboptions = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$dbcharset;port=$dbport";
try {
     $pdo = new \PDO($dsn, $dbuser, $dbpass, $dboptions);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
