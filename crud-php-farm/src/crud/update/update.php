<?php
require '../../../config/conexao.php';
$id = $_POST['id'];
$int_id = intval($id);
$medcollection = $database->medicines;

$query = $medcollection->findOne(['_id' => $int_id]);

if ($query) {
    $med_name = $_POST['name'];
    $cost = $_POST['cost'];
    $sell = $_POST['sell'];
    $date = $_POST['date'];
    $lote = $_POST['lote'];

    $realcost = doubleval($cost);
    $realsell = doubleval($sell);


    $update = [
        '$set' => [
            'Nome do Medicamento' => $med_name,
            'Preço de Custo' => 'R$' . $realcost,
            'Preço de Venda' => 'R$' . $realsell,
            'Data de Vencimento' => $date,
            'Lote' => $lote
        ]

    ];


    $updateResult = $medcollection->updateOne(['_id' => $int_id], $update);
    header("Location: ../read/read.php");
    die();
} else {
    header("Location: erro.php");
    die();
}
?>