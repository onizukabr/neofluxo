<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="O NeoFluxo é um sistema que identifica o comportamento do fluxo informacional nas redes sociais durante o processo eleitoral." />
<meta name="keywords" content="neofluxo, twitter, política, eleições 2010, serra, dilma, fluxos de dados, visualização de dados, pesquisa, teccred" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>NeoFluxo - Eleição Presidencial 2010</title>

<code><link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico"></code>

<link href="estilos.css" rel="stylesheet" type="text/css" />


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
    <div id="img1"><a href="index.php"><img src="imagens/logo.png" alt="logo" /></a></div>
    <div id="obs"> 
		<div id="img2"><a href="index.php"><img src="imagens/logo2.png" alt="logo2" /></a></div>
	</div> 
	<div id="twi">
		<a href="http://www.twitter.com/neofluxo" target="_blank"><img src="imagens/twitter.png" alt="twitter" width="25" height="25" align="left"/></a>
		<a href="http://www.facebook.com/pages/NeoFluxo/152867231423593" target="_blank"><img src="imagens/facebook.png" alt="facebook" width="25" height="25" align="left"/></a>
	</div>  
  </div>
  


 <div id="wrapper">
	
		<ul id="menu">
			<li class="home"><a href="index.php">Home</a></li>
			<li class="projeto"><a href="projeto.php">Projeto</a></li>
			<li class="visu"><a class="selected" href="visu.php">Visualizações</a></li>
			<li class="api"><a href="api.php">API</a></li>
			<li class="contato"><a href="equipe.php">Equipe</a></li>
		</ul>
  </div>

  

  

    <div id="conteudo">
    
      <div class="info">
      <h2>Visualizações - Primeiro turno</h2><br/>
      <br/>
      <br/>
      
      <h4 id="tt">Disponibilizadas da seguinte maneira:</h4><br/><br/><br/>
      
      <p>Nuvem de Tags: Tomando como palavra-chave os nomes dos candidatos, cada nuvem inclui os termos mais citados por usuários do Twitter relacionados aos mesmos, classificadas em função da freqüência.</p><br/>
 
<p>Gráficos: São gráficos interativos que possibilitam identificar a relevância com a qual os termos, classificados segundo freqüência, foram tratados em cada meio (Fontes oficiais online, Tv ou Twitter).</p><br/>
 
<p>Redes sociais V.1: Gráficos de linha que apresentam as mudanças desenvolvidas em canais oficiais dos candidatos (Twitter, facebook, site oficial, flickr e youtube), demonstrando-se a quantidade de atualizações efetuadas em ordem cronológica.</p><br/>
 
<p>Redes sociais v.2: Representações esféricas das atualizações efetuadas em canais oficiais dos candidatos (Twitter, facebook, site oficial, flickr e youtube) expressas em percentuais.</p><br/><br/><br/>

      <ul>
      	<div id="visu1">
      	<li><strong>Nuvem de Tags</strong></li><br/>
      		<ul>
        		<li><a href="nuvem_dilma.php">:: Dilma</a></li>
        		<li><a href="nuvem_marina.php">:: Marina</a></li>
        		<li><a href="nuvem_serra.php">:: Serra</a></li>
        	</ul>
        </div>	

        <div id="visu2">
        <li><strong>Gráficos</strong></li><br/>
        	<ul>
        		<li><a href="graf_dilma.php">:: Dilma</a></li>
        		<li><a href="graf_marina.php">:: Marina</a></li>
        		<li><a href="graf_serra.php">:: Serra</a></li>
        	</ul>
        </div>	
        
        <div id="visu3">
        <li><strong>Redes Sociais v.1</strong></li><br/>
        	<ul>
        		<li><a href="rede_dilma.php">:: Dilma</a></li>
        		<li><a href="rede_marina.php">:: Marina</a></li>
        		<li><a href="rede_serra.php">:: Serra</a></li>
        	</ul>
        </div>	
        
        <div id="visu4">
        <li><strong>Redes Sociais v.2</strong></li><br/>
        	<ul>
        		<li><a href="rede2_dilma.php">:: Dilma</a></li>
        		<li><a href="rede2_marina.php">:: Marina</a></li>
        		<li><a href="rede2_serra.php">:: Serra</a></li>
        	</ul>
        </div>	
      </ul>  
                
      </div>
      
    </div>
    
            
  
  <div id="logos">
  		<h1>Fomento:</h1>
  		<div id="cnpq"><a href="http://lattes.cnpq.br"><img src="imagens/cnpq.png" alt="logo_cnpq" width="80" height="30" align="left"/></a></div>
  		<h1>Apoio:</h1>
        <div id="casper2"><a href="http://www.facasper.com.br"><img src="imagens/casper2.png" alt="logo_casper" width="40" height="40" align="left"/></a></div>
        <div id="casper"><a href="http://www.casperlibero.edu.br/canais/index.php/mestrado/index,c=41.html"><img src="imagens/casper.png" alt="logo_casper" width="40" height="40" align="left"/></a></div>
        <h1>Realização:</h1>
        <div id="tec"><a href="http://www.teccred.net"><img src="imagens/teccred.png" alt="logo_tecc" width="80" height="30" align="left"/></a></div>
      </div>
      
  
  
</div>
 
<div id="rodape"> <a href="index.php"> Home </a><a href="projeto.php"> Projeto </a><a href="visu.php"> Visualizações </a><a href="api.php"> API </a><a href="equipe.php"> Equipe </a><a href="api.php#textos4"> Desenvolvedores </a><a href="mailto:walterlima@pq.cnpq.br"> Contato </a>
</div>
  
  
<div id="cc"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/br/"><img alt="Licença Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br /><br/></div>

<div id="cc_text"><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">NeoFluxo</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.neofluxo.net" property="cc:attributionName" rel="cc:attributionURL">Teccred</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/br/">Creative Commons Atribuição-Uso Não-Comercial-Compatilhamento pela mesma licença License</a>. Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://www.neofluxo.net" rel="dct:source">www.neofluxo.net</a><br/><br/></div>
  
</body>
</html>
