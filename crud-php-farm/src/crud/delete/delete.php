<?php
require '../../../config/conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $intid = intval($id);
    $medcollection = $database->medicines;

    $find = $medcollection->findOne(
        ['_id' => $intid]
    );

    if ($find) {
        $delete = $medcollection->deleteOne(
            ['_id' => $intid]
        );
    } else {
        header("Location: erro.php");
        die();
    }

}
?>