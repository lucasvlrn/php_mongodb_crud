<?php
require '../../../config/conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_med = rand(0, 10000);
    $med_name = $_POST['name'];
    $cost = $_POST['cost'];
    $sell = $_POST['sell'];
    $date = $_POST['date'];
    $lote = $_POST['lote'];

    $realcost = doubleval($cost);
    $realsell = doubleval($sell);

    $medcollection = $database->medicines;
    $insert = $medcollection->insertOne(
        ['_id' => $id_med,
            'Nome do Medicamento' => $med_name,
            'Preço de Custo' => 'R$' . $realcost,
            'Preço de Venda' => 'R$' . $realsell,
            'Data de Vencimento' => $date,
            'Lote' => $lote]
    );

}
?>