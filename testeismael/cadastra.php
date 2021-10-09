<?php


// Recebendo os dados passados pela página "orcamento.php"

$recebenome = $_POST["nome"];

$recebeemail = $_POST["email"];

$recebecpf = $_POST["cpf"];

$receberua = $_POST["rua"];

$recebenumero  = $_POST["numero"];

$recebebairro  = $_POST["bairro"];

$recebecidade  = $_POST["cidade"];

$recebefone  = $_POST["fone"];

$recebemensagem  = $_POST["mensagem"];

$recebemensagem1  = $_POST["mensagem1"];

// Definindo os cabeçalhos do e-mail

$headers = "Content-type:text/html; charset=iso-8859-1";




// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE



$para = "matheus_arthur@live.com";



// Definindo o aspecto da mensagem



$mensagem   = "<h3>De:</h3> ";

$mensagem  .= $recebenome ;

$mensagem  .= "<h3>E-Mail:</h3>";

$mensagem  .= $recebeemail ;

$mensagem  .= "<h3>CPF:</h3>";

$mensagem  .= $recebecpf ; 

$mensagem  .= "<h3>Rua:</h3>";

$mensagem  .= $receberua ; 

$mensagem  .= "<h3>Número:</h3>";

$mensagem  .= $recebenumero ;

$mensagem  .= "<h3>Bairro:</h3>";

$mensagem  .= $recebebairro ;

$mensagem  .= "<h3>Cidade:</h3>";

$mensagem  .= $recebecidade ;

$mensagem  .= "<h3>fone:</h3>";

$mensagem  .= $recebefone ;

$mensagem  .= "<h3>1ª Mensagem:</h3>";

$mensagem  .= $recebemensagem ;

$mensagem  .= "<h3>2ª Mensagem:</h3>";

$mensagem  .= $recebemensagem1 ;

// Enviando a mensagem para o destinatário



$envia =  mail($para,"Página de Contato do Site",$mensagem,$headers);

  

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.



$mensagem2  = "<p>Olá <strong>" . $recebenome . "</strong>. Agradeçemos sua participação e a oportunidade de recebermos o seu contato.</p>";

$mensagem2 .= "<p>Observação - Não é necessário responder esta mensagem.</p>";



$envia =  mail($recebeemail,"Sua mensagem foi recebida!",$mensagem2,$headers);

$id=$_POST["id"];
$senha=$_POST["senha"];
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$data=$_POST["data"];
$fone=$_POST["fone"];
$letr=$_POST["letra"];
$cad= date("d/m/Y");


$letra= strtoupper("$letr"); // transforma a letra da busca alfabetica em maiuscula

if(file_exists("usuarios/$id.txt")){                         //Se o usuario ja existir não cadastra
echo "<script>location.href='msg.php?msg=existe&volt=cadastro.php'</script>";
}
else{
if($id==""){
echo "<script>location.href='cadastro.php';alert('Escreva seu nome de usuário!');</script>";
}
else{
$salvar= "
<?php
\$senha=\"$senha\";
\$nome=\"$nome\";
\$cpf=\"$cpf\";
\$data=\"$data\";
\$fone=\"$fone\";
\$cad=\"$cad\";
?>";
$abreid= fopen("usuarios/$id.txt","w");  //cadastrando o usuario
fwrite($abreid,"$salvar");
fclose($abreid);


$let="
<?php
if(file_exists(\"usuarios/$id.txt\")){
echo \"<br> <a href=suaconta.php?id=$id>$id</a>\";
}
?>";
$abrele= fopen("listas/$letra.txt","a+");
fwrite($abrele,"$let");
fclose($abrele);

echo "<script>location.href='msg.php?msg=ok'</script>";
}
}
?>


