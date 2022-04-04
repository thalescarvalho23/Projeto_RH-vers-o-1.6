<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>informação</title>
  <link rel="stylesheet" href="css/style-consulta.css">
</head>
<body>



<div class= "hader">

<h1>STICLE DUBLAGEM E COMÉRCIO DE TECIDOS</h1>
</div>  


<div class="col-9.2"><!-- DIV DE ESPAÇAMENTO ENTRE FINAL DA DIV DE SELECT COM O RODAPÉ-->
<center><div class="painel" style="width: 80rem;">
 o tempo de resposta entre  o Envio para o retorno será em até 10 dias, se caso não<br> entrarmos em contato seu curriculo ficará armazenado em nosso banco de talentos
 e abrindo vagas entraremos em contato.

<?php
//CONEXAO COM BD
$mysqli_connection = new MySQLi('179.188.16.162', 'funcionario_ca', 'Sticle@2021', 'funcionario_ca');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}else{
   echo "";
}

      //INSERT
    $nome =$_POST['nome'];
    $telefone =$_POST['telefone'];
    $nascimento=$_POST['nascimento'];
    $idade= $_POST['idade'];
    $email= $_POST["email"];
    $nomemae=$_POST['nomemae'];
    $estado=$_POST["estado"];
    $cidade= $_POST["cidade"];
    $cep= $_POST["cep"];
    $bairro=$_POST["bairro"];
    $rua =$_POST["rua"];
    $numero = $_POST["numero"];
    $ja_trabalhou =$_POST["ja_trabalhou"];
    $parente=$_POST['parentes'];
    $nomeparente=$_POST['nomeparente'];
    $grauparente=$_POST['grauparente'];
    $indica=$_POST['indica'];
    $disponibilidade=$_POST['disponibilidade'];
    $trabalhanoite= $_POST['trabalhanoite'];
    $mudahora=$_POST['mudahora'];
    $formacaoescolar=$_POST['formacaoescolar'];
    $ano=$_POST['ano'];
    $estuda=$_POST['estuda']; 
    $horario= $_POST['horario'];
    $curso=$_POST['curso'];
    $cargo =$_POST["cargo"];
    $sexo = $_POST["sexo"];
    $estadocivil=$_POST['estadocivil'];
    $objetivo = $_POST["objetivo"];
    $formacao = $_POST["formacao"];
    $experiencia = $_POST["experiencia"];
    $ultimaempresa1 = $_POST['ultimaempresa1'];
    $entrada = $_POST['entrada1'];
    $saida = $_POST['saida1'];
    $funcao = $_POST['funcao1'];
    $salario = $_POST['salario1'];
    $motivo = $_POST['motivo1'];
    $ultima2 = $_POST['ultimaempresa2'];
    $entrada2 = $_POST['entrada2'];
    $saida2 = $_POST['saida2'];
    $funcao2 = $_POST['funcao2'];
    $salario2 = $_POST['salario2'];
    $motivo2 = $_POST['motivo2'];
    $ultima3 = $_POST['ultimaempresa3'];
    $entrada3 = $_POST['entrada3'];
    $saida3 = $_POST['saida3'];
    $funcao3 = $_POST['funcao3'];
    $salario3 = $_POST['salario3'];
    $motivo3 = $_POST['motivo3'];
    
   
    $sql= "INSERT INTO `curriculo`(`id`, `nome`, `telefone`, `nascimento`, `idade`, `email`, `nomemae`, `estado`, `cidade`, `cep`, `bairro`, `rua`, `numero`, `ja_trabalhou`, `parentes`, `nomeparente`, `grauparente`, `indica`, `disponibilidade`, `trabalhanoite`, `mudahora`, `formacaoescolar`, `ano`, `estuda`, `horario`, `curso`, `cargo`, `sexo`, `estadocivil`, `objetivo`, `formacao`, `experiencia`, `ultimaempresa1`, `entrada1`, `saida1`, `funcao1`, `salario1`, `motivo1`, `ultimaempresa2`, `entrada2`, `saida2`, `funcao2`, `salario2`, `motivo2`, `ultimaempresa3`, `entrada3`, `saida3`, `funcao3`, `salario3`, `motivo3`) VALUES ('',' $nome','$telefone','$nascimento','$idade',
     '$email','$nomemae','$estado','$cidade','$cep','$bairro','$rua','$numero',
     '$ja_trabalhou','$parente','$nomeparente','$grauparente','$indica','$disponibilidade',
     '$trabalhanoite','$mudahora','$formacaoescolar','$ano','$estuda','$horario','$curso',
     '$cargo','$sexo','$estadocivil','$objetivo','$formacao','$experiencia','$ultimaempresa1','$entrada',
     '$saida','$funcao','$salario','$motivo','$ultima2','$entrada2','$saida2','$funcao2','$salario2',
     '$motivo2','$ultima3','$entrada3','$saida3','$funcao3','$salario3','$motivo3')";
   
   if ($mysqli_connection->query($sql) === TRUE) {
    echo "<br>Formulário Enviado, Boa Sorte Candidato!";
  } else {
    echo "Erro: " . $sql . "<br>" . $mysqli_connection->error;
  }
  
  $mysqli_connection->close();

?>
</div>
<div class="row"> <!-- BOTOES -->
<div class="col-3 menu">
<ul>
<a href="index.html"style="text-decoration:none" style =" width: 700px; 
    margin-left: auto;
    margin-right: auto; " ><li>Voltar </li></a>
</ul>
</div>

</body>
</html>
