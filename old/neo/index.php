<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="O NeoFluxo é um sistema que identifica o comportamento do fluxo informacional nas redes sociais durante o processo eleitoral." />
<meta name="keywords" content="neofluxo, twitter, política, eleições 2010, serra, dilma, fluxos de dados, visualização de dados, pesquisa, teccred" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>NeoFluxo - Eleição Presidencial 2010</title>

<code><link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico"></code>


<link rel="stylesheet" type="text/css" href="estilos.css"/>
<link rel="stylesheet" type="text/css" href="aba_style.css"/>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<script src="glow/1.7.2/core/core.js" type="text/javascript"></script>
<script src="contato_panel.js" type="text/javascript"></script>

<style>
@import 'reset.css';
@import 'contato_panel.css';

</style>



</head>

<body>
<?php include_once("analyticstracking.php") ?>


<div id="geral">
  
  <div id="lingua">
	<div id="br"><a href="index.php"><img src="imagens/br.jpg" width="20" height="15"/></a></div>
	<div id="en"><a href="en/index.php"><img src="imagens/eng.jpg" width="20" height="15"/></a></div>
  </div>	
  
  <p class="contact trigger"><a href="#">contato</a></p>
    
  
  <div id="topo">
    
    <div id="img1"><a href="index.php"><img src="imagens/logo.png" alt="logo"/></a></div>
    <div id="obs"> 
		<div id="img2"><a href="index.php"><img src="imagens/logo2.png" alt="logo2"/></a></div>
	</div>

	<div id="twi">
		<a href="http://www.twitter.com/neofluxo" target="_blank"><img src="imagens/twitter.png" alt="twitter" width="25" height="25" align="left"/></a>
		<a href="http://www.facebook.com/pages/NeoFluxo/152867231423593" target="_blank"><img src="imagens/facebook.png" alt="facebook" width="25" height="25" align="left"/></a>
	</div>  
 
  </div>
  


 <div id="wrapper">
	
		<ul id="menu">
			<li class="home"><a class="selected" href="index.php">Home</a></li>
			<li class="projeto"><a href="projeto.php">Projeto</a></li>
			<li class="visu"><a href="visu.php">Visualizações</a></li>
			<li class="api"><a href="api.php">API</a></li>
			<li class="contato"><a href="equipe.php">Equipe</a></li>
		</ul>
  </div>


<div id="cximg">  
 <div id="cx"><div class="opt">
   <div id="mantem">
<div id="corre">
    <a href="rede2_dilma.php"><img id="slide-img-1" src="images/visu8.png" class="slide" alt="" /></a>
    <a href="nuvem_dilma.php"><img id="slide-img-2" src="images/visu1.png" class="slide" alt="" /></a>
    <a href="graf_dilma.php"><img id="slide-img-3" src="images/visu2.png" class="slide" alt="" /></a>
    <a href="rede_dilma.php"><img id="slide-img-4" src="images/visu10.png" class="slide" alt="" /></a>
    
    <a href="rede2_serra.php"><img id="slide-img-5" src="images/visu7.png" class="slide" alt="" /></a>
    <a href="nuvem_serra.php"><img id="slide-img-6" src="images/visu5.png" class="slide" alt="" /></a>
    <a href="graf_serra.php"><img id="slide-img-7" src="images/visu6.png" class="slide" alt="" /></a>
    <a href="rede_serra.php"><img id="slide-img-8" src="images/visu12.png" class="slide" alt="" /></a>
   
    <a href="rede2_marina.php"><img id="slide-img-9" src="images/visu9.png" class="slide" alt="" /></a>
    <a href="nuvem_marina.php"><img id="slide-img-10" src="images/visu3.png" class="slide" alt="" /></a>
    <a href="graf_marina.php"><img id="slide-img-11" src="images/visu4.png" class="slide" alt="" /></a>
    <a href="rede_marina.php"><img id="slide-img-12" src="images/visu11.png" class="slide" alt="" /></a>
    
    <div id="slide-controls">
     <p id="slide-client" class="text"><strong>:: </strong><span></span></p>
     <p id="slide-desc" class="text"></p>
     <p id="slide-nav"></p>
    </div>
</div>
	
	<!--content featured gallery here -->
   </div>
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"visualização:","desc":"redes sociais Dilma"},{"id":"slide-img-2","client":"visualização:","desc":"nuvem de tags Dilma"},{"id":"slide-img-3","client":"visualização:","desc":"gráficos Dilma"},{"id":"slide-img-4","client":"visualização:","desc":"redes sociais Dilma"},{"id":"slide-img-5","client":"visualização:","desc":"redes sociais Serra"},{"id":"slide-img-6","client":"visualização:","desc":"nuvem de tags Serra"},{"id":"slide-img-7","client":"visualização:","desc":"gráficos Serra"},{"id":"slide-img-8","client":"visualização:","desc":"redes sociais Serra"},{"id":"slide-img-9","client":"visualização:","desc":"redes sociais Marina"},{"id":"slide-img-10","client":"visualização:","desc":"nuvem de tags Marina"},{"id":"slide-img-11","client":"visualização:","desc":"gráficos Marina"},{"id":"slide-img-12","client":"visualização:","desc":"redes sociais Marina"}];
   </script>
  </div></div><!--/header-->
</div>  

    <div id="conteudo">
    
      <div class="info">
       
       <?php include("abre.php");?>
 
       
       <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.neofluxo.net&amp;layout=box_count&amp;show_faces=true&amp;width=150&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:65px;" allowTransparency="true" align="right" ></iframe>
      
      </div>
      
    </div>
    
            
  
  <div id="logos">
  		<h1>Fomento:</h1>
  		<div id="cnpq"><a href="http://lattes.cnpq.br" target="_blank"><img src="imagens/cnpq.png" alt="logo_cnpq" width="80" height="30" align="left"/></a></div>
  		<h1>Apoio:</h1>
        <div id="casper2"><a href="http://www.facasper.com.br" target="_blank"><img src="imagens/casper2.png" alt="logo_casper" width="40" height="40" align="left"/></a></div>
        <div id="casper"><a href="http://www.casperlibero.edu.br/canais/index.php/mestrado/index,c=41.html" target="_blank"><img src="imagens/casper.png" alt="logo_casper" width="40" height="40" align="left"/></a></div>
        <h1>Realização:</h1>
        <div id="tec"><a href="http://www.teccred.net" target="_blank"><img src="imagens/teccred.png" alt="logo_tecc" width="80" height="30" align="left"/></a></div>
      </div>
      
  
  
</div>
 
<div id="rodape"> <a href="index.php"> Home </a><a href="projeto.php"> Projeto </a><a href="visu.php"> Visualizações </a><a href="api.php"> API </a><a href="equipe.php"> Equipe </a><a href="api.php#textos4"> Desenvolvedores </a><a href="mailto:walterlima@pq.cnpq.br"> Contato </a>
</div>
  
  
<div id="cc"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/br/"><img alt="Licença Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br /><br/></div>

<div id="cc_text"><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">NeoFluxo</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.neofluxo.net" property="cc:attributionName" rel="cc:attributionURL">Teccred</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/br/">Creative Commons Atribuição-Uso Não-Comercial-Compatilhamento pela mesma licença License</a>. Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://www.neofluxo.net" rel="dct:source">www.neofluxo.net</a><br/><br/></div>

<br/><br/>
  
</body>
</html>
