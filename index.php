<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Biblioteca Virtual - Página Inicial</title>
  <link rel="stylesheet" href="style.css">
  <style>

    /* Import das fontes */
    @import url('https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    /* Estilos gerais */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      font-size: 1em;
      line-height: 1.5;
    }
    a {
      color: black;
      font-weight: bold;
      text-decoration: none;
    }
    a:hover {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      background-color: #303085;
      padding: 5px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
      transition-duration: 0.2s;
    }
    header {
      background-color: #4C71D4;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cabecalho {
        color: black;
        font-family: 'Bungee Inline', sans-serif;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      margin: 0;
      font-size: 2em;
      font-weight: bold;
      text-shadow: 2px 2px px rgba(0, 0, 0, 0.1);
    }
    nav {
      margin-top: 20px;
      display: flex;
      justify-content: center;
      font-family: 'Roboto', sans-serif;
    }
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }
    nav li {
      margin: 0 10px;
    }
    /* Estilos específicos para a página inicial */
    main {
      margin: 50px auto;
      text-align: center;
      font-family: 'Roboto', sans-serif;
    }
    h2 {
      font-size: 2em;
      margin-bottom: 20px;
      color: #333;
      text-shadow: 1px 1px #ccc;
    }
    p {
      font-size: 1.2em;
      margin-bottom: 30px;
      color: #666;
    }
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
      bottom: 0;
      position: fixed;
      width: 100%;
      font-family: 'Roboto', sans-serif;
    }
    footer p {
      margin: 0;
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <h1 class="cabecalho">Biblioteca Virtual do Lucão ♿</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastro.php">Cadastre um livro</a></li>
        <li><a href="lista.php">Lista de livros</a></li>
      </ul>
    </nav>
  </header>
  <main>

    <h2>Bem-vindo(a) à Biblioteca Virtual</h2>
    <p>Navegue pelas páginas para cadastrar, apagar e consultar livros em nosso acervo.</p>

  </main>
  <footer>
    <p>&copy; 2023 Biblioteca Virtual - Feito por Lucas Henrique.</p>
  </footer>
</body>
</html>