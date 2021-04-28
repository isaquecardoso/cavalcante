<?php
session_start();
include ('verifica.php');

if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])):
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal do aluno | Dashboard</title>
<link rel="shortcut icon" href="../img/icon.png"/>
<link href="css/dashboard.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<script type="text/javascript" src="../js/vlibras-plugin.js"></script>
<script type="text/javascript" src="../js/plugin.js"></script>
<script type="text/javascript" src="../js/doctools.js"></script>
<script type="text/javascript" src="../js/documentation_options.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/translations.js"></script>
<script type="text/javascript" src="../js/underscore.js"></script>
<script type="text/javascript" src="../js/language_data.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
</head>
<body>
<header>
<div class = "header">      
        <div class = "logotype"> 
        <img src="Login/img/logotype.png" alt="Logo Cavalcante" width="171" height="55">
        </div>

<div class = "login-info">
        <i class="fas fa-globe icons"></i>
        <i class="far fa-comment-dots icons"></i>
        <i class="far fa-bell icons"></i>
        <div class = "user-logged">
        <ul>
        <li><a href="javascript://" class="menu-drop1">
        <i class="fas fa-user-circle icons"></i>
        <label class = "nomeUser"><?php echo $nomeUser?></label></a>
                <div class= "sub-items">
                <ul class="ul-drop1">
                                <li><a href = "#" title = "Meus dados de cadastro">Meus dados de cadastro</a></li>
                                <li><a href = "#" title = "Alterar senha">Alterar senha</a></li>
                                <li><a href = "./logout.php" title = "Sair">Sair</a></li>
                        </ul>
                </div>
        </li>  
        </ul>        
      </div>
      <i class="fas fa-caret-down link-user"></i>
</div>
</header>
<div class = "menu-dashboard">
<ul>
              <li><a href="" title = "Inicio">Início</a></li>
              <li><a href="javascript://" class="menu-drop2" title = "Minha turma">Minha turma <i class="fas fa-caret-down link-sub-menu"></i></a>
              <div class = "sub-menu">
                        <ul class="ul-drop2">
                                <li><a href = "#" title = "Calendário escolar">Horário escolar</a></li>
                              
                        </ul>
                </div>
                </li>
              <li><a href="" title = "Ambiente virtual">Ambiente virtual</a></li>
              <li><a href="javascript://" class="menu-drop3" title = "Informações">Informações</a><i class="fas fa-caret-down link-sub-menu"></i>
                 <div class = "sub-menu">
                        <ul class="ul-drop3">
                                <li><a href = "#" title = "Calendário escolar">Calendário escolar</a></li>
                                <li><a href = "#" title = "Análise do aluno">Análise do aluno</a></li>
                                <li><a href = "https://renovacao.educacao.mg.gov.br/" title = "Renovação de matricula"target = "_blank">Renovação de matricula</a></li>
                        </ul>
                </div>
              </li>
                
              <li><a href="javascript://" class="menu-drop4" title = "Fale conosco">Fale conosco</a><i class="fas fa-caret-down link-sub-menu"></i>
                <div class= "sub-menu">
                <ul class="ul-drop4">
                                <li><a href= "" title = "Entre em contato conosco">Entre em contato conosco</a></li>
                        </ul>
                </div>
             </li>
      </ul>  
</div>
<!--Início slide de imagens-->
<div class="col-100">
  <div class="slider-principal">
    <div><img src="img/banner-1.png" alt="Imagem do slide 1"/></div>
    <div><img src="img/banner-1.png" alt="Imagem do slide 2"/></div>
  </div>  
  </div>
<!-- Inicio plugin dos slides-->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<!-- Final plugin dos slides-->

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
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
<!--Final plugin de libras-->
</body>
</html>

<?php else: header('Location:index.php'); endif;?>
