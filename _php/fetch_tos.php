<?php

include('../_conn/database_conn.php');

if(isset($_POST["selected"])){
    $query = "SELECT * FROM Tos WHERE cnpj_id IN ('".$_POST["selected"]."')";
    $statement = sqlsrv_query($connect, $query);
    $output = '';

    while($row = sqlsrv_fetch_array($statement)){
        $output .= '<option value="'. $row["os"].'">'.$row["os"].'</option>';
    }

    echo $output;

}