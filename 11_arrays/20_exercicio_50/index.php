
<?php

$pessoas = [
    "Werbet"=> 39,
    "Jane"=> 27,
    "André"=> 15,
    "João"=> 43
];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome =>$idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>