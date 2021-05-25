<?php
    session_start(  );
    $bairro = $_POST[ "bairro" ];
    $cidade = $_POST[ "cidade" ];
    $preco = $_POST[ "preco" ];

    $conn = new mysqli( "localhost", "id16829963_root", "Slade46615@!", "id16829963_imobiliaria");

    if( $conn->connect_error ){
        die( "Falha ao conectar ao banco de dados: " . $conn->connect_error );
    }

    $sql = "INSERT INTO imoveis VALUES ( DEFAULT, '$bairro', '$cidade', '$preco' )";
    if( $conn->query( $sql ) === TRUE ){
        exit( header( 'Location: catalogo.php' ) );
    }
    else{
        exit( header( 'Location: entrar.html' ) );
    }
    
    $conn->close(  );
?>