<?php
$this->assign('title', 'Edit Post');
?>

<h1>Edit Post</h1>


<?= $this->Form->create($post);?>
<?= $this->Form->control('title');?>
<?= $this->Form->control('body', ['rows'=>'3']);?>
<?= $this->Form->button('Update');?>
<?= $this->Form->end();?>

<p><?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]);?></p>
