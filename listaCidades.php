<?php
    include "conectaBanco.php";

    if (isset($_GET['codigoEstado'])){
        $codigoEstado = $_GET['codigoEstado'];

        $sqlCidades = "SELECT codigoCidade, nomeCidade FROM cidades
                        WHERE codigoEstado=:codigoEstado";

        $sqlCidadesST = $conexao->prepare($sqlCidades);

        $sqlCidadesST->bindValue(':codigoEstado', $codigoEstado);

        $sqlCidadesST->execute();

        $resultadoCidades = $sqlCidadesST->fetchAll(); 

        echo "<option value=\"\">Escolha sua cidade</option>\n";
        foreach ($resultadoCidades as list($codigoCidade, $nomeCidade)) {
            echo"<option value=\"$codigoCidade\">$nomeCidade</option>\n";
        }
    }


?>