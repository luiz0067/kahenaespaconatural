<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acupuntura</title>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<style type="text/css">
body{
	margin-left:0px; margin-right:0px; margin-top:0px; margin-bottom:0px; width:100%; height:100%; position:absolute; background-color:#FFF;}
</style>

<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
	<script src="lightbox/js/prototype.js" type="text/javascript"></script>
	<script src="lightbox/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="lightbox/js/lightbox.js" type="text/javascript"></script>

</head>
<?php include("topo.php"); ?>
<body>
<div class="content">
<?php include("menulateral.php"); ?>
	<div id="riscodivisor"></div>
    <div id="espacoconteudo">
    	<div id="tituloconteudo">Contato<br><hr /></div>
        <div class="textoconteudo">
       <div id="contatocontainer"> 
        <div id="contato">
        <form action="enviar.php" method="post">
        	Nome:
            <input type="text" name="Nome" value="" class="input" /><br>
            E-mail:
            <input type="text" name="email" value="" class="input" /><br>
            Assunto:
            <input type="text" name="assunto" value="" class="input" /><br>
            Mensagem:<br>
            <textarea name="textarea" class="inputarea" rows="5"></textarea><br><br>
            
            <input name="enviar" type="submit" id="enviar" value="enviar" />
            
             <input name="limpar" type="reset" id="limpar" value="limpar" />
            
        </form>
       
        </div>
        
        <div id="escritascontato">
        
        <a style="font-weight:bold; color:#C93">Kahena Espaço Natural</a><br>
        
        Rua Angelo Donin, 512 <br>
        Toledo - Pr<br>
        CEP:85906-716<br>
        <a style="font-weight:bold; color:#C93">Atendimento:</a><br>
        45.3277-0786<br>
        ervasdocampo_@hotmail.com<br>
        </div>        
        </div>
       </div> 
          
    </div>
</div>
</body>
</html>
<?php include("rodape.php"); ?>
