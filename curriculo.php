<!doctype html>
<html>
<link rel="stylesheet" href="css/curriculo.css">
    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Título da página (aparece na aba) -->
        <title>Cadastro</title>
    </head>
    <body>  
        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Cadastro Sticle</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form class="row g-1" action="insert.php" method="post" name= insert.php >
            <fieldset  id="fiel">
                <form class="row g-1" action="insert.php" method="post" name= insert.php >
                    <div class="col-md-6">
                    
                      <br><br>
                      <label for="validationServer01" class="form-label">Nome Completo*</label><br>
                      <input type="text" class="form-control " id="nome" name="nome" required>
                      <div class="col-md-4">
                      <br>
                      <label for="validationServer02" class="form-label">Telefone*</label><br> 
                      <input type="number" class="form-control" id="telefone" name="telefone" required> 
                    </div>
                    <div class="col-md-4">
                      <br>
                      <label for="validationServer02" class="form-label">Data De Nascimento*</label><br> 
                      <input type="date" class="form-control" id="telefone" name="nascimento" required> 
                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="validationServer02" class="form-label">Idade*</label><br> 
                        <input type="number" class="form-control" id="telefone" name="idade" required> 
                    </div>
                    </div>
                      <div class="col-md-3"><br>
                        <label id="cargo" for="validationServer04" class="form-label">Estado Civil*</label>
                          <select class="form-select "  name="estadocivil"  required>
                            <option selected disabled value="">Selecione...</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="União Estavel">União Estavel</option>
                            <option value="Solteiro">Solteiro</option>
                            <option value="Viuvo">Viuvo</option>
                          </select>
                    </div>
                    <div class="col-md-3"><br>
                      <label id="cargo" for="validationServer04" class="form-label">Sexo*</label>
                      <select class="form-select "  name="sexo"  required>
                        <option selected disabled value="">Selecione...</option>
                            <option value="masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
                   

                    <div class="col-md-4">
                          <br>
                          <label for="validationServerUsername" class="form-label">Email*</label><br>
                          <input type="text" class="form-control "  name="email"  aria-describedby="validationServer05Feedback" required>
                     </div>
                    <div class="col-md-4">
                      <br>
                      <label for="validationServer02" class="form-label">Nome Da Mãe*</label><br>  
                      <input type="text" class="form-control" id="telefone" name="nomemae" required> 
                    </div>
                      <div class="col-md-3"><br>
                            <label for="validationServer04" class="form-label">Estado*</label><br>
                        <select class="form-select " id="validationServer04"name="estado" aria-describedby="validationServer04Feedback" required>
                          <option selected disabled value="">meu estado é ...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                      
                        </select>
                    
                    </div>

                    <div class="col-md-3">
                        <br>
                        <label for="validationServer03" class="form-label">Cidade*</label><br>
                          <input type="text" class="form-control" id="validationServer03"name="cidade" aria-describedby="validationServer03Feedback" required >
                
                     </div>
                    <div class="col-md-3">
                         <br>
                        <label for="validationServer05" class="form-label">CEP</label><br>
                       <input type="number" class="form-control " id="validationServer05"  name="cep"aria-describedby="validationServer05Feedback" >
                
                    </div>
                     <div class="col-md-3">
                        <br>
                        <label for="validationServer03" class="form-label">Bairro*</label><br>
                          <input type="text" class="form-control" id="validationServer03"name="bairro" aria-describedby="validationServer03Feedback" required >
                
                     </div><br>
                     <div class="col-md-6">
                       <label for="validationServer03" class="form-label">Rua*</label><br>
                        <input type="text" class="form-control" id="validationServer03" name="rua" aria-describedby="validationServer03Feedback" required>
                  
                      </div>
                
                  <div class="col-md-2"><br>
                      <label for="validationServer03" class="form-label">N°</label><br>
                      <input type="number" class="form-control" id="validationServer03" name="numero" aria-describedby="validationServer03Feedback" >
                  
                  </div> 
        
                </div>
              
                    <div class="col-md-3"><br>
                      <label id="cargo" for="validationServer04" class="form-label">Já trabalhou Conosco*</label>
                      <select class="form-select " id="cargo" name="ja_trabalhou" aria-describedby="validationServer04Feedback" required>
                        <option selected disabled value="">Selecione...</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        
                          </select>
                        
                        </div> 
                        <div class="col-md-3"><br>
                          <label id="cargo" for="validationServer04" class="form-label">Possui Parentes na Emprensa?*</label>
                        <select class="form-select " id="cargo" name="parentes" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Selecione...</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                          </select>
                        </div> 
                          <div class="col-md-6">
                                <br>
                                <label for="validationServer01" class="form-label">Nome do Parente</label>
                                  <input type="text" class="form-control " id="nome" name="nomeparente" >
                          </div>
                          <div class="col-md-6">
                                <br>
                                <label for="validationServer01" class="form-label">Grau de Parentesco</label>
                                  <input type="text" class="form-control " id="nome" name="grauparente" >
                          </div>
                          <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Foi Indicado Por Algum Funcionário??*</label>
                            <select class="form-select " id="cargo" name="indica" aria-describedby="validationServer04Feedback" required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Sim">Sim</option>
                              <option value="Não">Não</option>
                            </select>
                          </div>
                          <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Disponibilidade De Horário*</label>
                            <select class="form-select " id="cargo" name="disponibilidade" aria-describedby="validationServer04Feedback" required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Manhã">Manhã</option>
                              <option value="Tarde">Tarde</option>
                              <option value="Noite">Noite</option>
                              <option value="Todos">Todos</option>
                            </select>
                          </div>
                          <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Há interesse em trabalhar a noite ?*</label>
                            <select class="form-select " id="cargo" name="trabalhanoite" aria-describedby="validationServer04Feedback" required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Sim">sim</option>
                              <option value="Não">não</option>
                           
                            </select>
                          </div>
                          <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Se houver a necessidade de mudança de horário?*</label>
                            <select class="form-select " id="cargo" name="mudahora" aria-describedby="validationServer04Feedback" required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Aceita">Aceita</option>
                              <option value="Não Aceita">Não Aceita</option>
                           
                            </select>
                          </div>
                          <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Formação Escolar?*</label>
                            <select class="form-select " id="cargo" name="formacaoescolar" aria-describedby="validationServer04Feedback" required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Ensino Fundamental">Ensino Fundamental</option>
                              <option value="Ensino Médio ">Ensino Médio</option>
                              <option value="Ensino Técnico">Ensino Técnico</option>
                              <option value="Ensino Superior">Ensino Superior</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                             <br>
                                <label for="validationServer02" class="form-label">Ano de conclusão*</label>  
                                 <input type="date" class="form-control" id="telefone" name="ano"> 
                           </div>
                           <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Estuda Atualmente?*</label>
                            <select class="form-select " id="cargo" name="estuda" aria-describedby="validationServer04Feedback" required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Sim">sim</option>
                              <option value="Não ">não</option>
                          
                            </select>
                          </div>
                          <div class="col-md-4">
                          <div class="col-md-3"><br>
                            <label id="cargo" for="validationServer04" class="form-label">Horário de estudo*</label>
                            <select class="form-select " id="cargo" name="horario" aria-describedby="validationServer04Feedback"  required>
                              <option selected disabled value="">Selecione...</option>
                              <option value="Manhã">Manhã</option>
                              <option value="Tarde ">Tarde</option>
                              <option value="Noite">Noite</option>
                              <option value="Não Estudo">Não Estudo</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                          <div class="col-md-6">
                                <br>
                                <label for="validationServer01" class="form-label">Curso</label>
                                  <input type="text" class="form-control " id="nome" name="curso" >
                          </div>
        
                        <!-- CARGO -->
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Cargo*</label>
                    <select class="form-select " id="cargo" name="cargo" aria-describedby="validationServer04Feedback" required>
                        <option selected disabled value="">Função...</option>
                          <option value="Ajudante Geral(Produção)">Ajudante Geral(Produção)</option>
                          <option value="Auxiliar De Expedição Junior">Auxiliar De Expedição Junior</option>
                          <option value="Auxiliar De Expedição Senior">Auxiliar De Expedição Senior</option>
                          <option value="Auxiliar De Limpeza">Auxiliar De Limpeza</option>
                          <option value="Auxiliar De Serviço gerais">Auxiliar De Serviço gerais</option>
                          <option value="Auxiliar De Produção ">Auxiliar De Produção</option>
                          <option value="Auxiliar administrativo I">Auxiliar administrativo 1</option>
                          <option value="Auxiliar administrativo II">Auxiliar administrativo 2</option>
                          <option value="Auxiliar administrativo III">Auxiliar administrativo 3</option>
                          <option value="Jovem Aprendiz">Jovem Aprendiz</option>
                          <option value="Conferente">Conferente</option>
                          <option value="Recepcionista">Recepcionista</option>
                        <option value="Aprendiz De Tecelão">Aprendiz De Tecelão</option>
                        <option value="Tecelão Junior">Tecelão Junior</option>
                        <option value="Tecelão De Malhas">Tecelão De Malhas</option>
                        <option value="Revisor de Tecidos Junior">Revisor de Tecidos Junior</option>
                        <option value="Revisor de Tecidos Pleno">Revisor de Tecidos Pleno</option>
                        <option value="Revisor de Tecidos Senior">Revisor de Tecidos Senior</option>
                        <option value="Motorista De Caminhão">Motorista De Caminhão</option>
                        <option value="Jardineiro">Jardineiro</option>
                        <option value="Mecânico de Manutenção">Mecânico de Manutenção</option>
                        <option value="Operador de Impilhadeira">Operador de Impilhadeira</option>
                        <option value="Supervidor de Recursos Humanos">Supervidor de Recursos Humanos</option>
                        <option value="Analista Contábil">Analista Contábil</option>
                        <option value="Gerente Administrativo">Gerente Administrativo</option>
                        <option value="Analista Administrativo">Analista Administrativo</option>
                        <option value="Analista Comercial">Analista Comercial</option>
                        <option value="Supervisor De Produção">Supervisor De Produção</option>
                        <option value="Supervisor De Sistemas">Supervisor De Sistemas</option>
                        <option value="Analista Fiscal">Analista Fiscal</option>
                        <option value="Analista de PCP">Analista de PCP</option>
                        <option value="Estagiário De Análise E Desenvolvimento De Sistemas">Estagiário De Análise E Desenvolvimento De Sistemas</option>
                        <option value="Outra função">Outra Função</option>
                      </select> 
                 </div>
        
                  
                                                <!-- Caixa de texto -->
                <div class="campo">
                    <br>
                    <label for="experiencia"><strong>Objetivo* </strong></label>
                    <textarea rows="6" style="width: 26em"  name="objetivo" required></textarea>
                  </div>
                 <div class="campo">
                    <br>
                    <label for="experiencia"><strong>Formação Acadêmica* </strong></label>
                    <textarea rows="6" style="width: 26em"  name="formacao" required></textarea>
                  </div>
                  <div class="campo">
                    <br>
                    <label for="experiencia"><strong>Experiência profisional* </strong></label>
                    <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia" required></textarea>
                  </div>
                  <label for="experiencia"><strong>EMPREGOS ANTERIORES </strong></label>
                  <p><br><br>
                                         <!--  empresas anteriores 1-->
                  <label for="validationServer01" class="form-label">Ultima Empresa*</label>
                  <input type="text" class="form-control " id="nome" name="ultimaempresa1"required >
                  <br><br>
                  <label for="validationServer02" class="form-label">Data De Entrada*</label>
                  <input type="date" class="form-control" id="telefone" name="entrada1" required>
                  <br><br>
                  <label for="validationServer02" class="form-label">Data De Saída*</label>
                  <input type="date" class="form-control" id="telefone" name="saida1" required> 
                  <br><br>  
                   <label for="validationServer01" class="form-label">Cargo*</label>
                  <input type="text" class="form-control " id="nome" name="funcao1"required >
                  <br><br>
                  <label for="validationServer02" class="form-label">Último Salário*</label><br> 
                  <input type="number" class="form-control" id="telefone" name="salario1" required> 
                  <div class="campo">
                    <br>
                    <label for="experiencia"><strong>Motivo Da Saida* </strong></label>
                    <textarea rows="6" style="width: 26em" id="experiencia" name="motivo1" required></textarea>
                  </div>
                                        <!--  empresas  2-->
                                        <label for="validationServer01" class="form-label">Penúltima Empresa</label>
                  <input type="text" class="form-control " id="nome" name="ultimaempresa2" >
                  <br><br>
                  <label for="validationServer02" class="form-label">Data De Entrada</label>
                  <input type="date" class="form-control" id="telefone" name="entrada2">
                  <br><br>
                  <label for="validationServer02" class="form-label">Data De Saída</label>
                  <input type="date" class="form-control" id="telefone" name="saida2"> 
                  <br><br>  
                   <label for="validationServer01" class="form-label">Cargo</label>
                  <input type="text" class="form-control " id="nome" name="funcao2" >
                  <br><br>
                  <label for="validationServer02" class="form-label">Último Salário</label><br> 
                  <input type="number" class="form-control" id="telefone" name="salario2"> 
                  <div class="campo">
                    <br>
                    <label for="experiencia"><strong>Motivo Da Saida </strong></label>
                    <textarea rows="6" style="width: 26em" id="experiencia" name="motivo2"></textarea>
                  </div>
                                        <!--  empresas anteriores 3-->
                                        <label for="validationServer01" class="form-label">Antepenúltima Empresa</label>
                  <input type="text" class="form-control " id="nome" name="ultimaempresa3" >
                  <br><br>
                  <label for="validationServer02" class="form-label">Data De Entrada</label>
                  <input type="date" class="form-control" id="telefone" name="entrada3">
                  <br><br>
                  <label for="validationServer02" class="form-label">Data De Saída</label>
                  <input type="date" class="form-control" id="telefone" name="saida3" > 
                  <br><br>  
                   <label for="validationServer01" class="form-label">Cargo</label>
                  <input type="text" class="form-control " id="nome" name="funcao3">
                  <br><br>
                  <label for="validationServer02" class="form-label">Último Salário</label><br> 
                  <input type="number" class="form-control" id="telefone" name="salario3"> 
                  <div class="campo">
                    <br>
                    <label for="experiencia"><strong>Motivo Da Saida </strong></label>
                    <textarea rows="6" style="width: 26em" id="experiencia" name="motivo3"></textarea>
                  </div>
                  <br><br>
                   <center> <button class="botao" type="submit" id='botao' >Enviar Formulário</button></center>  
                    <br><br>
                  </div>
              </form>
        </fieldset>
    </body>
</html>


