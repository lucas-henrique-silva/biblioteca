<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Livros</title>

    <style>
		@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

		body {
			font-family: Arial, sans-serif;
			background-color: #ddd;
		}

		h1 {
			text-align: center;
			color: black;
			font-family: 'Righteous', sans-serif;

		}

		form {
			margin: 0 auto;
			max-width: 600px;
			padding: 25px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		label {
			display: inline-block;
			margin-bottom: 5px;
			color: black;
			font-weight: bold;
		}

		input[type="text"],
		input[type="number"] {
			width: 100%;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 20px;
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: #0D66FF;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #0C25F5;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.50);
		}
	</style>
</head>
<body>
	<h1>📚 Cadastro de Livros 📚</h1>
	<form action="cadastrar.php" method="post">
		<label for="titulo">Título:</label><br>
		<input type="text" id="titulo" name="titulo" required><br><br>

		<label for="autor">Autor:</label><br>
		<input type="text" id="autor" name="autor" required><br><br>

		<label for="editora">Editora:</label><br>
		<input type="text" id="editora" name="editora" required><br><br>

		<label for="ano">Ano:</label><br>
		<input type="number" id="ano" name="ano" required><br><br>

		<input type="submit" value="Cadastrar ✔️">
	</form>
		<br>
		<br>	
    <form action="index.php" method="get">
		<input type="submit" value="Voltar a página inicial ⬅️">
	</form>
	
</body>
</html>