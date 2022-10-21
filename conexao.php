<?php

// script de conexão com o banco
$conexao = mysqli_connect('localhost:3306', 'root', '', 'login') or die('Não foi possível conectar');// permite mensagem de erro