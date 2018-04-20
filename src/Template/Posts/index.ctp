<?php
$this->assign('title', 'Blog Posts');
?>

<h1><p><?= $this->Html->link('Add New', ['action'=>'add'], ['class'=>['pull-right', 'fs12']]);?></p>
    Blog Posts
</h1>
<ul>
    <?php foreach ($posts as $post):?>
        <li>
            <?= $this->Html->link($post->title, ['controller' =>'Posts', 'action' =>'view', $post->id]);?>
            <?= $post->created ?>
            <?= $this->Html->link('[Edit]', ['controller' =>'Posts', 'action' =>'edit', $post->id]);?>
            <?= $this->Form->PostLink(
                    '[×]',
                    ['action'=>'delete', $post->id],
                    ['confirm'=>'Are you sure?', 'class'=>'fs12']
            );?>
        </li>
    <?php endforeach;?>
</ul>