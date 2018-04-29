<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/26
 * Time: 17:34
 */
$this->assign('title', 'チャット');
?>
<?= $this->Html->css('chats_styles.css') ?>

<textarea type="text"id="message"  cols="20" rows="5"></textarea>
<button id="send" name="send" class="btn" >送る</button>

<div id="chat" class="chat-group"></div>



<?=$this->Html->script('Chat.js');?>

