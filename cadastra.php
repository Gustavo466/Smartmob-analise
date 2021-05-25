<?php
    session_start(  );
    $login = $_POST[ "email" ];
    $senha = $_POST[ "senha" ];
    $telefone = $_POST[ "telefone" ];
    $tipo = $_POST[ "tipo" ];

    $conn = new mysqli( "localhost", "id16829963_root", "Slade46615@!", "id16829963_imobiliaria");

    if( $conn->connect_error ){
        die( "Falha ao conectar ao banco de dados: " . $conn->connect_error );
    }
    $sql = "SELECT email FROM usuarios WHERE email = '$login'";
    
    $result = $conn->query( $sql );
    if( $result->num_rows > 0 ){
        exit( header( 'Location: entrar.html' ) );
    }
    else{
        $sql = "INSERT INTO usuarios VALUES ( '$login', '$senha', '$telefone', '$tipo' )";
        if( $conn->query( $sql ) === TRUE ){
            $_SESSION[ "login" ] = $login;
            $_SESSION[ "tipo" ] = $tipo;
            exit( header( 'Location: painel.php' ) );
        }
        else{
            exit( header( 'Location: entrar.html' ) );
        }
    }
    
    $conn->close(  );
?>