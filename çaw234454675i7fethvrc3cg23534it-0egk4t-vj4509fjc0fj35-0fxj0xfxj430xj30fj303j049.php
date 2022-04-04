<!DOCTYPE html>
<html lang="pt-br">
<head>

                         <!-- -----------------------------------------CONSULTA -------------------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="funcao.js"></script>   <!-- LINK DO FILTRO-->
    <link rel="stylesheet" href="css/consulta.css">

</head>
<body>

<div class="header"style="width: 500rem;">
<h1>STICLE DUBLAGEM E COMÉRCIO DE TECIDOS</h1>

</div>
<!-- BOTOES -->
<div class="row">
<div class="col-3 menu">
<ul>


<a href="curriculo.php"style="text-decoration:none" target="_blank"><li>Inserir </li></a>
<a href="reognirç32143ç32dsdw30qdke-fk34-kf3-fk34k0rkf-04kfgjfetoigjtigjirj.php"style="text-decoration:none" ><li>Consulta Individual</li></a>
<a href="index.html"style="text-decoration:none" ><li>Sair </li></a>
</ul>
</div>
<div class="col-9.2">

<h1>Bem vindo!</h1>

<p>Consulte aqui as informações de sua lista de contratação e programe a suas entrevistas.</p>

  <!-- PAINEL DE INFORMAÇÕES  SELECT -->
<div class="painel" style="width: 500rem;">


