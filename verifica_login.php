<?php
session_start();
if (!$_SESSION['nome']) {
	header('Location: index.php');
	exit();
}
// verifica se o usuario fez login para acessar o painel