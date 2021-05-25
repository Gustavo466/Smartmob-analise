<?php
    session_start(  );
    $login = $_SESSION[ 'login' ];
    $tipo = $_SESSION[ 'tipo' ];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>SmartMOB</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;600&family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="principal.css" />
        <script src="principal.js"></script>
        <script>
            sessionStorage.setItem( "login", '<?php echo $login; ?>' );
            sessionStorage.setItem( "tipo", '<?php echo $tipo; ?>' );
            window.onload = function(  ){
                if( sessionStorage.getItem( "tipo" ) != 'cliente' ){
                    var escolha = document.getElementById( 'cad-imo' );
                    escolha.style.display = 'none';
                }
            }
        </script>
    </head>
    <body>
        <header>
            <nav class="menu container">
                <a href="index.html" class="logo">
                    <h3>Smart<span>MOB</span></h3>
                </a>
                <ul class="links">
                    <li><a href="#catalogo">Catálogo</a></li>
                    <li><a href="#sobre-nos">Sobre nós</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
                <ul class="logar">
                    <li><a onclick="tipo( 'cad' )">Cadastrar</a></li>
                    <li><a onclick="tipo( 'log' )">Logar</a></li>
                </ul>
            </nav>
        </header>
        <section class="banner">
            <h1>Encontre o lugar <br> perfeito para morar,<br> aqui mesmo na SmartMOB!</h1>
        </section>
        <main class="container">
            <br/><br/>
            <nav class="menu container" id="cad-imo">
                <ul class="logar">
                    <li><a href="cadastra-imovel.html">Cadastrar novo imóvel</a></li>
                </ul>
            </nav>
            <section class="catalogo" id="catalogo">
                <h1>Catálogo</h1>
                <a href="catalogo.php">Ver todos</a>
                <div class="box-homes">
                    <div class="single-home">
                        <img src="casa-mk.jpg" alt="">
                        <h5 class="preco">R$ 150.000</h5>
                        <div class="row-info">
                            <h4 class="bairro">Tatuapé</h4>
                            <div class="inside">
                                <p class="quartos">4</p>
                                <p class="banheiros">3</p>
                            </div>
                        </div>
                        <h6 class="cidade">São Paulo, SP</h6>
                    </div>
                    <div class="single-home">
                        <img src="casa-mk.jpg" alt="">
                        <h5 class="preco">R$ 150.000</h5>
                        <div class="row-info">
                            <h4 class="bairro">Tatuapé</h4>
                            <div class="inside">
                                <p class="quartos">4</p>
                                <p class="banheiros">3</p>
                            </div>
                        </div>
                        <h6 class="cidade">São Paulo, SP</h6>
                    </div>
                    <div class="single-home">
                        <img src="casa-mk.jpg" alt="">
                        <h5 class="preco">R$ 150.000</h5>
                        <div class="row-info">
                            <h4 class="bairro">Tatuapé</h4>
                            <div class="inside">
                                <p class="quartos">4</p>
                                <p class="banheiros">3</p>
                            </div>
                        </div>
                        <h6 class="cidade">São Paulo, SP</h6>
                    </div>
                    <div class="single-home">
                        <img src="casa-mk.jpg" alt="">
                        <h5 class="preco">R$ 150.000</h5>
                        <div class="row-info">
                            <h4 class="bairro">Tatuapé</h4>
                            <div class="inside">
                                <p class="quartos">4</p>
                                <p class="banheiros">3</p>
                            </div>
                        </div>
                        <h6 class="cidade">São Paulo, SP</h6>
                    </div>
                </div>
            </section>
            <section class="contato" id="contato">
                <h1>Tem alguma dúvida?<br>Deixe nós ajudarmos você</h1>
                <div class="email-wrapper">
                    <form>
                        <input type="email" placeholder="youremail@gmail.com">
                        <button>Enviar</button>
                    </form>
                </div>
            </section>
        </main>
        <footer>
            <div class="infos">
                <div class="container">
                        <p>Telefone: <span>(11) 99999-9999</span></p>
                        <p>E-mail: <a href="mailto:exemplo@examplo.com?subject=Assunto"> exemplo@examplo.com</a></p>
                    </div>
                </div>
                <div class="copy">
                    <div class="container">
                        &copy;All rights reserved.
                    </div>
                </div>
            </footer>
        </body>
</html>