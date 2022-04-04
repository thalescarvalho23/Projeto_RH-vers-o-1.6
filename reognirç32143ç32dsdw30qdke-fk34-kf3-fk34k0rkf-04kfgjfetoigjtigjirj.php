<!DOCTYPE html>
<html lang="pt-br">
<head>
                    <!------------------------------------------- CONSULTA INDIVIDUAL ----------------------------------------------->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/individual.css">

</head>
<body>

<div class="header"style="width: 86rem;">
<h1>STICLE DUBLAGEM E COMÉRCIO DE TECIDOS</h1>
<input type="search" id="pesquisa" oninput="limpar()"style="rigth: 80px;"> <!-- filtro JS-->
<button type="button" onclick="filtrar()">Filtrar</button>
<button type="button" onClick="window.print()">imprimir</button>
</div>
<div class = "fundo">

<!--------------------------------------------------- BOTOES ------------------------------------------------------------------->
<div class="row">
<div class="col-3 menu">
<ul>
<a href="curriculo.php"style="text-decoration:none" target="_blank"><li>Inserir </li></a>
<a href="çaw234454675i7fethvrc3cg23534it-0egk4t-vj4509fjc0fj35-0fxj0xfxj430xj30fj303j049.php"style="text-decoration:none" ><li>voltar</li></a>
<a href="index.html"style="text-decoration:none" ><li>Sair </li></a>

</ul>
</div>
<div >

</div>

  <!-- PAINEL DE INFORMAÇÕES  SELECT -->
<div class="painel"  id ="menu" style="width: 50rem;">
    <br>
        
        <ul id="curriculo">
                                            <!-- ----------FUNÇÃO DO FILTRO JS---------------------------  -->
             <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript">
            function limpar() {
                $('#curriculo li').show();
            }
            function filtrar() {
                var termo = $('#pesquisa').val().toUpperCase();
                $('#curriculo li').each(function() { 
                   if($(this).html().toUpperCase().indexOf(termo) === -1) {
                       $(this).hide();
                   }
                });
            }
         </script>

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
                        
                       
                                <td><li><center><b>ID:</b>".$row["id"].
                                "</center></p><p><b>Nome:</b>".$row["nome"].
                                "</p><p><b>Telefone:</b> ".$row["telefone"].
                                "</p><p><b>Email:</b>".$row["email"].
                                "</p><p><b>Data de Nascimento:</b> ".$row["nascimento"].
                                "</p><p><b>Idade:</b> ".$row["idade"].
                                "</p><p><b>Sexo: </b>".$row["sexo"].
                                "</p><p><b>Estado Civil: </b>".$row["estadocivil"].
                                "</p><p><b>Nome Da Mãe:</b>".$row["nomemae"].
                                "</p><p><b>Estado:</b>".$row["estado"].
                                "</p><p><b>Cidade:</b>".$row["cidade"].
                                "</p><p><b>CEP:</b> ".$row["cep"].
                                "</p><p><b>Bairro:</b> ".$row["bairro"].
                                "</p><p><b>Rua:</b>".$row["rua"].
                                "</p><p><b>Nº:</b>".$row["numero"].
                                "</p><p><b>Já Trabalhou conosco:</b>".$row["ja_trabalhou"].
                                "</p><p><b>Tem parentes na empresa ?:</b>".$row["parentes"].
                                "</p><p><b>Nome do Parente:</b>".$row["nomeparente"].
                                "</p><p><b>Grau de parentesco:</b>".$row["grauparente"].
                                "</p><p><b>Foi indicado:</b>".$row["indica"].
                                "</p><p><b>Qual a disponibilidade de Horário:</b>".$row["disponibilidade"].
                                "</p><p><b>Há interesse em trabalhar a noite ?:</b>".$row["trabalhanoite"].
                                "</p><p><b> Se houver a necessidade de mudança de horário?:</b>".$row["mudahora"].
                                "</p><p><b>Formação Escolar:</b>".$row["formacaoescolar"].
                                "</p><p><b>Ano de conclusão: </b>".$row["ano"].
                                "</p><p><b>Estuda Atualmente: </b>".$row["estuda"].
                                "</p><p><b>Horário de estudo: </b>".$row["horario"].
                                "</p><p><b>Curso: </b>".$row["curso"].
                                "</p><p><b>Cargo: </b>".$row["cargo"].
                                "</p><p><b>Objetivo: </b>".$row["objetivo"].
                                "</p><p><b>Formação Acadêmica: </b>".$row["formacao"].
                                "</p><p><b>Experiencia profisional: </b>".$row["experiencia"].
                                "</p><p><b>Ultima Empresa: </b>".$row["ultimaempresa1"].
                                "</p><p><b>Data De Entrada:</b>".$row["entrada1"].
                                "</p><p><b>Data De Saída:</b>".$row["saida1"].
                                "</p><p><b>Cargo:</b>".$row["funcao1"].
                                "</p><p><b>Último Salário: </b>".$row["salario1"].
                                "</p><p><b>Motivo Da Saida:</b>".$row["motivo1"].
                                "</p><p><b>Penúltima Empresa: </b>".$row["ultimaempresa2"].
                                "</p><p><b>Data De Entrada:</b>".$row["entrada2"].
                                "</p><p><b>Data De Saída:</b>".$row["saida2"].
                                "</p><p><b>Cargo:</b>".$row["funcao2"].
                                "</p><p><b>Último Salário: </b>".$row["salario2"].
                                "</p><p><b>Motivo Da Saida:</b>".$row["motivo2"].
                                "</p><p><b>Antepenúltima Empresa: </b>".$row["ultimaempresa3"].
                                "</p><p><b>Data De Entrada:</b>".$row["entrada3"].
                                "</p><p><b>Data De Saída:</b>".$row["saida3"].
                                "</p><p><b>Cargo:</b>".$row["funcao3"].
                                "</p><p><b>Último Salário: </b>".$row["salario3"].
                                "</p><p><b>Motivo Da Saida:</b>".$row["motivo3"].
                                "</td></li></tr>
                        ";
                                }

                                ?>   
    
            </tbody>
        </table>
    </div>
</div>
</div>


<div class="footer"style="width: 86rem;">
<p>Desenvolvido Por Thales Carvalho.</p>
</div>

</div>


</div>
</body>
</html>