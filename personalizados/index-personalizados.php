<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['comprar'])) {
        // Coletar informações do produto do formulário
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $imagem = $_POST['imagem'];

        // Criar uma array associativa para representar o produto
        $produto = [
            'nome' => $nome,
            'preco' => $preco,
            'imagem' => $imagem,
        ];

        // Verificar se o carrinho já existe na sessão e criar se necessário
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }

        // Adicionar o produto ao carrinho
        $_SESSION['carrinho'][] = $produto;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-personalizados.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="../images/oxe-nerd-logo.png" >
    <title>Personalizados</title>
</head>

<body>
    <!-- Header  -->
    <header>
        <a href="../index.php"><img class="logo-oxe-nerd" src="../images/oxe-nerd-logo.png" title="Logo da Oxe Nerd"></a>
        <nav>
            <a class="" href="../produtos/cadastro_produtos.php"> Novos produtos </a>
            <div><a class="" href="../promocoes/index-promocoes.php"> Promoções </a></div>
            <hr>
            <a class="" href="../eletronicos/index-eletronicos.php"> Eletrônicos </a>
            <a class="" href="#"> Personalizados </a>
            <a class="" href="../login/index-login.php"> Login </a>
            <a class="" href="../carrinho/index-carrinho.php"> <img class="carrinho" src="../images/carrinho.png" title="carrinho">
            <?php echo isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0; ?> </a>
        </nav>
    </header>
    <!-- Fim  -->

    <!-- Containers dos Personizados -->
    <nav class="titulo"><strong>Personalizados <hr></strong></nav>
    <h2 class="titulo"><B>Canecas</B></h2>
    <section class="carrossel"> <!--Primeira linha de produtos , CANECAS-->
        <section class="cinza"> <!--Canecas branco -->
            <section class="container">
                <img class="venda" src="../images/img_perso/Caneca.png" alt="Imagem de uma Canecas branco"> 
                <h2>Caneca  de GAMER<br> personalizada</h2>
                <p><s>R$ 25,99</s></p>
                <p class="preco"> <strong>R$ 15,99</strong></p>
                <p>À vista no PIX</p>

                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Caneca GAMER personalizada">
                        <input type="hidden" name="preco" value="15.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/Caneca.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"> <!--Canecas preta -->
            <section class="container">
                <img class="venda" src="../images/img_perso/Caneca-play-game.png" alt="Imagem de uma Canecas preta">
                <h2>Caneca PLAY GAME controle<br>personalizada</h2>
                <p><s>R$ 34,99</s></p>
                <p class="preco"> <strong>R$ 21,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Caneca PLAY GAME controle personalizada">
                        <input type="hidden" name="preco" value="21.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/Caneca-play-game.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"><!--Canecas GTA -->
            <section class="container">
                <img class="venda" src="../images/img_perso/CanecaGTA.png" alt="Caneca do GTA San Andreas">
                <h2>Caneca de GTA San Andreas 
                   <br> personalizada</h2>
                <p><s>R$ 47,99</s></p>
                <p class="preco"> <strong>R$ 32,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Caneca de GTA San Andreas personalizada">
                        <input type="hidden" name="preco" value="32.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/CanecaGTA.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"><!--Canecas CHROME -->
            <section class="container">
                <img class="venda" src="../images/img_perso/CanecaChrome.png" alt="Caneca do navegador Chrome">
                <h2>Caneca Estou Offline Chrome Dinossauro Café personalizada</h2>
                <p><s>R$ 47,99</s></p>
                <p class="preco"> <strong>R$ 32,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Caneca Estou Offline Chrome Dinossauro Café personalizada">
                        <input type="hidden" name="preco" value="32.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/CanecaChrome.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>


        
    </section>

    
    <h2 class="titulo"><B>Camisas</B></h2>
    <section class="carrossel"> <!--Segunda linha de produtos, CAMISAS-->
        <section class="cinza"> <!--Camisa Mario World -->
            <section class="container">
                <img class="venda" src="../images/img_perso/MarioWorld.png" alt="Camisa Mario World"> 
                <h2>Camiseta GAMER Super Mario World</h2>
                <p><b>3X</b> DE <b>16,67</b> SEM JUROS</p>
                <p class="preco"> <strong>R$ 39,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Camiseta GAMER Super Mario World">
                        <input type="hidden" name="preco" value="39.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/MarioWorld.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"> <!--Camisa da logo do homem aranha -->
            <section class="container">
                <img class="venda" src="../images/img_perso/LogoAranha.png" alt="Camisa da logo do homem aranha">
                <h2>Camiseta Homem Aranha Venom</h2>
                <p><s>R$ 44,99</s></p>
                <p class="preco"> <strong>R$ 36,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Camiseta Homem Aranha Venom">
                        <input type="hidden" name="preco" value="36.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/LogoAranha.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"><!--Camisa da NASA -->
            <section class="container">
                <img class="venda" src="../images/img_perso/NASA.png" alt=" Camisa da NASA">
                <h2>Camiseta feminina T-shirt Nasa Nerd</h2>
                <p><B>4X</B> DE <B>R$ 15,50</B> SEM JUROS</p>
                <p class="preco"> <strong>R$ 54,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Camiseta feminina T-shirt Nasa Nerd">
                        <input type="hidden" name="preco" value="54.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/NASA.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"><!--Camisa do Sasuke de Naruto -->
            <section class="container">
                <img class="venda" src="../images/img_perso/SASUKEE.png" alt="Camisa do Sasuke de Naruto">
                <h2>Camiseta feminina Naruto Sasuke Chibi</h2>
                <p><s>R$ 55,99</s></p>
                <p class="preco"> <strong>R$ 44,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Camiseta feminina Naruto Sasuke Chibi">
                        <input type="hidden" name="preco" value="44.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/SASUKEE.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>
    </section>

    <h2 class="titulo"><B>Capinhas</B></h2>
    <section class="carrossel"> <!--Primeira linha de produtos , CANECAS-->
        <section class="cinza"> <!--Canecas branco -->
            <section class="container">
                <img class="venda" src="../images/img_capas/capa1.png" alt="Imagem de uma Capa"> 
                <h2>Capinha para celular Groot</h2>
                <p><s>R$ 35,00</s></p>
                <p class="preco"> <strong>R$ 30,00</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Capinha para celular Groot">
                        <input type="hidden" name="preco" value="30.00"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_capas/capa1.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"> <!--Canecas preta -->
            <section class="container">
                <img class="venda" src="../images/img_capas/capa2.png" alt="Imagem de uma capa">
                <h2>Capinha para celular GAME ZONE</h2>
                <p><s>R$ 39,90</s></p>
                <p class="preco"> <strong>R$ 21,90</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Capinha para celular GAME ZONE">
                        <input type="hidden" name="preco" value="21.90"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_capas/capa2.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"><!--Canecas GTA -->
            <section class="container">
                <img class="venda" src="../images/img_capas/capa3.png" alt="Imagem de uma capa">
                <h2>Capa para celular Gameboy </h2>
                <p><s>R$ 107,99</s></p>
                <p class="preco"> <strong>R$ 99,99</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Capa para celular Gameboy">
                        <input type="hidden" name="preco" value="99.99"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_capas/capa3.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>

        <section class="cinza"><!--Canecas CHROME -->
            <section class="container">
                <img class="venda" src="../images/img_capas/capa4.png" alt="Imagem de uma capa">
                <h2>Capa para celular do Pikachu </h2>
                <p><s>R$ 53,99</s></p>
                <p class="preco"> <strong>R$ 39,90</strong></p>
                <p>À vista no PIX</p>
                
                <div class="carrossel"> <!-- Adicionando no carrinho -->
                    <form method="post">
                        <input type="hidden" name="nome" value="Capa para celular do Pikachu">
                        <input type="hidden" name="preco" value="39.90"> <!-- Substitua pelo preço do produto -->
                        <input type="hidden" name="imagem" value="../images/img_perso/capa4.png"> <!-- Substitua pelo caminho da imagem do produto -->
                        <button class="btn" type="submit" name="comprar">COMPRAR </button>
                    </form>
                </div>
            </section>
        </section>


        
    </section>



    <!---------------- Fale Conosco incio ---------------->
    <footer>
        <h2>Fale Conosco</h2>
        <div>
            <img src="../images/Whatsapp.png" alt="Whatsapp"><p>82 99714-3090</p>
            <img src="../images/Instagram.png" alt="Instagram"><p>@oxe_nerd</p>
            <img src="../images/Mail.png" alt="E-Mail"><p>oxenerdbr@outlook.com</p>
        </div>
        <p><strong>OXE NERD<BR>Todos os direitos reservados</strong></p> 
    </footer>
    <!---------------- Fale Conosco fim ---------------->
</body>

</html>