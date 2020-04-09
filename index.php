<?php
include('_conn/database_conn.php');
    //Diretoria
    $query = "SELECT * FROM FormEntrada_Diretoria_carga";
    $statement = sqlsrv_query($connect, $query);

    //AM
    $query2 = "SELECT * FROM FormEntrada_AM_carga";
    $statement2 = sqlsrv_query($connect, $query2);

    //Cliente
    $query3 = "SELECT * FROM FromEntrada_Cliente_carga";
    $statement3 = sqlsrv_query($connect, $query3);

    //GestorContas
    $query4 = "SELECT * FROM FormEntrada_GestorConta_carga";
    $statement4 = sqlsrv_query($connect, $query4);

    //Servico
    $query5 = "SELECT * FROM FormEntrada_Servico_carga";
    $statement5 = sqlsrv_query($connect, $query5);

    //Produto
    $query6 = "SELECT * FROM FormEntrada_Produto_carga";
    $statement6 = sqlsrv_query($connect, $query6);

    //Satisfacao
    $query7 = "SELECT * FROM FormEntrada_MotivosSatisfacao_carga";
    $statement7 = sqlsrv_query($connect, $query7);
    $query8 = "SELECT * FROM FormEntrada_MotivosSatisfacao_carga";
    $statement8 = sqlsrv_query($connect, $query8);
    $query9 = "SELECT * FROM FormEntrada_MotivosSatisfacao_carga";
    $statement9 = sqlsrv_query($connect, $query9);

    //Insatisfacao
    $query10 = "SELECT * FROM FormEntrada_MotivosSatisfacao_carga";
    $statement10 = sqlsrv_query($connect, $query10);
    $query11 = "SELECT * FROM FormEntrada_MotivosSatisfacao_carga";
    $statement11 = sqlsrv_query($connect, $query11);
    $query12 = "SELECT * FROM FormEntrada_MotivosSatisfacao_carga";
    $statement12 = sqlsrv_query($connect, $query12);

    //QUERY TABELA [[GERAL]]
    $query13 = "SELECT DISTINCT [Grupo Empresarial] FROM FormEntrada_CadastroOS ORDER BY [Grupo Empresarial] ASC";
    $statement13 = sqlsrv_query($connect, $query13);
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SelecAninhado3</title>

        <!-- jquery -->
        <script src="_js/jquery-3.4.1.min.js" type="text/javascript" ></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin do select Produtos -->
        <script src="_js/bootstrap-select.min.js" type="text/javascript" ></script>
        <link href="_css/bootstrap-select.min.css" rel="stylesheet" />
        
        <link rel="stylesheet" type="text/css" href="_css/sonda.css" />

        <!-- javascript interno -->
        <script src="_js/jfunction.js" type="text/javascript" ></script>

        <!--Script Grau_Satisfacao_Geral-->
        <script src="_js/funcoes2.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="_css/estilo.css">
        
        <!--Script Temperatura_Reniao-->
        <script src="_js/funcoes.js"></script>
    </head>

    <body class="bg-color">
        <div class="container container-color">
            <br/>
            <img src="_img/logo-sonda-color.png" alt="SONDA" >
            <form method="post" id="multiple_select_form">
                <h3 class="text-center" >Cadastro de Visitas ao Cliente</h3>
                <br/>
                
                <div class="row">
                    <!------------------- [DIRETOR] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">DIRETOR: </label><br/>
                        <select id="Diretoria" name="Diretoria" class="form-control selectpicker" data-live-search="true" >
                        <option disabled selected></option>
                        <?php while($linha = sqlsrv_fetch_array($statement)){ ?>
                                <option value="<?php echo $linha['diretoria']?>"><?php echo $linha['diretoria'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Diretoria_required"></span>
                    </div>

                    <!------------------- [AM] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">GESTOR DE CLIENTE SONDA: </label><br/>
                        <select id="Account_Manager" name="Account_Manager" class="form-control selectpicker" data-live-search="true" >
                        <option disabled selected></option>
                        <?php while($linha = sqlsrv_fetch_array($statement2)){ ?>
                                <option value="<?php echo $linha['AM']?>"><?php echo $linha['AM'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Account_Manager_required"></span>

                    </div>
                </div>

                <div class="row">
                <!------------------- [GRUPO EMPRESARIAL] ------------------->
                <div class="form-group col-md-6">
                        <label class="label-letras">GRUPO EMPRESARIAL: </label><br/>
                        <select id="Grupo" name="Grupo" class="form-control selectpicker" data-live-search="true" >
                        <option selected disabled >selecione um valor</option>
                            <?php while($linha = sqlsrv_fetch_array($statement13)){ ?>
                                <option value="<?php echo $linha['Grupo Empresarial']?>"><?php echo $linha['Grupo Empresarial'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Grupo_required"></span>

                    </div>
                    
                    <!------------------- [GR] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">GESTOR DE CONTAS (GR): </label><br/>
                        <select id="Gestor_Conta" name="Gestor_Conta" class="form-control selectpicker" data-live-search="true">
                        <option selected disabled></option>
                        <?php while($linha = sqlsrv_fetch_array($statement4)){ ?>
                                <option value="<?php echo $linha['Gestor_Conta']?>"><?php echo $linha['Gestor_Conta'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Gestor_Conta_required"></span>
                    </div>
                </div>

                <div class="row">
                <!------------------- [Cliente] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">CLIENTE: </label><br/>
                        <select id="framework" name="framework" class="form-control selectpicker" data-live-search="true" multiple>
                        <option selected disabled></option>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Cliente_required"></span>

                    </div>
                </div>

                <div class="row">
                    <!------------------- [Produtos] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">PRODUTO: </label><br/>
                        <select id="Produto" name="Produto" class="form-control selectpicker" data-live-search="true">
                        <option selected disabled></option>
                        <?php while($linha = sqlsrv_fetch_array($statement6)){ ?>
                                <option value="<?php echo $linha['produto']?>"><?php echo $linha['produto'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Produto_required"></span>

                    </div>

                    <!------------------- [SERVIÇOS] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">SERVIÇO: </label><br/>
                        <select id="Servico" name="Servico" class="form-control selectpicker" data-live-search="true">
                        <option disabled selected></option>
                        <?php while($linha = sqlsrv_fetch_array($statement5)){ ?>
                                <option value="<?php echo $linha['servico']?>"><?php echo $linha['servico'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;" id="Servico_required"></span>

                    </div>
                </div>

                <hr>

                <div class="row">
                    <!------------------- [PARTICIPAÇÃO DO Cliente] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">PARTICIPAÇÃO DO CLIENTE: </label>
                        <input type="text" class="form-control" id="Partic_Clientes" name="Partic_Clientes"/>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Partic_Clientes_required"></span>
                    </div>

                    <!------------------- [PARTICIPAÇÃO SONDA] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">PARTICIPAÇÃO DA SONDA: </label>
                        <input type="text" class="form-control" id="Partic_Sonda" name="Partic_Sonda"/>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Partic_Sonda_required"></span>
                    </div>
                </div>

                <hr>

                    <!------------------- [MOTIVO DA REUNIÃO] ------------------->
                 <div class="row">
                    <div class="form-group col-md-12">
                        <label class="label-letras">MOTIVO DA REUNIÃO: </label><br/>
                        <textarea id="Motivo_Reuniao" name="Motivo_Reuniao" class="form-control"></textarea>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Reuniao_required"></span>
                        </div>
                    </div>

                <hr>

                    <!------------------- [PONTOS POSITIVOS] ------------------->
                    <div class="form-group">
                        <label class="label-letras">PONTOS POSITIVOS: </label>
                        <textarea type="text" class="form-control" id="Pontos_Positivos" name="Pontos_Positivos"></textarea>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Pontos_Positivos_required"></span>
                    </div>

                    <!------------------- [PONTOS NEGATIVOS] ------------------->
                    <div class="form-group">
                        <label class="label-letras">PONTOS NEGATIVOS: </label>
                        <textarea type="text" class="form-control" id="Pontos_Negativos" name="Pontos_Negativos"></textarea>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Pontos_Negativos_required"></span>
                    </div>

                    <!------------------- [OportunidadesS] ------------------->
                    <div class="form-group">
                        <label class="label-letras">OPORTUNIDADES: </label>
                        <textarea type="text" class="form-control" id="Oportunidades" name="Oportunidades"></textarea>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Oportunidades_required"></span>
                    </div>

                <hr>

                <div class="row">
                    <!------------------- [MOTIVO DE SATISFAÇÃO 1] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">1 - MOTIVO DE SATISFAÇÃO: </label>
                        <select class="form-control" id="Motivo_Satisfeito1" name="Motivo_Satisfeito1">
                        <option></option>
                        <?php while($linha = sqlsrv_fetch_array($statement10)){ ?>
                                <option value="<?php echo $linha['Motivo_Satisteito']?>"><?php echo $linha['Motivo_Satisteito'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Satisfeito1_required"></span>
                    </div>

                    <!------------------- [MOTIVO DE SATISFAÇÃO 2] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">2 - MOTIVO DE SATISFAÇÃO: </label>
                        <select class="form-control" id="Motivo_Satisfeito2" name="Motivo_Satisfeito2">
                        <option></option>
                        <?php while($linha = sqlsrv_fetch_array($statement11)){ ?>
                                <option value="<?php echo $linha['Motivo_Satisteito']?>"><?php echo $linha['Motivo_Satisteito'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Satisfeito2_required"></span>
                    </div>

                    <!------------------- [MOTIVO DE SATISFAÇÃO 3] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">3 - MOTIVO DE SATISFAÇÃO: </label>
                        <select class="form-control" id="Motivo_Satisfeito3" name="Motivo_Satisfeito3">
                        <option></option>
                        <?php while($linha = sqlsrv_fetch_array($statement12)){ ?>
                                <option value="<?php echo $linha['Motivo_Satisteito']?>"><?php echo $linha['Motivo_Satisteito'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Satisfeito3_required"></span>
                    </div>

                </div>

                <div class="row">
                    <!------------------- [MOTIVO DE INSATISFAÇÃO 1] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">1 - MOTIVO DE INSATISFAÇÃO: </label>
                        <select class="form-control" id="Motivo_Insatisfeito1" name="Motivo_Insatisfeito1">
                        <option></option>
                        <?php while($linha = sqlsrv_fetch_array($statement7)){ ?>
                                <option value="<?php echo $linha['Motivo_Insatisfeito']?>"><?php echo $linha['Motivo_Insatisfeito'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Insatisfeito1_required"></span>
                    </div>

                    <!------------------- [MOTIVO DE INSATISFAÇÃO 2] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">2 - MOTIVO DE INSATISFAÇÃO: </label>
                        <select class="form-control" id="Motivo_Insatisfeito2" name="Motivo_Insatisfeito2">
                        <option></option>
                        <?php while($linha = sqlsrv_fetch_array($statement8)){ ?>
                                <option value="<?php echo $linha['Motivo_Insatisfeito']?>"><?php echo $linha['Motivo_Insatisfeito'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Insatisfeito2_required"></span>
                    </div>

                    <!------------------- [MOTIVO DE INSATISFAÇÃO 3] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">3 - MOTIVO DE INSATISFAÇÃO: </label>
                        <select class="form-control" id="Motivo_Insatisfeito3" name="Motivo_Insatisfeito3">
                        <option></option>
                        <?php while($linha = sqlsrv_fetch_array($statement9)){ ?>
                                <option value="<?php echo $linha['Motivo_Insatisfeito']?>"><?php echo $linha['Motivo_Insatisfeito'] ?></option>
                            <?php } ?>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Motivo_Insatisfeito3_required"></span>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="label-letras">OBSERVAÇÃO: </label><br/>
                        <textarea id="Observacao_Satisfacao" name="Observacao_Satisfacao" class="form-control"></textarea>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Observacao_Satisfacao_required"></span>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <!------------------- [Canal_visita] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">CANAL DE VISITAS: </label><br/>
                        <select id="Canal_visita" name="Canal_visita" class="form-control">
                            <option disabled selected></option>
                            <option value="Call">Call</option>
                            <option value="presencial(tranporte aéreo, hotel)">presencial (tranporte aéreo, hotel)</option>
                            <option value="presencial(transporte aéreo)">presencial(transporte aéreo)</option>
                            <option value="presencial(sem aéreo)">presencial(sem aéreo)</option>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Canal_visita_required"></span>
                    </div>

                    <!------------------- [GR] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">NUMERO DE PESSOAS(AÉREA/HOTEL): </label><br/>
                        <select id="Num_pessoas_Aereo_Hotel" name="Num_pessoas_Aereo_Hotel" class="form-control">
                            <option disabled selected></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Num_pessoas_Aereo_Hotel_required"></span>
                    </div>

                    <!------------------- [DURAÇÃO] ------------------->
                    <div class="form-group col-md-6">
                        <label class="label-letras">DURAÇÃO DA REUNIÃO: </label><br/>
                        <select id="Tempo_reuniao" name="Tempo_reuniao" class="form-control">
                            <option disabled selected></option>
                            <option value="30"> 30 Minutos </option>
                            <option value="60"> 1 Hora </option>
                            <option value="120"> 2 Horas</option>
                            <option value="180"> 3 Horas</option>
                            <option value="240"> +4 Horas</option>
                        </select>
                        <span  style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Tempo_reuniao_required"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="label-letras">NUMERO DE PESSOAS (UBER/TAXI): </label><br/>
                        <select id="Num_pessoas_Uber_Taxi" name="Num_pessoas_Uber_Taxi" class="form-control">
                            <option disabled selected></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Num_pessoas_Uber_Taxi_required"></span>
                    </div>
                </div>

                <hr> 

                <div class="row">
                    <!------------------- [DATA VISITA] ------------------->
                    <div class="form-group col-md-4">
                        <label class="label-letras">DATA VISITA: </label>
                        <input type="date" name="Data_Visita" id="Data_Visita"/><br />
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Data_Visita_required"></span>
                    </div>
                </div>

                <hr>

                <fieldset class="nota">          
                    <div class="estrelas" id="estrelas">
                        <div>
                        <label>Temperatura da Reunião: </label>
                        </div>
                            <input type="radio" id="vazio" name="Temperatura_Reniao" value="" checked>
                            
                            <label for="estrela_um"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um" name="Temperatura_Reniao" value="1" onclick="Legenda1()">
                            
                            <label for="estrela_dois"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois" name="Temperatura_Reniao" value="2" onclick="Legenda2()">
                            
                            <label for="estrela_tres"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres" name="Temperatura_Reniao" value="3" onclick="Legenda3()">
                            
                            <label for="estrela_quatro"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro" name="Temperatura_Reniao" value="4" onclick="Legenda4()">
                            
                            <label for="estrela_cinco"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco" name="Temperatura_Reniao" value="5" onclick="Legenda5()">

                            <label for="estrela_seis"><i class="fa"></i></label>
                            <input type="radio" id="estrela_seis" name="Temperatura_Reniao" value="6" onclick="Legenda6()">

                            <label for="estrela_sete"><i class="fa"></i></label>
                            <input type="radio" id="estrela_sete" name="Temperatura_Reniao" value="7" onclick="Legenda7()">

                            <label for="estrela_oito"><i class="fa"></i></label>
                            <input type="radio" id="estrela_oito" name="Temperatura_Reniao" value="8" onclick="Legenda8()">

                            <label for="estrela_nove"><i class="fa"></i></label>
                            <input type="radio" id="estrela_nove" name="Temperatura_Reniao" value="9" onclick="Legenda9()">

                            <label for="estrela_dez"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dez" name="Temperatura_Reniao" value="10" onclick="Legenda10()">
                        <p id="legenda1" name="legenda1" class="legenda1"></p>
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Temperatura_Reniao_required"></span>
                    </div>

                        <div class="estrelas" id="estrelas">
                        <div>
                            <label>Grau de Satisfação Geral: </label>
                            </div>
                            <input type="radio" id="vazio" name="Grau_Satisfacao_Geral" value="" checked>
                                
                            <label for="estrela_um2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um2" name="Grau_Satisfacao_Geral" value="1" onclick="Legenda11()">
                                
                            <label for="estrela_dois2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois2" name="Grau_Satisfacao_Geral" value="2" onclick="Legenda12()">
                                
                            <label for="estrela_tres2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres2" name="Grau_Satisfacao_Geral" value="3" onclick="Legenda13()">
                                
                            <label for="estrela_quatro2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro2" name="Grau_Satisfacao_Geral" value="4" onclick="Legenda14()">
                                        
                            <label for="estrela_cinco2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco2" name="Grau_Satisfacao_Geral" value="5" onclick="Legenda15()">

                            <label for="estrela_seis2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_seis2" name="Grau_Satisfacao_Geral" value="6" onclick="Legenda16()">

                            <label for="estrela_sete2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_sete2" name="Grau_Satisfacao_Geral" value="7" onclick="Legenda17()">

                            <label for="estrela_oito2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_oito2" name="Grau_Satisfacao_Geral" value="8" onclick="Legenda18()">

                            <label for="estrela_nove2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_nove2" name="Grau_Satisfacao_Geral" value="9" onclick="Legenda19()">

                            <label for="estrela_dez2"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dez2" name="Grau_Satisfacao_Geral" value="10" onclick="Legenda20()">
                        <p id="legenda2" name="legenda2" class="legenda2"></p> 
                        <span style="color: #aa0909; font-size: 12px; font-weight: bold;"  id="Grau_Satisfacao_Geral_required"></span>   
                    </div>
                </fieldset>

            
                <div class="row">
                    <div class="form-group col-md-2">
                        <!-- <button type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit"> ENVIAR </button> -->
                        <input type="hidden" name="hidden_framework" id="hidden_framework"/>
                        <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit"/>
                    </div>
                </div>
            </form> 
        </div> <!-- class="container" -->
    </body>
</html>


