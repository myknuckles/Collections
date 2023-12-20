
<h1>Games</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Year</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($games as $game): ?>
    <tr>
        <td>
            <?= $this->Html->link($game->title, ['action' => 'view', $game->slug]) ?>
        </td>
        <td>
            <?= $this->Html->link($game->year,['action' => 'view', $game->slug]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