<table id="tabela">
            <thead>
               <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th> Data de Nascimento</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Estado Civil</th>
                    <th>Nome Da Mãe</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Cep</th>
                    <th>Bairro</th>
                    <th>Rua</th>
                    <th>N°</th>
                    <th>Já Trabalhou Conosco?</th>
                    <th>Parentes que Trabalham Empresa?</th>
                    <th>Nome do Parente</th>
                    <th>Grau de Parentesco</th>
                    <th>Indicado?</th>
                    <th> Disponibilidade de Horário</th>
                    <th>Interesse em Trabalhar a noite ?</th>
                    <th>Mudaria de Horário?</th>
                    <th>Formação Academica</th>
                    <th>Ano da Formação</th>
                    <th>Estuda Atualmente?</th>
                    <th>Horario de Estudo</th>
                    <th>Cursando Atualmente</th>
                    <th>Cargo</th>
                    <th>Objetivo Profissional</th>
                    <th>Formação</th>
                    <th>Experiencia Profissional</th>
                    <th>Ultima Empresa</th>
                    <th>Data Da Entrada</th>
                    <th>Data Da Saída</th>
                    <th>Cargo</th>
                    <th>último salário</th>
                    <th>Motivo Da Saída</th>
                    <th>Penúltima Empresa</th>
                    <th>Data Da Entrada</th>
                    <th>Data Da Saída</th>
                    <th>Cargo</th>
                    <th>Antepenúltima salário</th>
                    <th>Motivo Da Saída</th>
                    <th>Ultima Empresa</th>
                    <th>Data Da Entrada</th>
                    <th>Data Da Saída</th>
                    <th>Cargo</th>
                    <th>último salário</th>
                    <th>Motivo Da Saída</th>

                </tr>
                <tr>
                    <th><input type="text" id="txtColuna1"/></th> <!-- id -->
                    <th><input type="text" id="txtColuna2"/></th> <!-- nome -->
                    <th><input type="text" id="txtColuna3"/></th> <!-- telefone -->
                    <th><input type="text" id="txtColuna4"/></th> <!-- email -->
                    <th><input type="text" id="txtColuna5"/></th> <!-- nascimento -->
                    <th><input type="text" id="txtColuna6"/></th> <!-- idade -->
                    <th><input type="text" id="txtColuna7"/></th> <!-- Sexo-->
                    <th><input type="text" id="txtColuna8"/></th> <!-- estado civil-->
                    <th><input type="text" id="txtColuna9"/></th> <!-- nome da mãe -->
                    <th><input type="text" id="txtColuna10"/></th> <!-- estado -->
                    <th><input type="text" id="txtColuna11"/></th> <!-- cidade -->
                    <th><input type="text" id="txtColuna12"/></th> <!-- cep -->
                    <th><input type="text" id="txtColuna13"/></th> <!-- bairro-->
                    <th><input type="text" id="txtColuna14"/></th> <!-- rua-->
                    <th><input type="text" id="txtColuna15"/></th> <!-- número-->
                    <th><input type="text" id="txtColuna16"/></th> <!-- já_trabalhou-->
                    <th><input type="text" id="txtColuna17"/></th> <!-- parentes -->
                    <th><input type="text" id="txtColuna18"/></th> <!-- nome do parente -->
                    <th><input type="text" id="txtColuna19"/></th> <!-- Grau de Parentesco -->
                    <th><input type="text" id="txtColuna20"/></th> <!-- Indicado? -->
                    <th><input type="text" id="txtColuna21"/></th> <!-- Disponibilidade de Horário -->
                    <th><input type="text" id="txtColuna22"/></th> <!-- Interesse em Trabalhar a noite ? -->
                    <th><input type="text" id="txtColuna23"/></th> <!-- Mudaria de Horário? -->
                    <th><input type="text" id="txtColuna24"/></th> <!-- Formação Academica -->
                    <th><input type="text" id="txtColuna25"/></th> <!-- Ano da Formação -->
                    <th><input type="text" id="txtColuna26"/></th> <!-- Estuda Atualmente?-->
                    <th><input type="text" id="txtColuna27"/></th> <!-- horario de estudo-->
                    <th><input type="text" id="txtColuna28"/></th> <!-- Cursando Atualmente-->
                    <th><input type="text" id="txtColuna29"/></th> <!-- Cargo-->
                    <th><input type="text" id="txtColuna30"/></th> <!-- objetivo-->
                    <th><input type="text" id="txtColuna31"/></th> <!-- formacao-->
                    <th><input type="text" id="txtColuna32"/></th> <!-- exeperiencia-->
                    <th><input type="text" id="txtColuna33"/></th> <!-- ultimaempresa1-->
                    <th><input type="text" id="txtColuna34"/></th> <!-- entrada1-->
                    <th><input type="text" id="txtColuna35"/></th> <!--saida1-->
                    <th><input type="text" id="txtColuna36"/></th> <!-- funcao1-->
                    <th><input type="text" id="txtColuna37"/></th> <!-- salario1-->
                    <th><input type="text" id="txtColuna38"/></th> <!-- motivo1-->
                    <th><input type="text" id="txtColuna39"/></th> <!-- -->
                    <th><input type="text" id="txtColuna40"/></th> <!-- -->
                    <th><input type="text" id="txtColuna41"/></th> <!-- -->
                    <th><input type="text" id="txtColuna42"/></th> <!-- -->
                    <th><input type="text" id="txtColuna43"/></th> <!-- -->
                    <th><input type="text" id="txtColuna44"/></th> <!-- -->
                    <th><input type="text" id="txtColuna45"/></th> <!-- -->
                    <th><input type="text" id="txtColuna46"/></th> <!-- -->
                    <th><input type="text" id="txtColuna47"/></th> <!-- -->
                    <th><input type="text" id="txtColuna48"/></th> <!---->
                    <th><input type="text" id="txtColuna49"/></th> <!-- -->
                    <th><input type="text" id="txtColuna50"/></th> 
                    
                   
                </tr>            
            </thead>
            <tbody>
             <?php 
             
             // CONEXAO COM BANCO
                $mysqli_connection = new MySQLi('179.188.16.162', 'funcionario_ca', 'Sticle@2021', 'funcionario_ca');
            if($mysqli_connection->connect_error){
            echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
            }else{
            echo "";
            }
                   // SELECT FROM CONSULTA NO BANCO 

            $sql = "SELECT * FROM curriculo ORDER BY id DESC";
            $result = $mysqli_connection->query($sql);
                                
                        
            while($row = $result->fetch_assoc()) {
                        
                        echo"   <tr>
                                <td>".$row["id"].
                                "</td><td>".$row["nome"].
                                "</td><td>".$row["telefone"].
                                "</td><td>".$row["email"].
                                "</td><td>".$row["nascimento"].
                                "</td><td>".$row["idade"].
                                "</td><td>".$row["sexo"].
                                "</td><td>".$row["estadocivil"].
                                "</td><td>".$row["nomemae"].
                                "</td><td>".$row["estado"].
                                "</td><td>".$row["cidade"].
                                "</td><td>".$row["cep"].
                                "</td><td>".$row["bairro"].
                                "</td><td>".$row["rua"].
                                "</td><td>".$row["numero"].
                                "</td><td>".$row["ja_trabalhou"].
                                "</td><td>".$row["parentes"].
                                "</td><td>".$row["nomeparente"].
                                "</td><td>".$row["grauparente"].
                                "</td><td>".$row["indica"].
                                "</td><td>".$row["disponibilidade"].
                                "</td><td>".$row["trabalhanoite"].
                                "</td><td>".$row["mudahora"].
                                "</td><td>".$row["formacaoescolar"].
                                "</td><td>".$row["ano"].
                                "</td><td>".$row["estuda"].
                                "</td><td>".$row["horario"].
                                "</td><td>".$row["curso"].
                                "</td><td>".$row["cargo"].
                                "</td><td>".$row["objetivo"].
                                "</td><td>".$row["formacao"].
                                "</td><td>".$row["experiencia"].
                                "</td><td>".$row["ultimaempresa1"].
                                "</td><td>".$row["entrada1"].
                                "</td><td>".$row["saida1"].
                                "</td><td>".$row["funcao1"].
                                "</td><td>".$row["salario1"].
                                "</td><td>".$row["motivo1"].
                                "</td><td>".$row["ultimaempresa2"].
                                "</td><td>".$row["entrada2"].
                                "</td><td>".$row["saida2"].
                                "</td><td>".$row["funcao2"].
                                "</td><td>".$row["salario2"].
                                "</td><td>".$row["motivo2"].
                                "</td><td>".$row["ultimaempresa3"].
                                "</td><td>".$row["entrada3"].
                                "</td><td>".$row["saida3"].
                                "</td><td>".$row["funcao3"].
                                "</td><td>".$row["salario3"].
                                "</td><td>".$row["motivo3"].
                                "</td> </tr>
                        ";
                                }

                                ?>   

            </tbody>
        </table>
    </div>
</div>
</div>
<div class="footer"style="width: 500rem;">
<p>Desenvolvido Por Thales Carvalho.</p>
</div>
</div>
</div>
</body>
</html>