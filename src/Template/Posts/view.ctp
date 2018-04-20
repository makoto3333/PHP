<?php
$this->assign('title', 'Blog Detail');
?>

<h1><?= h($post->title);?></h1>
<p><?= nl2br(h($post->body));?></p>

<?php if(count($post->comments)):?>
<h2>Comments <span class="fs12">(<?=count($post->comments);?>)</span></h2>
<ul>
    <?php foreach($post->comments as $comment):?>
    <li>
        <?=h($comment->body);?>
        <?= $this->Form->PostLink(
            '[×]',
            ['controller'=>'Comments','action'=>'delete', $comment->id],
            ['confirm'=>'Are you sure?', 'class'=>'fs12']
        );?>
    </li>
    <?php endforeach;?>
</ul>
<?php endif;?>

<h2>New Comment</h2>

<?= $this->Form->create(null,[
    'url'=>['controller'=>'comments', 'action'=>'add']
    ]);?>
<?= $this->Form->control('body');?>
<?= $this->Form->hidden('post_id',['value'=>$post->id]);?>
<?= $this->Form->button('Add');?>
<?= $this->Form->end();?>

<p><?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]);?></p>