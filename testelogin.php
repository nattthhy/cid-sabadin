<?php
session_start();
	//print_r($_REQUEST);
	if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
	 {

		//acessa
		include_once('config.php');
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		// **ATENÇÃO: Este SELECT é INSEGURO. Use Prepared Statements!**
		$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
		$result = $conexao->query($sql);
		
		if (mysqli_num_rows($result) < 1)
		 {
		 	unset($_SESSION['email']);
			unset($_SESSION['senha']);
			
			// CORREÇÃO DE LÓGICA: Redireciona para a página de login em caso de FALHA
			header('location: mclog.php'); 
			exit;
		}
		else{
			// CORREÇÃO DE SINTAXE: Uso correto de $_SESSION
			$_SESSION['email'] = $email;
			// **NUNCA GUARDAR SENHA NA SESSÃO!**
			// $_SESSION['senha'] = $senha; 
			
			header('location: carrinho.php');
			exit;
		}
	}
	else
	{
		// Redireciona se os campos estiverem vazios
		header('location: mclog.php');
	}
// CORREÇÃO DE SINTAXE: Adicionada a chave de fecho final
?>