<?php 

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $ano = $_POST["ano"];

    $stmt = $pdo->prepare("INSERT INTO livros (titulo, autor, editora, ano) values (?, ?, ?, ?)");
    $stmt->execute([$titulo, $autor, $editora, $ano]);

    header("Location: lista.php");
}
?>