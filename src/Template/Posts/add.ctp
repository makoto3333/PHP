<?php
$this->assign('title', 'Add New');
?>

    <h1>
        <?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
        Add New
    </h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->control('title'); ?>
<?= $this->Form->control('body', ['rows'=>'3']); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>