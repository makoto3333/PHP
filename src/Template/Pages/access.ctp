<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/04/20
 * Time: 12:46
 */
$this->assign('title', 'アクセス');
?>

<section class=""style="font-size: 30px;font-weight: bold; text-align: center;margin-top:20px;">
    アクセス
</section>

<div class="access-map">
    <div id="mapField"style="width: 800px;height: 600px;margin-top:20px;"></div>
</div>
<?=$this->Html->script('googleMaps.js');?>


