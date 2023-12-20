<h1>Add Game</h1>
<?= $this->Form->create($games) ?>
    <?= $this->Form->control('title') ?>
    <?= $this->Form->control('year')?>
    <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>



