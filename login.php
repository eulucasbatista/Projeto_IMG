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
	           <div class="conteudologin" class="form"><center>
			   <form action="validacao.php"method="post"><br>
				   <select name="tipo">               <br>
					   <option value="Aluno">Aluno</option>
					   <option value="Professor">Professor</option>	   			  			  			  
				   </select><br>
				   
				<p class="name"> <br><br>
							<label for="name">Nome</label><br>
							<input id="nome" type="text" name="nome">
						</p> 
				   <p class="cpf"><br>
						    <label for="cpf">CPF</label><br>
							<input id="cpf" type="text" name="cpf">
							</p>
							<br>
							<br>
				  
				   <input type="submit" value="Entrar">
			   </center> </form>
				 </div>
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