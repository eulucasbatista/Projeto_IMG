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
	           <div class="conteudocadastro" class="form"> <center>
				   <form action="cadastro.php" method="post"> <br>
					   <select name="tipo">        				<br>	   
						   <option value="Aluno">Aluno</option>
						   <option value="Professor">Professor</option>	   			  			  			  
					   </select><br>
						<p class="name"> <br><br>
							<label for="name">Nome</label><br>
							<input id="nome" type="text" name="nome">
						</p> 
						
						<p class="rg"><br>
						    <label for="rg">RG</label><br>
							<input id="rg" type="text" name="rg">
							</p>
					 
					    <p class="cpf"><br>
						    <label for="cpf">CPF</label><br>
							<input id="cpf" type="text" name="cpf">
							</p>
							
					    <p class="endereco"><br>
						    <label for="endereco">Endereço</label><br>
							<input id="endereco" type="text" name="endereco">
							</p>
					   <p class="telefone"><br>
						    <label for="telefone">Telefone</label><br>
							<input id="telefone" type="text" name="telefone">
							</p>
					   <p class="email"><br>
						    <label for="email">Email</label><br>
							<input id="email" type="text" name="email">
							</p>
					   <br>
					   <br>
					   <input type="submit" value="Cadastrar"> <br><br>
				   </form>
			    </center> </div>
				<?php
					extract ($_REQUEST);
					require 'conexao.php';
					
					if($conexao){ // Verifica conexao
						if(isset($nome) && isset($rg) && isset($cpf) && isset($endereco) && isset($telefone) && isset($email)){
							if($nome != "" && $rg != "" && $cpf != "" && $endereco != "" && $telefone != "" && $email != ""){  //Verifica campos vazios
								
								if($tipo == "Aluno"){
									$verifica_cpf = "SELECT * FROM aluno WHERE cpf='{$cpf}'";
									$resultado_cpf = mysqli_query($conexao, $verifica_cpf);
									$linha_cpf = mysqli_num_rows($resultado_cpf );
									
									if($linha_cpf != 1){ // Verifica cpf
										$insere_aluno = "INSERT INTO aluno VALUES(NULL, '{$nome}', '{$rg}', {$cpf}, '{$endereco}', '{$telefone}', '{$email}')";
										
										if($aluno = mysqli_query($conexao, $insere_aluno)){
											echo('Aluno cadastrado com sucesso!');
										}else{
											echo('Erro ao cadastrar!');
										}

									}else{
										echo('CPF já cadastrado!');
									}
								}else{
									$verifica_cpf = "SELECT * FROM professor WHERE cpf='{$cpf}'";
									$resultado_cpf = mysqli_query($conexao, $verifica_cpf);
									$linha_cpf = mysqli_num_rows($resultado_cpf );
									
									if($linha_cpf != 1){ // Verifica cpf
										$insere_professor = "INSERT INTO professor VALUES(NULL, '{$nome}', '{$rg}', {$cpf}, '{$endereco}', '{$telefone}', '{$email}')";
										
										if($professor = mysqli_query($conexao, $insere_professor)){
											echo('Professor cadastrado com sucesso!');
										}else{
											echo('Erro ao cadastrar!');
										}

									}else{
										echo('CPF já cadastrado!');
									}
								}
							}else{
								echo('Preencha o formulário completo!');
							}
						}
					}else{
						echo('Conexão falhou');
					}
				?>
				 
				 <div class="rodape">
				 <center>
				 <img src="Logos/apoio.png" width="125" height="100"  />
				 <img src="Logos/logo_prefeitura.png" alt="Logo Prefeitura" title="Logo Prefeitura de Guarulhos" width="180" height="100" />
				 <img src="Logos/logobilhete.png" alt="Logo Bilhete" title="Logo Bilhete Único" width="100" height="100"  />
				 <img src="Logos/ifspLogo.png" alt="IFSP Logo" title=" Logo IFSP" width="180" height="100"  />
				 <img src="Logos/comix.png" alt="Comix Logo" title=" Logo IFSP" width="130" height="100"  />
				 </center>
				 </div>
				<center>
				<span> IMG &copy 2015 - Todos os direitos reservados. </span> <br />
				<a href="http://www.guarulhos.sp.gov.br"> PREFEITURA DE GUARULHOS </a> | <a href="http://www.ifsp.edu.br"> IFSP - INSTITUTO FEDERAL DE SÃO PAULO </a> 
				</center>
			</div>

		
		</body>
<html>	