<?php
require '../../../config/conexao.php';
$medcollection = $database->medicines;
$query = $medcollection->find([]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="read.css">
    <title>Rapid Cure | Ver MED</title>
</head>

<body>
    <div class="container">
        <h1 style="color: var(--verde-esc)">Ver Produtos</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Custo</th>
                    <th>Venda</th>
                    <th>Vencimento</th>
                    <th>Lote</th>
                </tr>
            </thead>

            <?php
            foreach ($query as $document) {

                $id_med = $document['_id'];
                $nome_med = $document['Nome do Medicamento'];
                $custo = $document['Preço de Custo'];
                $venda = $document['Preço de Venda'];
                $venc_med = $document['Data de Vencimento'];
                $lote = $document['Lote'];

                echo "<tr>
          <td>$id_med</td>
          <td>$nome_med</td>
          <td>$custo</td>
          <td>$venda</td>
          <td>$venc_med</td>
          <td>$lote</td>
          </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>