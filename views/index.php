<?php
/* @var $this yii\web\View */
/* @var $header string */
/* @var $options array */
/* @var $items array */
/* @var $isHorizontal boolean */
/* @var $isOnBottom boolean */

use yii\helpers\Url;
use yii\helpers\Html;
use datalayerru\PushMenuWidget\assets\PushMenuAsset;

PushMenuAsset::register($this);
?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="<?= $options['id'] ?>">
    <?php if ($header !== ''): ?>
        <h3><?= $header ?></h3>
    <?php endif; ?>
    <?php foreach ($items as $item): ?>
        <?= Html::a($item['text'], Url::to($item['href']), []) ?>
    <?php endforeach; ?>
</nav>