<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/18
 * Time: 14:32
 */
$this->assign('title', '問い合わせ');
?>
<?= $this->Html->css('contacts_styles.css') ?>
<?php $this->assign('title','お問い合わせ'); ?>

<div class="form-group">
<?=  $this->Form->create($contact); ?>
<div class="panel-heading">お問い合わせ
    <p>お気軽にお問い合わせください</p>
</div>


<div class="contact-user">
    <label class="control-label">※名前</label>
    <?= $this->Form->control('name', ['label' => false]);?>
    <label class="control-label">※Email</label>
    <?= $this->Form->control('email', ['label' => false]);?>
</div>

<div class="controls">
    <div class="control-label martter-group">※問い合わせ内容
        <div class="radio">
            <label>
                <input type="radio" name="matter" id="optionsRadios1" value="matter1" checked>
                <?=$contact->matter['matter1']?>
            </label>            <label>
                <input type="radio" name="matter" id="optionsRadios2" value="matter2">
                <?=$contact->matter['matter2']?>
            </label>
            <label>
                <input type="radio" name="matter" id="optionsRadios3" value="matter3">
                <?=$contact->matter['matter3']?>
            </label>
        </div>
        <div class="controls">
            <?= $this->Form->control('body', ['rows'=>'15', 'label' => false]); ?>
        </div>
    </div>
</div>



<?= $this->Form->button('確認',['name' => 'confirm']); ?>
<?= $this->Form->end(); ?>
</div>
