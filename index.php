<?php 
    $hora = date( format: "H:i");
    $numero_hora = date ( format: "H");
    $mensagem = "Bom dia";
    if ($numero_hora >= 12) $mensagem = "Boa tarde";
    if ($numero_hora >= 18) $mensagem = "Boa noite";

    $lanches = [
        [
            "nome" => "Classic Burguer",
            "descricao" => "Beef patty, letuce, tomato, onion, pickles, and special sauce",
            "preco" => "15,00",
        ],
        [
            "nome" => "Cheese Burguer",
            "descricao" => "Beef patty, cheese, letuce, tomato, onion, pickles, and special sauce",
            "preco" => "15,00",
        ],
        [
            "nome" => "Bacon Burguer",
            "descricao" => "Beef patty, bacon, cheese, letuce, tomato, onion, pickles, and special sauce",
            "preco" => "15,00",
        ],
    ]
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Epic Food</title>
</head>

<body>

    <nav>
        <h1>Epic Food</h1>
        <ul>
            <li class="active"><a href="./index.php">cardápio</a></li>
            <li><a href="/admin.html">produtos</a></li>
            <li><a href="/new.html">cadastrar</a></li>
        </ul>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor"
                class="icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            <span><?php echo $mensagem ." , são ". $hora ?></span>
        </div>

    </nav>

    <main>
        <h3>Nosso Cardápio</h3>
        <p>Cada prato que servimos é uma obra de arte gastronômica cuidadosamente elaborada por nossos talentosos chefs. Nossa culinária é uma fusão de tradição e inovação, com uma paleta de sabores que abraça influências de todo o mundo. Desde pratos clássicos até criações contemporâneas, o nosso cardápio oferece uma variedade de opções para atender a todos os gostos e preferências.</p>

        <div id="link-category">
            <a href="#lanches" class="pill">lanches</a>
            <a href="#massas" class="pill">massas</a>
            <a href="#" class="pill">sobremessas</a>
            <a href="#" class="pill">bebidas</a>
        </div>

        <h4 id="lanches">🍔 lanches</h4>
        <section>
            <?php foreach ($lanches as $lanche): ?>
                <div class="card">
                    <img src="./assets/images/lanche1.jpg" alt="food">
                    <div class="card-body">
                        <h5><?php echo $lanche["nome"]?></h5>
                        <p><?php echo $lanche["descricao"]?></p>
                        <p class="price">R$ <?php echo $lanche["preco"]?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <h4 id="massas">🍝 massas</h4>
        <section>
            <div class="card">
                <img src="./assets/images/massa1.jpg" alt="food">
                <div class="card-body">
                    <h5>carbonara</h5>
                    <p>massa italiana, molho branco, bacon, queijo parmesão e ovo</p>
                    <p class="price">R$ 35,00</p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/massa1.jpg" alt="food">
                <div class="card-body">
                    <h5>carbonara</h5>
                    <p>massa italiana, molho branco, bacon, queijo parmesão e ovo</p>
                    <p class="price">R$ 35,00</p>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/massa1.jpg" alt="food">
                <div class="card-body">
                    <h5>carbonara</h5>
                    <p>massa italiana, molho branco, bacon, queijo parmesão e ovo</p>
                    <p class="price">R$ 35,00</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <h3>Epic Food</h3>
            <p>projeto de exemplo da disciplina de Linguagens de Servidor do EAD do C.E. Senac</p>
            <p>feito com 🖤 e com PHP</p>
        </div>
        
    </footer>

</body>

</html>