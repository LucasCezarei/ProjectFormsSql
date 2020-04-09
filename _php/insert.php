<?php
session_start();
include('../_conn/database_conn.php');

$sql = "INSERT INTO FormOut_Visitas(Grupo_Empresarial, Diretoria, Account_Manager, Gestor_Conta, Cliente, Partic_Clientes, Partic_Sonda, Data_Visita, Servico, Produto, Motivo_Reuniao, Pontos_Positivos, Pontos_Negativos, Oportunidades, Temperatura_Reniao, Grau_Satisfacao_Geral, Motivo_Satisfeito1, Motivo_Satisfeito2, Motivo_Satisfeito3, Motivo_Insatisfeito1, Motivo_Insatisfeito2, Motivo_Insatisfeito3, Observacao_Satisfacao, Canal_visita, Num_pessoas_Aereo_Hotel, Num_pessoas_Uber_Taxi, Tempo_reuniao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//INSERT INTO FormOut_Visitas02(Grupo_Empresarial, Diretoria, Account_Manager, Gestor_Conta, Cliente, Partic_Clientes, Partic_Sonda, Data_Visita, Servico, Produto, Motivo_Reuniao, Pontos_Positivos, Pontos_Negativos, Oportunidades, Temperatura_Reniao, Grau_Satisfacao_Geral, Motivo_Satisfeito1, Motivo_Satisfeito2 ,Motivo_Satisfeito3, Motivo_Insatisfeito1, Motivo_Insatisfeito2, Motivo_Insatisfeito3, Observacao_Satisfacao, Canal_visita, Num_pessoas_Aereo_Hotel, Num_pessoas_Uber_Taxi, Tempo_reuniao) VALUES ('Grupo_Empresarial', 'Diretoria', 'Account_Manager', 'Gestor_Conta', 'Cliente', 'Partic_Clientes', 'Partic_Sonda', '05/03/2005', 'Servico', 'Produto', 'Motivo_Reuniao', 'Pontos_Positivos', 'Pontos_Negativos', 'Oportunidades', 8, 3, 'Motivo_Satisfeito1', 'Motivo_Satisfeito2', 'Motivo_Satisfeito3', 'Motivo_Insatisfeito1', 'Motivo_Insatisfeito2', 'Motivo_Insatisfeito3', 'Observacao_Satisfacao', 'Canal_visita', 3, 4, 2);

//$parAccount_Managers = array($_POST['Diretoria'], $_POST['Account_Manager'], $_POST['Gestor_Conta'], $_POST['Servico'], $_POST['Cliente'], $_POST['Grupo'], $_POST['Produto'], $_POST['Partic_Clientes'], $_POST['Partic_Sonda'], $_POST['Motivo_Reuniao'], $_POST['Pontos_Positivos'], $_POST['Pontos_Negativos'], $_POST['Oportunidades'], $_POST['Motivo_Satisfeito1'], $_POST['Motivo_Satisfeito2'], $_POST['Motivo_Satisfeito3'], $_POST['Motivo_Insatisfeito1'], $_POST['Motivo_Insatisfeito2'], $_POST['Motivo_Insatisfeito3'], $_POST['Observacao_Satisfacao'], $_POST['Canal_visita'], $_POST['Num_pessoas_Aereo_Hotel'], $_POST['Num_pessoas_Uber_Taxi'], $_POST['Tempo_reuniao'], $_POST['Data_Visita'], $_POST['Temperatura_Reniao'], $_POST['Grau_Satisfacao_Geral']);

$parAccount_Managers = array($_POST['Grupo'], $_POST['Diretoria'], $_POST['Account_Manager'], $_POST['Gestor_Conta'], $_POST['Cliente'], $_POST['Partic_Clientes'], $_POST['Partic_Sonda'], $_POST['Data_Visita'], $_POST['Servico'], $_POST['Produto'], $_POST['Motivo_Reuniao'], $_POST['Pontos_Positivos'], $_POST['Pontos_Negativos'], $_POST['Oportunidades'], $_POST['Temperatura_Reniao'], $_POST['Grau_Satisfacao_Geral'], $_POST['Motivo_Satisfeito1'], $_POST['Motivo_Satisfeito2'], $_POST['Motivo_Satisfeito3'], $_POST['Motivo_Insatisfeito1'], $_POST['Motivo_Insatisfeito2'], $_POST['Motivo_Insatisfeito3'], $_POST['Observacao_Satisfacao'], $_POST['Canal_visita'], $_POST['Num_pessoas_Aereo_Hotel'], $_POST['Num_pessoas_Uber_Taxi'], $_POST['Tempo_reuniao']);

if($statement = sqlsrv_query($connect, $sql, $parAccount_Managers)){
    echo "inserida com sucesso. \n";
}else{
    echo 'ERRO!';
}

