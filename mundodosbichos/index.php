<?php
?>
<!--<!DOCTYPE html>-->
<!--<html lang="pt-BR">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Pet Shop - Produtos</title>-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">-->
<!---->
<!--    <style>-->
<!--        * {-->
<!--    margin: 0;-->
<!--    padding: 0;-->
<!--    box-box-sizing: border-box;-->
<!--            font-family: 'Fredoka', sans-serif;-->
<!--        }-->
<!---->
<!--        body {-->
<!--    background-color: #f9f9f9;-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            min-height: 100vh;-->
<!--        }-->
<!---->
<!--        /* Topo Verde */-->
<!--        header {-->
<!--    background-color: #bce29e;-->
<!--            padding: 15px 50px;-->
<!--            display: flex;-->
<!--            justify-content: space-between;-->
<!--            align-items: center;-->
<!--        }-->
<!---->
<!--        .logo-placeholder {-->
<!--    font-size: 24px;-->
<!--            color: #2b75a1;-->
<!--            font-weight: bold;-->
<!--        }-->
<!---->
<!--        .header-icons {-->
<!--    display: flex;-->
<!--    gap: 20px;-->
<!--            font-size: 22px;-->
<!--            cursor: pointer;-->
<!--        }-->
<!---->
<!--        /* Menu Rosa */-->
<!--        nav {-->
<!--    background-color: #fcd7e5;-->
<!--            padding: 10px 50px;-->
<!--            display: flex;-->
<!--            justify-content: flex-end;-->
<!--            gap: 20px;-->
<!--        }-->
<!---->
<!--        nav a {-->
<!--    text-decoration: none;-->
<!--            color: #b02a6b;-->
<!--            font-weight: 600;-->
<!--            font-size: 16px;-->
<!--            padding: 2px 10px;-->
<!--            border-radius: 5px;-->
<!--            transition: 0.2s;-->
<!--        }-->
<!---->
<!--        nav a.active {-->
<!--    background-color: #f2a6c6;-->
<!--        }-->
<!---->
<!--        nav a:hover {-->
<!--    background-color: #f2a6c6;-->
<!--        }-->
<!---->
<!--        /* Conteúdo Principal */-->
<!--        main {-->
<!--    max-width: 1000px;-->
<!--            margin: 40px auto;-->
<!--            padding: 0 20px;-->
<!--            text-align: center;-->
<!--            flex: 1;-->
<!--        }-->
<!---->
<!--        /* Banner Principal */-->
<!--        .banner {-->
<!--    background-color: #74d8ff;-->
<!--            border-radius: 15px;-->
<!--            padding: 40px;-->
<!--            color: #25789e;-->
<!--            font-size: 42px;-->
<!--            font-weight: bold;-->
<!--            margin-bottom: 40px;-->
<!--            box-shadow: 0 4px 6px rgba(0,0,0,0.05);-->
<!--        }-->
<!---->
<!--        /* Grade de Categorias */-->
<!--        .categories-grid {-->
<!--    display: grid;-->
<!--    grid-template-columns: repeat(4, 1fr);-->
<!--            gap: 20px;-->
<!--            margin-bottom: 40px;-->
<!--        }-->
<!---->
<!--        .card {-->
<!--    border-radius: 20px;-->
<!--            padding: 20px;-->
<!--            height: 220px;-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            align-items: center;-->
<!--            justify-content: space-between;-->
<!--            box-shadow: 0 4px 6px rgba(0,0,0,0.05);-->
<!--            cursor: pointer;-->
<!--            transition: transform 0.2s;-->
<!--        }-->
<!---->
<!--        .card:hover {-->
<!--    transform: scale(1.05);-->
<!--}-->
<!---->
<!--        .card h3 {-->
<!--    font-size: 22px;-->
<!--            font-weight: 600;-->
<!--        }-->
<!---->
<!--        .card .icon-placeholder {-->
<!--    font-size: 50px;-->
<!--            background: rgba(255, 255, 255, 0.4);-->
<!--            width: 80px;-->
<!--            height: 80px;-->
<!--            display: flex;-->
<!--            align-items: center;-->
<!--            justify-content: center;-->
<!--            border-radius: 50%;-->
<!--        }-->
<!---->
<!--        /* Cores dos Cards */-->
<!--        .card.petiscos { background-color: #fff494; color: #a38c12; }-->
<!--        .card.acessorios { background-color: #a8e0a4; color: #3b7a37; }-->
<!--        .card.vacinas { background-color: #ffe0f0; color: #a83b6f; }-->
<!--        .card.brinquedos { background-color: #7ce3ff; color: #1c728a; }-->
<!---->
<!--        /* Botão Saiba Mais */-->
<!--        .btn-saiba-mais {-->
<!--                    background-color: #6ed3ff;-->
<!--            color: #25789e;-->
<!--            border: none;-->
<!--            padding: 12px 60px;-->
<!--            font-size: 32px;-->
<!--            font-weight: bold;-->
<!--            border-radius: 25px;-->
<!--            cursor: pointer;-->
<!--            box-shadow: 0 4px 6px rgba(0,0,0,0.05);-->
<!--            transition: background 0.2s;-->
<!--        }-->
<!---->
<!--        .btn-saiba-mais:hover {-->
<!--                    background-color: #55beed;-->
<!--        }-->
<!---->
<!--        /* Rodapé */-->
<!--        footer {-->
<!--                    height: 60px;-->
<!--            display: flex;-->
<!--            margin-top: auto;-->
<!--        }-->
<!---->
<!--        .footer-left {-->
<!--                    background-color: #ffe0f0;-->
<!--            flex: 3;-->
<!--        }-->
<!---->
<!--        .footer-right {-->
<!--                    background-color: #bce29e;-->
<!--            flex: 1;-->
<!--        }-->
<!---->
<!--        /* Responsividade Básica */-->
<!--        @media (max-width: 768px) {-->
<!--                    .categories-grid {-->
<!--                        grid-template-columns: repeat(2, 1fr);-->
<!--            }-->
<!--            nav {-->
<!--                        justify-content: center;-->
<!--            }-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--    <header>-->
<!--        <div class="logo-placeholder">🐾 🐱 AppPet</div>-->
<!--        <div class="header-icons">-->
<!--            <span>👤</span>-->
<!--            <span>🛒</span>-->
<!--        </div>-->
<!--    </header>-->
<!---->
<!--    <nav>-->
<!--        <a href="#">Home</a>-->
<!--        <a href="#">Sobre nós</a>-->
<!--        <a href="#" class="active">Produto</a>-->
<!--        <a href="#">Adoção</a>-->
<!--        <a href="#">Atendimento</a>-->
<!--    </nav>-->
<!---->
<!--    <main>-->
<!--        <div class="banner">-->
<!--                Produtos-->
<!--        </div>-->
<!---->
<!--        <div class="categories-grid">-->
<!--            <div class="card petiscos">-->
<!--                <h3>Petiscos</h3>-->
<!--                <div class="icon-placeholder">🐹</div>-->
<!--            </div>-->
<!--            <div class="card acessorios">-->
<!--                <h3>Acessórios</h3>-->
<!--                <div class="icon-placeholder">🐶</div>-->
<!--            </div>-->
<!--            <div class="card vacinas">-->
<!--                <h3>Vacinas</h3>-->
<!--                <div class="icon-placeholder">🐱</div>-->
<!--            </div>-->
<!--            <div class="card brinquedos">-->
<!--                <h3>Brinquedos</h3>-->
<!--                <div class="icon-placeholder">🍖</div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <button class="btn-saiba-mais">saiba mais</button>-->
<!--    </main>-->
<!---->
<!--    <footer>-->
<!--        <div class="footer-left"></div>-->
<!--        <div class="footer-right"></div>-->
<!--    </footer>-->
<!---->
<!--</body>-->
<!--</html>-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Comic Sans MS, sans-serif;
        }

        body{
            background:white;
        }

        /* HEADER */

        header{
            background:#cce9ad;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 60px;
        }

        .logo{
            font-size:40px;
        }

        nav{
            display:flex;
            gap:25px;
        }

        nav a{
            text-decoration:none;
            color:#8c2b82;
            font-size:22px;
            font-weight:bold;
        }

        .ativo{
            background:#f3c6dd;
            padding:8px 15px;
            border-radius:10px;
        }

        .icons{
            font-size:28px;
        }

        /* BANNER */

        .banner{

            width:80%;
            margin:35px auto;

            background:#71d7ff;

            border-radius:20px;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:20px 40px;

        }

        .banner img{
            width:120px;
        }

        .banner h1{
            font-size:70px;
            color:#0b7097;
        }

        /* CARDS */

        .categorias{

            width:80%;
            margin:auto;

            display:flex;
            justify-content:space-between;
            margin-top:40px;

        }

        .card{

            width:180px;
            height:250px;

            border-radius:20px;

            display:flex;
            flex-direction:column;
            justify-content:space-between;
            align-items:center;

            padding:20px;

            cursor:pointer;

            transition:.4s;

        }

        .amarelo{
            background:#fff18c;
        }

        .verde{
            background:#bde88a;
        }

        .rosa{
            background:#ffd6ea;
        }

        .azul{
            background:#74d8ff;
        }

        .card h2{

            color:#6d6d2b;
            font-size:30px;
            text-align:center;

        }

        .card img{

            width:110px;

        }

        .card:hover{

            transform:translateY(-10px);
            box-shadow:0 10px 20px rgba(0,0,0,.2);

        }

        /* BOTÃO */

        .botao{

            display:flex;
            justify-content:center;

            margin:60px;

        }

        button{

            border:none;

            background:#71d7ff;

            color:#0b7097;

            font-size:45px;

            padding:18px 120px;

            border-radius:20px;

            cursor:pointer;

            transition:.4s;

        }

        button:hover{

            background:#53c8f4;

        }

        /* RESPONSIVO */

        @media(max-width:900px){

            header{
                flex-direction:column;
                gap:15px;
            }

            nav{
                flex-wrap:wrap;
                justify-content:center;
            }

            .banner{
                flex-direction:column;
                gap:20px;
            }

            .banner h1{
                font-size:50px;
            }

            .categorias{

                flex-wrap:wrap;
                justify-content:center;
                gap:20px;

            }

            button{

                font-size:35px;
                padding:15px 60px;

            }

        }

    </style>

</head>
<body>

<header>

    <div class="logo">
        🐶🐱
    </div>

    <nav>

        <a href="#">Home</a>

        <a href="#">Sobre nós</a>

        <a href="#" class="ativo">Produto</a>

        <a href="#">Adoção</a>

        <a href="#">Atendimento</a>

    </nav>

    <div class="icons">
        👤 🛒
    </div>

</header>

<section class="banner">

    <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png">

    <h1>Produtos</h1>

    <img src="https://cdn-icons-png.flaticon.com/512/2138/2138440.png">

</section>

<section class="categorias">

    <div class="card amarelo" onclick="abrir('Petiscos')">

        <h2>Petiscos</h2>

        <link>
        <a href="https://www.petz.com.br/cachorro/petiscos" target="_blank" style="text-decoration:none;">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png">

    </div>

    <div class="card verde" onclick="abrir('Acessórios')">

        <h2>Acessórios</h2>
        <a href="https://www.petz.com.br/busca?q=acess%C3%B3rios" target="_blank" style="text-decoration:none;">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616430.png">

    </div>

    <div class="card rosa" onclick="abrir('Vacinas')">

        <h2>Vacinas</h2>
        <a href="https://www.petz.com.br/cachorro/farmacia" target="_blank" style="text-decoration:none;">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png">

    </div>

    <div class="card azul" onclick="abrir('Brinquedos')">

        <h2>Brinquedos</h2>
        <a href="https://www.petz.com.br/cachorro/brinquedos" target="_blank" style="text-decoration:none;">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png">

    </div>

</section>

<div class="botao">

    <button onclick="mostrarFormulario()">Cadastro</button>
    <div id="formulario" style="display: none;">

        <form action="cadastro.php" method="POST">

            <label>Nome:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>Data de Nascimento:</label><br>
            <input type="date" name="data" required><br><br>

            <label>E-mail:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Telefone:</label><br>
            <input type="tel" name="telefone" required><br><br>

            <input type="submit" value="Cadastrar">

        </form>

    </div>

</div>

<script>

    function abrir(categoria){

        alert("Você clicou em " + categoria);

    }


</script>

</body>
</html>


