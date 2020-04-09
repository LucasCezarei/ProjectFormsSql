<?php

include('../_conn/database_conn.php');

if(isset($_POST["selected"])){
    $query = "SELECT * FROM Tcnpj WHERE cliente_id IN ('".$_POST["selected"]."')";
    $statement = sqlsrv_query($connect, $query);
    $output = '';

    while($row = sqlsrv_fetch_array($statement)){
        $output .= '<option value="'. $row["cnpj_id"].'">'.$row["cnpj"].'</option>';
    }

    echo $output;

}