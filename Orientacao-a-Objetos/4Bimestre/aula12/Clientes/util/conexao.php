<?php

class Conexao
{
    private static $con =  null;

    public static function GetCon()
    {
        if (self::$con == null) {

            $opcoes = array(
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Define o tipo do retorno das consultas
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );
            $dadosCon = "mysql:host=localhost:3306;dbname=clientes"; //o 3306 é o padrão da porta para conectar, mas com esse ele conecta e aparece as mesmas databases
            self::$con = new PDO($dadosCon, "root", "bancodedados", $opcoes);
        }
        return self::$con;
    }
}