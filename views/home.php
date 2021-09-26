<table>
    <?php foreach ($list as $item): ?>
    <tr>
        <td><?= $item->id ?></td>
        <td><?= $item->name ?></td>
        <td><?= $item->age ?></td>
    </tr>
    <?php endforeach; ?>
</table>
