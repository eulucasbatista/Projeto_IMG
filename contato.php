<? 
include "email.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'lucas.renovado@hotmail.com', $_POST['mensagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}
?>

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
	            <div class="conteudo">
   <h2>Formulário de contato</h2>
	<center>
    <form method="post" id="formulario_contato" onsubmit="validaForm(); return false;" class="form">
		<p class="name"> 
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
		</p>
		
		<p class="email">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="mail@exemplo.com.br" />
		</p>		
	
		<p class="text">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" /></textarea>
		</p>
		
		<p class="submit">
            <input type="submit" value="Enviar" />
		</p>
	</form>
	</center>
    <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#email').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo E-mail');erro = true;
            }
            if($('#mensagem').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Mensagem');erro = true;
            }
            
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>
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