<?php
/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 30/09/18
 * Time: 19:20
 */

class Database
{
// Conexão BD Postgres com PDO
// $conexao = new PDO("pgsql:host=localhost;port=;dbname=loja;user=root;password=");
    const HOST = "localhost";
    const DATABASE = "loja_poo2";
    const USER = "postgres";
    const PASSWORD = "";    

    public static $conexao;

    public static function getConexao(){
        $dsn = 'pgsql:host='.self::HOST.';dbname='.self::DATABASE;
        try{
            self::$conexao = new PDO($dsn, self::USER, self::PASSWORD);
            self::$conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            return self::$conexao;
        }catch (PDOException $e){
            throw new PDOException($e);
        }
    }
}