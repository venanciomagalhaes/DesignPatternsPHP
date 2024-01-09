<?php

namespace Venancio\DesignPatterns\Criacionais\Singleton;

class PdoConnection extends \PDO
{
    private static ?self $instance =  null;

    private function __construct(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }

    public static function getInstance()
    {
        self::makeInstance();
        return self::$instance;
    }

    private static function makeInstance(): void
    {
        if (!self::$instance) {
            self::$instance = new PdoConnection(
                dsn: self::getDatabaseType() . ":host=" . self::getDatabaseHost() . ";dbname=" . self::getDatabaseName(),
                username: self::getDatabaseUser(),
                password: self::getDatabasePassword(),
                options: [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
                ]
            );
        }
    }

    private static function getDatabaseType():string
    {
        return $_ENV['DB_TYPE'];
    }

    private static function getDatabaseHost():string
    {
        return $_ENV['DB_HOST'];
    }

    private static function getDatabaseUser():string
    {
        return  $_ENV['DB_USER'];
    }

    private static function getDatabasePassword():string
    {
        return $_ENV['DB_PASS'];
    }

    private static function getDatabaseName():string
    {
        return  $_ENV['DB_NAME'];
    }

}
