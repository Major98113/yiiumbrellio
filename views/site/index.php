<?php
use major98113\umbrelliotest\AutoloadExample;
use major98113\umbrelliotest\FileRead;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?=FileRead::widget(['path' => Yii::getAlias('@webroot').'/test.txt', 'searchStr' => 'venenatis' ]); ?>
    <hr/>
    <?=FileRead::widget(['path' => Yii::getAlias('@webroot').'/test.txt', 'searchStr' => 'venenatis' , 'maxSize' => '1KB' ]); ?>
    <hr/>
    <?=FileRead::widget(['path' => Yii::getAlias('@webroot').'/test.txt', 'searchStr' => 'venenatis' , 'maxSize' => '100KB' ]); ?>
    <hr/>
    <?=FileRead::widget(['path' => Yii::getAlias('@webroot').'/test', 'searchStr' => 'venenatis' , 'maxSize' => '20M' ]); ?>
    <hr/>
    <?=FileRead::widget(['path' => 'https://www.w3.org/TR/PNG/iso_8859-1.txt', 'searchStr' => 'BROKEN' ]); ?>
    <hr/>
    <?=FileRead::widget(['path' => 'https://www.w3.org/TR/PNG/iso_8859-1.txt', 'searchStr' => 'BRssOKEN' ]); ?>
    <hr/>
    <?=FileRead::widget(['path' => 'https://www.w3.org/TR/PNG/iso_885232332239-1', 'searchStr' => 'BRssOKEN' ]); ?>
    <hr/>

</div>
