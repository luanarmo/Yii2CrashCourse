<?php

//require_once('vendor/autoload.php');
\Dotenv\Dotenv::createImmutable(__DIR__.'/../')->load();

$host = $_ENV['host'];
$db_name = $_ENV['db_name'];
$username = $_ENV['username'];
$password = $_ENV['password'];

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=$host;dbname=$db_name",
    'username' => "$username",
    'password' => "$password",
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
