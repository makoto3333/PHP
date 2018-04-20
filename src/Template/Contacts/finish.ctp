<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/18
 * Time: 14:32
 */
?>
<?php $this->assign('title',' お問い合わせ完了画面'); ?>
<?php echo $this->Form->create(false,array('type' => 'post','url' => '')); ?>

<div class="container">
<div class="col-12">

<div class="panel panel-danger">
<div class="panel-heading">  送信完了しました。</div>
<div class="panel-body">

    <p><?= $this->Html->link('Back', ['action'=>'form'], ['type'=>'button','class'=>['pull-right', 'fs12', 'btn']]);?></p>
</div>
</div>
<?php echo $this->Form->end(); ?>
</div>