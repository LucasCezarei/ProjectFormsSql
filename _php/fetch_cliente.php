<?php
 
include('../_conn/database_conn.php');
 
if(isset($_POST["selected"])){
    //$query = "SELECT * FROM Tcliente WHERE grupo_id IN ('".$_POST["selected"]."')";
    $query = "SELECT DISTINCT ds_Cliente FROM FormEntrada_CadastroOS WHERE [Grupo Empresarial] COLLATE LATIN1_GENERAL_CI_AI like ('".$_POST["selected"]."%')";
    $statement = sqlsrv_query($connect, $query);
    $output = '';
 
    while($row = sqlsrv_fetch_array($statement)){
        $output .= '<option value="'. $row["ds_Cliente"].'">'.$row["ds_Cliente"].'</option>';
    }
 
    echo $output;
 
}