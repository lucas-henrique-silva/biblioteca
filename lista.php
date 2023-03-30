<!DOCTYPE html>
<html>
<head>
	<title>Lista de Livros</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap');

		body {
			font-family: Arial, sans-serif;
			background-color: #ddd;
		}

		h1 {
			text-align: center;
			color: black;
			font-family: 'Bungee Inline', sans-serif;
			text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
		}

		table {
			margin: 0 auto;
			max-width: 800px;
			background-color: #fff;
			border-collapse: collapse;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		th, td {
			padding: 9px;
			text-align: left;
			border-bottom: 1px solid #ddd;
            border: 1.6px solid black;
			font-size: 15px;
		}

		th {
			background-color: #0093E5;
			color: #fff;
            text-align: center;
			font-weight: bold;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		input[type="text"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 20px;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #0D66FF;
		}

		a {
			color: black;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
			text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
			color: #0C25F5;
			cursor: pointer;
		}

		.btn {
			box-shadow: 1px 1px 4px #333;
			background-color: #0D66FF;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-right: 10px;
            margin-bottom: 20px;
            display: flex;
		}

		.btn:hover {
			background-color: #0C25F5;
			color: #fff;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<a href="cadastro.php" class="btn">Adicionar Livro ➕</a>
    <a href="index.php" class="btn">Voltar a página inicial ⬅️</a>
	<h1>📚 Lista de Livros 📚</h1>
	<table>
		<tbody>
			<?php
            require_once "conexao.php";
            
            $stmt = $pdo->query("SELECT * FROM livros");
            
            echo "<table>";
            echo "<tr><th>ID</th><th>Título</th><th>Autor</th><th>Editora</th><th>Ano</th><th>Ações</th></tr>";
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["titulo"] . "</td>";
                echo "<td>" . $row["autor"] . "</td>";
                echo "<td>" . $row["editora"] . "</td>";
                echo "<td>" . $row["ano"] . "</td>";
                echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar ✏️</a> | <a href='deletar.php?id=" . $row["id"] . "' onclick='return confirm(\"Tem certeza que deseja deletar este livro?\")'>Deletar ❌</a>";
                echo "</tr>";
            }
            	echo "</table>";
			?>
		</tbody>
	</table>
</body>
</html>