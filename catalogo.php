<?php
    $conn = new mysqli( "localhost", "id16829963_root", "Slade46615@!", "id16829963_imobiliaria");

    if( $conn->connect_error ){
        die( "Falha ao conectar ao banco de dados: " . $conn->connect_error );
    }
    
    $sql = "SELECT bairro, cidade, preco FROM imoveis";
    $result = $conn->query( $sql );
    while( $row = $result->fetch_object(  ) ){
        $array[  ] = $row->bairro;
        $array[  ] = $row->cidade;
        $array[  ] = $row->preco;
    }
    $array = implode( "|", $array );
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
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            var result = '<?php echo $array; ?>';
            result = result.split( "|" );
            window.onload = function(  ){
                for ( var i = 0; i < result.length; i++){
                    $( "#box-homes" ).append( '  <div class="single-home"> <img src="casa-mk.jpg" alt=""><h5 class="preco"> R$ ' + result[ i + 2 ] + '</h5><div class="row-info"><h4 class="bairro">' + result[ i ] + '</h4><div class="inside"><p class="quartos">4</p><p class="banheiros">3</p></div></div><h6 class="cidade">' + result[ i + 1 ] + '</h6></div>' );
                    i += 2;
                    /*<div class="single-home">
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
                        </div>*/
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
        <main class="container">
            <div class="box-catalogo">
                <!-- <aside class="filtro">
                    <form action="#" method="GET" style="flex-direction:column">
                        <div class="select-wrapper">
                            <label for="lugar">Lugar</label>
                            <select name="lugar" id="">
                                <option value="sp">São Paulo</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="mg">Minas Gerais</option>
                            </select>
                        </div>
                            
                        <div class="select-wrapper">
                            <label for="tipoDePropriedade">Tipo de Propriedade</label>
                            <select name="tipoDePropriedade" id="">
                                <option value="alugar">Alugar</option>
                                <option value="comprar">Comprar</option>
                            </select>
                        </div>
                        <div class="select-wrapper">
                            <label for="precoMaximo">Preço Máximo</label>
                            <select name="precoMaximo" id="">
                                <option value="100">R$ 100.000</option>
                                <option value="200">R$ 200.000</option>
                                <option value="300">R$ 300.000</option>
                                <option value="400">R$ 400.000</option>
                                <option value="500">R$ 500.000</option>
                                <option value="600">R$ 600.000</option>
                                <option value="700">R$ 700.000</option>
                                <option value="800">R$ 800.000</option>
                                <option value="900">R$ 900.000</option>
                                <option value="1000">R$ 10.000.000</option>
                            </select>
                        </div>
                        <button type="submit">
                            Buscar
                        </button>
                    </form>
                </aside> -->
                <section class="catalogo" id="catalogo">
                    <h1>Catálogo</h1>
                    <div class="box-homes" id="box-homes">
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
            </div>
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