<!DOCTYPE html>
<html>
<head>
	<title>Lista de Livros</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}

		h1 {
			text-align: center;
			color: #666;
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
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
            border: 1.6px solid black;
			font-size: 16px;
		}

		th {
			background-color: #4CAF50;
			color: #fff;
            text-align: center;
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

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		a {
			color: #4CAF50;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		.btn {
			background-color: #4CAF50;
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
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Lista de Livros 📚</h1>
	<a href="cadastro.php" class="btn">Adicionar Livro</a>
    <a href="index.php" class="btn">Voltar a página inicial</a>
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