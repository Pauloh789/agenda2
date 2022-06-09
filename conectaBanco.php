<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DBNAME', 'agenda');
define('PORT', '3386');

$conexao= new pdo('mysql: host='.HOST.'; port='.PORT.';
                       dbname='.DBNAME, USER, PASS);

/*
try {
    $conexao= new pdo('mysql: host='.HOST.'; port='.PORT.';
                       dbname='.DBNAME, USER, PASS);
        echo "Conexão realizada com sucesso!";                
    } catch (PDOException $exception) {
        echo "Erro ao conectar no banco de dados: " . $exception->getMessage();
    }*/

 
?>