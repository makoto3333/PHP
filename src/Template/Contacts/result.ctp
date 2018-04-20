<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/18
 * Time: 14:32
 */
$this->assign('title', '問い合わせ');
?>
    <div class="panel-heading">お問い合わせ</div>
    <div class="control-label">名前 <?= $this->request->getData('name');?></div>

    <div class="control-label">Email <?= $this->request->getData('email');?></div>

    <div class="control-label">内容 <?= $this->request->getData('contact');?></div>

<?= nl2br($this->request->getData('body'));?>
<?= $this->Form->create(); ?>
<?= $this->Form->button('送信', ['name' => 'send']); ?>
<?= $this->Form->button('戻る', ['onclick' => 'history.back()', 'type' => 'button']) ?>
<?= $this->Form->end(); ?>