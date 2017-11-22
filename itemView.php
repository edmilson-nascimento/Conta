<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './itemController.php';

$itemController = new ItemController();

$result = $itemController->lista();
?>

<?php
if (count($result) > 0):
//    $total = ($row[2] * $row[3]);
//    array_push($row, $total);
    ?>

    <table>
        <tr>
            <th>Item</th>
            <th>Descr.</th>
            <th>Quantidade</th>
            <th>Valor Unit.(R$)</th>
            <th>Valor(R$)</th>
        </tr>

        <?php
        foreach ($result as $row):
            $total = ($row[2] * $row[3]);
            ?>

            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo number_format($row[3], 2, ',', '.'); ?></td>
                <td><?php echo number_format($total, 2, ',', '.'); ?></td>
            </tr>

    <?php endforeach; ?>
            
    </table>

<?php endif; ?>


