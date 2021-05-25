<?php
    session_start(  );
    $_login = $_POST[ "email" ];
    $_senha = $_POST[ "senha" ];
    $conn = new mysqli( "localhost", "id16829963_root", "Slade46615@!", "id16829963_imobiliaria");

    if( $conn->connect_error ){
        die( "Falha ao conectar ao banco de dados: " . $conn->connect_error );
    }
    
    $sql = "SELECT email, tipo FROM usuarios WHERE email = '$_login' and senha = '$_senha'";
    $result = $conn->query( $sql );

    if( $result->num_rows > 0 ){
        // output data of each row
        while( $obj = $result->fetch_object(  ) ){
            $_SESSION[ "login" ] = $obj->email;
            $_SESSION[ "tipo" ] = $obj->tipo;
        }
        exit( header( 'Location: painel.php' ) );
    }
    else{
        exit( header( 'Location: entrar.html' ) );
    }
    $conn->close(  );
?>