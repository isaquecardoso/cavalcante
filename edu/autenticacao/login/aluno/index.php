<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ambiente Acadêmico Virtual de Aprendizagem — Cavalcante Filho</title>
<link rel="shortcut icon" href="../../../../img/icon.png"/>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/4e4ffe4bc5.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="../../../../js/vlibras-plugin.js"></script>
<script type="text/javascript" src="../../../../js/plugin.js"></script>
<script type="text/javascript" src="../../../../js/doctools.js"></script>
<script type="text/javascript" src=".../../../../js/documentation_options.js"></script>
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/translations.js"></script>
<script type="text/javascript" src="../../../../js/underscore.js"></script>
<script type="text/javascript" src="../../../../js/language_data.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<!--Início container -->
	 <div class="container-login">
	 <main>
		 <img id= "logo" src="../../../../img/logotipo.png">
     <?php if (isset($_SESSION['nao_autenticado'])):?>
		<div class="error-login">
				<p>Usuário ou senha errados. Por favor tente outra vez.</p>
				</div>
			<?php endif; unset ($_SESSION ['nao_autenticado']);?>
        <div class="content">
        <div class="first-content">
            <div class="first-column">
				<h2 class="title-primary"> Ambiente Acadêmico Virtual de Aprendizagem</h2>
				<hr align="left" class="line">
        <div class="description-primary">
        <button type="button" class="btn-popover" data-bs-toggle="popover" title="Dúvidas com o acesso ao portal do aluno?" data-bs-content="Sejam bem-vindos ao Ambiente Acadêmico de Aprenzigem virtual da Escola Estadual Pedro Ribeiro Cavalcante Filho.
        Por aqui, vocês poderão acessar a sala virtual com materiais exclusivos preparado pela Equipe de Professores da nossa Escola.
        Caso ocorrra algum erro para acessar, entre em contato com a Secretaria Escolar pelo número: (33) 3277-9990."><i class="far fa-question-circle"></i></button>  
        <script>
      $(function () {
          $('[data-bs-toggle="popover"]').popover();
            
         $('.btn-success').popover({title: "alert", content: "Animation en true", animation: true}); 
        $('.btn-warning').popover({title: "alert", content: "Animation en false", animation: false}); 
      });
        </script>
       </div>
      </div>
      </div>
      <div class=" second-content">
          <div class="second-column">
       <div class="form-login">
           <form class="form" action="login.php" method="POST">
             <p class="welcome">Você já possui uma conta?</p>
              <label class="label-input" for="label"> <i class="fas fa-user-circle icons"></i>
              <input name="matricula" type="text" placeholder="Login" data-bs-toggle="tooltip" data-bs-placement="top" title="Insira o número de matrícula">
                <script>
                $(function () {
                    $('[data-bs-toggle="tooltip"]').tooltip();
                      
                  $('.btn-success').tooltip({title: "alert", content: "Animation en true", animation: true}); 
                  $('.btn-warning').tooltip({title: "alert", content: "Animation en false", animation: false}); 
                });
              </script>
              </label>
              <label class="label-input" for="label"> <i class="fas fa-lock icons"></i>
                <input name="senha" type="password" placeholder="Senha">
              </label>
              <div class="remember-user">
              <input type="checkbox" name="remember-username" id="remember-username" value="1">
              <p class= "rememberusername" for="remember-username">Lembrar identificação de usuário</p>
              </div>
            </div>
            <button class="btn-enter">Acessar</button>
          </form>
          <a class= "forget-passuser" href= "#"> Esqueceu o seu usuário ou senha?</a>
		  </div>
     </div>
	</div>
	</main>
	</div>
<!--Final do container -->
<!--Início plugin de libras-->
  <div vw class="enabled">
    <div vw-access-button class="active">
	   <img class="access-button" data-src="assets/component-ac.png" alt="Conteúdo acessível em libras usando o VLibras Widget com opções dos Avatares Ícaro ou Hozana." src="https://vlibras.gov.br/app/assets/component-ac.png">
	   <img class="pop-up" data-src="assets/popup.png" alt="Conteúdo acessível em libras usando o VLibras Widget com opções dos Avatares Ícaro ou Hozana." src="https://vlibras.gov.br/app/assets/popup.png">
	  </div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <scriptvarvarvar src="https://vlibras.gov.br/app/vlibras-plugin.js"></scriptvarvarvar>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
	<!--Final plugin de libras-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>		 