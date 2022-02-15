<!DOCTYPE html>
<html>
     <head>
	      <title> IMG - Instituto Municipal de Guarulhos </title>
	      <link rel="stylesheet" href="css/index.css" type="text/css" />
	 </head>
	 <meta charset=utf-8>
	 <body>
	 
	 <div class="container">
		      <div class="logo">
			     <img src="Logos/logo.png" alt="Logo do Site" title="Logo do site IMG - Instituto Municapal de Guarulhos"/>
				 </div>
	 
	 <div class="menu"> 
				      <ul>
					      <li> <a href="home.php"> HOME </a> </li>
						  <li> <a href="login.php"> LOGIN </a> </li>
						  <li> <a href="cursos.php"> CURSOS </a> </li>				  
						  <li> <a href="cadastro.php"> CADASTRO </a> </li>
						  <li> <a href="contato.php"> CONTATO </a> </li>
						  <li> <a href="sobre.php"> SOBRE </a> </li>
									  						 
					   </ul> 
                 </div>
	            <div class="conteudovalidacao">
				<center>
			<?php
	session_start();
	extract($_REQUEST);
	require 'conexao.php';
	
	if($conexao){
		if ($tipo == "Aluno"){
			$sql_verifica_usuario = "SELECT * FROM aluno WHERE nome='{$nome}' AND cpf='{$cpf}'";
		}else{
			$sql_verifica_usuario = "SELECT * FROM professor WHERE nome='{$nome}' AND cpf='{$cpf}'";
		}
		
		$resultado = mysqli_query($conexao, $sql_verifica_usuario);
		$linha = mysqli_num_rows($resultado);

		if($linha == 1){
			if($tipo == "Aluno"){
				header("Location: restritoAluno.php");
				$_SESSION["cpf"] = $cpf;
			}else{
				header("Location: restritoProfessor.php");
				$_SESSION["cpf"] = $cpf;
			}

		}else{
			echo("<p>Nome ou CPF não conferem!</p>");
			//header("Location: ../index.php?erro=true");
		}

	
	}else{
		exit("Falha na conexão: " . mysqli_connect_error());
	}
	
	

	
?>
				</center>
				
				</div>
				 
				 
				 <div class="rodape">
				 <center>
				 <img src="Logos/apoio.png" width="125" height="100"  />
				 <img src="Logos/logo_prefeitura.png" alt="Logo Prefeitura" title="Logo Prefeitura de Guarulhos" width="180" height="100" />
				 <img src="Logos/logobilhete.png" alt="Logo Bilhete" title="Logo Bilhete Único" width="100" height="100"  />
				 <img src="Logos/ifspLogo.png" alt="IFSP Logo" title=" Logo IFSP" width="180" height="100"  />
				 </center>
				 </div>
				<center>
				<span> IMG &copy 2015 - Todos os direitos reservados. </span> <br />
				<a href="#"> SOBRE </a> | <a href="#"> CONTATO </a>
				</center>
			</div>

		
		</body>
<html>	



