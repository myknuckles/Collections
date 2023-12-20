<h1>Add Game</h1>
<?= $this->Form->create(null, ['url' => ['controller' => 'Games', 'action' => 'add']]) ?>
    <?= $this->Form->control('title') ?>
    <?= $this->Form->control('year') ?>
    <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>



