<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro_produtos.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="images/Logo.svg" type="svg">
    <title>Cadastro de produtos</title>
</head>

<body>

    <!-- Header  -->
    <header>
        <a href="../index.php"><img class="logo-oxe-nerd" src="../images/oxe-nerd-logo.png" title="Logo da Oxe Nerd"></a>        
        <nav>
            <a class="" href="#"> Novos produtos </a>
            <a class="" href="../promocoes/index-promocoes.php"> Promoções </a>
            <a class="" href="../eletronicos/index-eletronicos.php"> Eletrônicos </a>
            <a class="" href="../personalizados/index-personalizados.php"> Personalizados </a>
            <a class="" href="../login/index-login.php"> Login </a>
            <a class="" href="../carrinho/index-carrinho.php"> <img class="carrinho" src="../images/carrinho.png" title="carrinho"> </a>
        </nav>
    </header>
    <!-- Fim  -->

    <div class="cadastro">
        <form action="processar_cadastro.php" method="post" enctype="multipart/form-data">
            <h1> Nome: <input type="text" name="nome"><br> </h1>
            <h1> Preço: <input type="text" name="preco"><br> </h1>
            <h1> Imagem: <input type="file" name="imagem" accept="image/*"><br><br> </h1>
            <button> <input type="submit" value="Cadastrar Produto"> </button> <br>
            <a class="btn2" href="../produtos/lista_produtos_add_produto.php"> Lista de produtos </a>
        </form>   
    </div> 

    <style>
    .cadastro .btn2 {
    background-color: #fff(94, 94, 139);
    text-align: center;
    color: purple;
    padding: 10px 10px; /* Ajuste do preenchimento */
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
    display:block;
    font-size: 15px;
}

    </style>

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