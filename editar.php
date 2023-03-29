<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $ano = $_POST["ano"];

    $stmt = $pdo->prepare("UPDATE livros SET titulo = ?, autor = ?, editora = ?, ano = ? WHERE id = ?");
    $stmt->execute([$titulo, $autor, $editora, $ano, $id]);

    header("Location: lista.php");
} else {
    $id = $_GET["id"];

    $stmt = $pdo->prepare("SELECT * FROM livros WHERE id = ?");
    $stmt->execute([$id]);
    $livro = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<style>
		/* Estilos CSS para a página */
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}
		h1 {
			margin-top: 20px;
			text-align: center;
			color: #333;
		}
		form {
			margin: 20px auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			max-width: 500px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #333;
		}
		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 3px;
			font-size: 16px;
			color: #333;
		}
		button[type="submit"], .btn {
			display: inline-block;
			background-color: #4C70D4;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
			margin-right: 10px;
			margin-bottom: 20px;
		}
		button[type="submit"]:hover, .btn:hover {
			background-color: #303085;
		}
		.error {
			color: #ff0000;
			font-size: 14px;
			margin-bottom: 10px;
		}
	</style>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $livro["id"]; ?>">

    <label>Título:</label><br>
    <input type="text" name="titulo" value="<?php echo $livro["titulo"]; ?>"><br><br>

    <label>Autor:</label><br>
    <input type="text" name="autor" value="<?php echo $livro["autor"]; ?>"><br><br>

    <label>Editora:</label><br>
    <input type="text" name="editora" value="<?php echo $livro["editora"]; ?>"><br><br>

    <label>Ano:</label><br>
    <input type="text" name="ano" value="<?php echo $livro["ano"]; ?>"><br><br>

    <input type="submit" value="Salvar" class="btn">
</form>