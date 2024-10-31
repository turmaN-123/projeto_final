<?php
try {
    $options = array(

    PDO::ATTR_PERSISTENT => true,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8;',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
    $conexao = new 
    PDO("mysql:host=localhost;dbname=projeto_final_dezembro",
    "root","", $options);
    echo "Conexão realizada com sucesso";

} catch (PDOException $exc) {
    echo "Erro ao conectar ao banco ".$exc->getMessage();
}
?>