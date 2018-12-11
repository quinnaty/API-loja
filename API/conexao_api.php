<?php
/**
Classe que contem os parametros para conexao e o método
 * que retorna a conexao
 */
class Conexao
{
    const HOST = 'localhost';
    const DATABASE = 'loja';
    const USER = 'root';
    const PASSWORD = '';
    public static $conexao;
    public static function getConexao(){
        $dsn = 'mysql://host='.self::HOST.';dbname='.self::DATABASE;
        try{
            self::$conexao = new PDO($dsn, self::USER, self::PASSWORD);
            self::$conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            return self::$conexao;
        }catch (PDOException $e){
            throw new PDOException($e);
        }
    }
}
