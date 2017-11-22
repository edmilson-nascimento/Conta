<?php


require_once './contaController.php';

$contaController = new contaController();

$result = $contaController->lista();
?>

<?php
if (count($result) > 0):
//    $total = ($row[2] * $row[3]);
//    array_push($row, $total);
    ?>

    <table>
        <tr>
            <th>Item</th>
            <th>Pessoa</th>
            <th>Valor(R$)</th>
        </tr>

        <?php
        foreach ($result as $row):
            $total = ($row[2] * $row[3]);
            ?>

            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo number_format($total, 2, ',', '.'); ?></td>
            </tr>

    <?php endforeach; ?>
            
    </table>

<?php endif; ?>


